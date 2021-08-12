<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DangKyHocPhan extends Model
{
    use HasFactory;
    
    protected $table = 'dang_ky_hoc_phans';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'monhoc_id'
    ];
}
