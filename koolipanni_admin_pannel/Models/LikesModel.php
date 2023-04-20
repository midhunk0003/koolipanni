<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikesModel extends Model
{
    use HasFactory;
    protected $table = 'like';
    protected $fillable = ['category_id','worker_details_id','user_id','status','likes'];
}
