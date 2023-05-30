<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    public $guarded = ["id"];
    
    public function ReadingTime() {
        return $this->belongsTo(ReadingTime::class);
    }
}
