<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worksImagesModel extends Model
{
    use HasFactory;
    protected $table = "works_images";
    protected $fillable = ['worker_details_id','user_id','worksimage'];

}
