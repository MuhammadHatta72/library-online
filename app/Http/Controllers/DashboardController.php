<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        $data = [
        ];
        return view('dashboard.admin', $data);
    }
    public function user()
    {
        $data = [
            "peminjamans" => Peminjaman::where('id_user', auth()->user()->id)->get(),
        ];
        return view('landing.dashboard', $data);
    }
    public function index(){
        if(auth()->user()->role == 'admin'){
            return $this->admin();
        }else{
            return $this->user();
        }
    }
}
