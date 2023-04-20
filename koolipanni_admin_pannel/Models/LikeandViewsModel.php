<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeandViewsModel extends Model
{
    use HasFactory;
    protected $table = 'viewsandlikes';
    protected $fillable = ['category_id','worker_details_id','user_id','status','views'];
}
