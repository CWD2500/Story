<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Story extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable  = [
        'title',
        'pictuer',
        'cost',
        'price',
        'old_price',
        'description',
        'create_story',
    ];
}
