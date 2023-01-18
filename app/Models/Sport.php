<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];
    public function positions()
    {
        return $this->hasMany(Position::class);
    }
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
