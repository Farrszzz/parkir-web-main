<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'user';
    protected $fillable = ['username', 'password', 'role', 'mall'];
    protected $primaryKey = 'id_user';
}
