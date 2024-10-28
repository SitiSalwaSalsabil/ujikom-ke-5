<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        // Mengambil data user berdasarkan ID
        $user = User::findOrFail($id);

        // Mengirim data user ke view 'profile'
        return view('profile', compact('user'));
    }
}
