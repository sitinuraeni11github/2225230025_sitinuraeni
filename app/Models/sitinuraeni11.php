<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sitinuraeni11 extends Model
{
    use HasFactory;
    protected $table= 'sitinuraeni11';
    protected $fillable= ['nama','email','tanggallahir','nim','jurusan','namaregu','semester'];
}
