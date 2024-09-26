<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Septian Mukti',
            'email' => 'septian@madiunkab.go.id',
            'no_hp' => '081230533365',
            'role' => 'admin',
            'password' => bcrypt('Qwertyok123*7'),
            'account_status' => 'active',
        ]);

        User::create([
            'name' => 'Diskominfo Kabupaten Madiun',
            'email' => 'diskominfo@madiunkab.go.id',
            'no_hp' => '081234567890',
            'role' => 'admin',
            'password' => bcrypt('Kominfo2024'),
        ]);

        User::create([
            'name' => 'Media Tes',
            'email' => 'media@madiunkab.go.id',
            'jenis_perusahaan' => 'media-cetak',
            'nama_perusahaan' => 'PT. Kompas Gramedia',
            'media_name' => 'Koran Kompas',
            'no_hp' => '081234567890',
            'role' => 'user',
            'password' => bcrypt('Media2024'),
            'account_status' => 'active',
        ]);

        User::create([
            'name' => 'Media 2 Tes',
            'email' => 'media2@madiunkab.go.id',
            'jenis_perusahaan' => 'media-elektronik',
            'nama_perusahaan' => 'PT. CT Corp',
            'media_name' => 'Detik Media',
            'no_hp' => '081234567890',
            'role' => 'user',
            'password' => bcrypt('Media2024'),
        ]);
    }
}
