<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'jenis_perusahaan' => ['required', 'string', 'max:255'],
            'nama_perusahaan' => ['required', 'string', 'max:255'],
            'media_name' => ['required', 'string', 'max:255'],
            'no_hp' => ['required', 'numeric', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'jenis_perusahaan' => $input['jenis_perusahaan'],
            'nama_perusahaan' => $input['nama_perusahaan'],
            'media_name' => $input['media_name'],
            'no_hp' => $input['no_hp'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
