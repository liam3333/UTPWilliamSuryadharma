<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadingTime extends Model
{
    use HasFactory;

    public $guarded = ["id"];

    public function Detail() {
        return $this->hasMany(Detail::class);
    }
}
