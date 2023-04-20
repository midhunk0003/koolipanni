<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcategoryModel extends Model
{
    use HasFactory;

    protected $table = 'subcategorymodel';
    protected $fillable = [
        'category_id',
        'subcategory',
        'image','status',
        'subcat_description',
        'work_details',
        'included_details',
        'general_starting_price',
        'duration',
        'turnaround_time'];
}
