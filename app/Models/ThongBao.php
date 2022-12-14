<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongBao extends Model
{
    use HasFactory;
    protected $table = 'thong_bao';
    protected $fillable = ['nguoi_nhan_id','bai_viet_id','tieu_de','noi_dung'];
    public function ThongBao(){
        return $this->belongsto(ThongBao::class);
    }
}
