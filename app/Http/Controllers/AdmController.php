<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function pelanggan() {
        return view('admin.pelanggan');
    }

    public function kategori() {
        return view('admin.kategori');
    }

    public function produk() {
        return view('admin.produk');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function contact() {
        return view('admin.contact');
    }
}
