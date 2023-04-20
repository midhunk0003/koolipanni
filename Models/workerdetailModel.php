<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workerdetailModel extends Model
{
    use HasFactory;
    protected $table = "worker_details";
    protected $fillable = [
        'category_id',
        'user_id',
        'fname',
        'lname',
        'workerprofileimage',
        'email',
        'phone',
        'phone2',
        'password',
        'status',
        'register_date',
        'register_enroll_id',
        'full_address',
        'reference_name',
        'reference_address',
        'pincode',
        'state',
        'city',
        'location',
        ];
}
