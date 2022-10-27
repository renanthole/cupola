<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;

    protected $fillable = [
        "states_id",
        "name",
        "active"
    ];

    public function state() {
        return $this->belongsTo(States::class);
    }
}
