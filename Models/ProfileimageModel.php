<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileimageModel extends Model
{
    use HasFactory;
    protected $table = 'userprofileimage';
    protected $fillable = ['userid','profileimage'];
}
