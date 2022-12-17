<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TheoDoiBaiViet extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'theo_doi_bai_viet';
    protected $fillable = ['bai_viet_id','tieu_de','noi_dung'];
}
