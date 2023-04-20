<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerdocumentModel extends Model
{
    use HasFactory;
    protected $table = "workerdocument";
    protected $fillable = ['category_id','worker_details_id','aadhar_frount','aadhar_back','desigination_doc'];
}
