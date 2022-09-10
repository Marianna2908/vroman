<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'photo_id',
        'project_category_id',
        'body',
    ];
    public function categoryProject(){
        return $this->belongsTo(CategoryProject::class);
    }

}
