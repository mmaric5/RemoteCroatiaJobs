<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'conditions',
        'whatDoWeOffer',
        'linkForApplication',
        'workFromHome', 
        'description',
        'category'
    ];

    public function language() { return $this->hasMany(Language::class); }

    public function qualification() { return $this->hasMany(Qualification::class); }

    public function typeOfWork() { return $this->hasMany(TypeOfWorks::class); }

    public function category() { return $this->hasMany(Category::class); }

    public function companies() { return $this->hasMany(Company::class); }
}
