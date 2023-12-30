<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'alamat' => 'required|string',
            'no_hp' => 'required|numeric',
        ], [
            'nama.required' => 'Nama harus diisi!',
            'nama.string' => 'Nama harus berupa string!',
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Email harus berupa email!',
            'alamat.required' => 'Alamat harus diisi!',
            'alamat.string' => 'Alamat harus berupa string!',
            'no_hp.required' => 'No HP harus diisi!',
            'no_hp.numeric' => 'No HP harus berupa angka!',
        ]);

        $user = User::find($id);
        $data = $request->all();

        $password = "";

        if($request->password !== null){
            // Jika password inputan tidak sama
            if (!password_verify($request->password, $user->password)) {
                $password = Hash::make($data['password']);
            } else if (password_verify($request->password, $user->password)) { // Jika sama
                $password = $user->password;
            }
        }

        User::where('id', $id)->update([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'alamat' => $data['alamat'],
            'no_hp' => $data['no_hp'],
            'password' => $password,
        ]);
        return back()->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
