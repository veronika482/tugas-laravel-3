<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
   protected $fillable = ['judul','isi','users_id'];
   protected $table = 'berita';
}
