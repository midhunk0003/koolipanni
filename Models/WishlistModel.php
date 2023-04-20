<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistModel extends Model
{
    use HasFactory;
    protected $table = 'wishlist';
    protected $fillable = ['category_id','worker_details_id','user_id','status'];
}
