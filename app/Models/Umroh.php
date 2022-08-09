<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umroh extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function daftar()
    {
      return $this->hasMany(Daftar::class);
    }
}
