<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class LandingPageController extends Controller
{
    
    public function home()
    {
        $data = [
            
        ];
        return view('.landing.index', $data);
    }

    public function allLibrary()
    {
        $data = [
            "all_books" => Buku::all()
        ];
        return view('.landing.librarys', $data);
    }
}
