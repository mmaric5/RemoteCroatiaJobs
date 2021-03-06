<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfWorks extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function ads() { return $this->belongsTo(Ad::class); }
}
