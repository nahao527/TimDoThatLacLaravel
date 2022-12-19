<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $table = 'binh_luan';
    protected $fillable = ['ten_nguoi_dung','nguoi_dung_id', 'bai_viet_id','noi_dung'];
}
