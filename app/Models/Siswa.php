<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    
    protected $fillable = [
        'name',
        'tgl_lahir',
        'jk',
        'alamat',
        'jurusan',
        'kelas',
        'ws1',
        'tws1',
        'ts',
        'foto',
        'username',
    ];
}
