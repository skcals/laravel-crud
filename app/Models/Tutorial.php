<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;

    protected $table = 'tutorials';

    public $timestamps = true;

    protected $guarded = [];

    protected $attributes = [
        'level' => 1
    ];

    public function getLevelNameAttribute()
    {
        return  $this->getAllLevels()[$this->level];
    }

    public function getAllLevels()
    {
        return [
            1 => "Beginner",
            2 => "Intermediate",
            3 => "Advance",
        ];
    }
}
