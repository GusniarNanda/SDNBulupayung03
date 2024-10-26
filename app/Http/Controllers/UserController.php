<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Profiler\Profile;

class UserController extends Controller
{
    // Menampilkan halaman edit profil
    public function index()
    {
        return view('profile');  // Path ke view yang ada di folder utama views
    }

    public function update(Request $request)
    {
        $user = Auth::user();  // Ambil user yang sedang login

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Aktifkan validasi gambar
        ]);

        // Perbarui data user
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Jika user mengunggah foto profil baru
        if ($request->hasFile('profile_image')) {
            // Menghapus gambar profil lama jika ada
            if ($user->profile_image) {
                $oldImagePath = public_path('images/profile/' . $user->profile_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);  // Menghapus gambar lama
                }
            }

            // Menyimpan gambar profil baru
            $imageName = time() . '.' . $request->profile_image->extension();
            $request->profile_image->move(public_path('images/profile'), $imageName);
            $user->profile_image = $imageName;
        }

        //$user->save();  // Simpan perubahan

        return redirect()->route('profile.settings')->with('success', 'Profile updated successfully');
    }

}
