<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsandratingsModel extends Model
{
    use HasFactory;
    protected $table = 'commentsandratings';
    protected $fillable = ['worker_details_id','user_id','comments','rating'];
}
