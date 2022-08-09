<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

    // protected $fillable = ['nik', 'nama', 'tmp_lahir', 'tgl_lahir', 'jk', 'alamat', 'nama_ayah', 'negara', 'nohp', 'paket', 'rencana', 'ibadah'];
    protected $guarded = ['id'];

    public function umroh()
    {
      return $this->belongsTo(Umroh::class);
    }
}
