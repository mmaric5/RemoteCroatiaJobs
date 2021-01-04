<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function cities() { return $this->belongsTo(Cities::class); }

    public function countries() { return $this->hasMany(Country::class); }
}
