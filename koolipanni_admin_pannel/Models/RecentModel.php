<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentModel extends Model
{
    use HasFactory;
    protected $table = 'recent_viewed_worker';
    protected $fillable = ['category_id','worker_details_id','use'];
}
