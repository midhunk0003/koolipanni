<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCatWorkIncludeModel extends Model
{
    use HasFactory;
    protected $table = 'workincluded';
    protected $fillable =['category_id','workerincludeddetails','subcateg_id'];
}
