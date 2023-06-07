<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class FeController extends Controller
{
    public function index() {
        return view('user.index');
    }

    public function cars() {
        $produk = Produk::all();
        return view('user.cars', compact('produk'));
    }

    public function about() {
        return view('user.about');
    }

    public function contact() {
        return view('user.contactus');
    }

    public function details($id) {
        $produk = Produk::with('contact', 'kategori')->find($id);
        return view('user.details', compact('produk'));
    }
}
