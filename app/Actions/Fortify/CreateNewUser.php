<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered mahasiswa.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        // Validator::make($input, [
        //     'nama' => ['required', 'string', 'max:255'],
        //     'alamat' => ['required', 'string', 'max:255'],
        //     'no_hp' => ['required', 'string', 'max:255'],
        //     'email' => [
        //         'required',
        //         'string',
        //         'email',
        //         'max:255',
        //         Rule::unique(User::class),
        //     ],
        //     'password' => $this->passwordRules(),
        // ],
        // [
        //     'nama.required' => 'Nama tidak boleh kosong',
        //     'alamat.required' => 'Alamat tidak boleh kosong',
        //     'no_hp.required' => 'No HP tidak boleh kosong',
        //     'email.required' => 'Email tidak boleh kosong',
        //     'password.required' => 'Password tidak boleh kosong',
        // ])->validate();

        // return User::create([
        //     'nama' => $input['nama'],
        //     'alamat' => $input['alamat'],
        //     'no_hp' => $input['no_hp'],
        //     'email' => $input['email'],
        //     'password' => Hash::make($input['password']),
        //     'check_admin' => 'Belum Terverifikasi',
        //     'role' => 'user',
        // ]);
    }
}
