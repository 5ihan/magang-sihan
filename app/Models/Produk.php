<?php

namespace App\Models;

use App\Models\Contact;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $guarded = [];
    protected $primaryKey = 'id';
    public function contact(){
        return $this->belongsTo(Contact::class);
    }
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

}
