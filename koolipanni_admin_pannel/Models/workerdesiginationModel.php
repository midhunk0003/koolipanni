<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workerdesiginationModel extends Model
{
    use HasFactory;
    protected $table = "workerdesigination";
    protected $fillable = ['category_id','worker_details_id','workerdocument_id','worker_charge','price','desiginationdetails','status'];

}
