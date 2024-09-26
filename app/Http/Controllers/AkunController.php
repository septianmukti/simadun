<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AkunController extends Controller
{
    public function ViewApprovalAkun()
    {
        $userinactive = User::where('id', '!=', Auth::user()->id)
            ->where('account_status', '=', 'inactive')
            ->orderBy('id', 'desc')
            ->get();

        $useractive = User::where('id', '!=', Auth::user()->id)
            ->where('account_status', '=', 'active')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.account-approval', ['userinactive' => $userinactive, 'useractive' => $useractive]);
    }

    public function ActiveAccount($id)
    {
        try {
            User::findOrFail($id)->update(['account_status' => 'active']);
            return redirect()->back()->with('success', 'Akun sudah di Approve !!');
        } catch (\Throwable $t) {
            return redirect()->back()->with('error', $t->getMessage());
        }
    }
}
