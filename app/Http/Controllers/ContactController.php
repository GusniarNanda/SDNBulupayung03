<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Ambil data pertama dari tabel 'contacts'
        $contact = Contact::first();
        return view('contact', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tidak digunakan
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Tidak digunakan
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        // Tidak digunakan
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        // Tidak digunakan
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Cari data contact berdasarkan ID
        $contact = Contact::findOrFail($id);
    
        // Validasi input pengguna dengan aturan lebih spesifik
        $request->validate([
            'alamat' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'telepon' => 'nullable|string|max:20',
            'maps_embed' => 'nullable|string',
            'link_email' => ['nullable', 'max:255', function ($attribute, $value, $fail) {
                // Jika link_email ada dan dimulai dengan 'mailto:', periksa apakah format email valid
                if ($value && !str_starts_with($value, 'mailto:')) {
                    // Validasi URL jika tidak diawali dengan mailto:
                    if (!filter_var($value, FILTER_VALIDATE_URL)) {
                        return $fail('The ' . $attribute . ' must be a valid URL.');
                    }
                } else {
                    // Jika ada link mailto:, periksa format email
                    $email = substr($value, 7); // Menghapus mailto:
                    if ($value && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        return $fail('The ' . $attribute . ' must be a valid email address.');
                    }
                }
            }],
            'link_telepon' => 'nullable|string|max:255', // validasi link telepon jika diisi
        ]);
    
        // Ambil data yang sudah divalidasi
        $data = $request->only(['alamat', 'telepon','email', 'maps_embed', 'link_email', 'link_telepon']);
    
        // Update data contact di database
        $contact->update($data);
    
        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('message', 'Data Berhasil Diedit');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        // Tidak digunakan
    }
}
