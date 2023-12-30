<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'all_users' => User::where('role', 'user')->get(),
        ];

        return view('pengguna.index', $data);
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
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'no_hp' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => "required|string|min:8|confirmed",
            'password_confirmation' => 'required',
        ],
        [
            'nama.required' => 'Nama tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'no_hp.required' => 'No HP tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password.confirmed' => 'Password tidak sama',
            'password.min' => 'Password minimal 8 karakter'
        ]);

        User::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'check_admin' => 'Belum Terverifikasi',
            'role' => 'user',
        ]);

        return redirect()->route('login')->with('success', 'Berhasil mendaftar, silahkan login');
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
        $user = User::findOrFail($id);

        if($user == null){
            return redirect()->route('pengguna.index')->with('error', 'Pengguna tidak ditemukan');
        }else{
            $user->check_admin = 'Terverifikasi';
            $user->save();

            return redirect()->route('pengguna.index')->with('success', 'Berhasil verifikasi pengguna');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        if($user->role == 'admin'){
            return redirect()->route('pengguna.index')->with('error', 'Tidak dapat menghapus admin');
        }else{
            $user->delete();
            return redirect()->route('pengguna.index')->with('success', 'Berhasil menghapus pengguna');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => "required|string|min:8",
        ],
        [
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter'
        ]);

        $user = User::where('email', $request->email)->first();
        
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if ($user->check_admin == 'Terverifikasi') {
                    auth()->login($user);
                    if (auth()->user()->role == 'admin') {
                        return redirect()->route('home');
                    } else {
                        return redirect()->route('home');
                    }
                } else {
                    return redirect()->route('login')->with('error', 'Akun anda belum terverifikasi');
                }
            } else {
                return redirect()->route('login')->with('error', 'Password salah');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email tidak terdaftar');
        }
    }
}
