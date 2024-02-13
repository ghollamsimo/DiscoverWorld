<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recit extends Model
{
    use HasFactory;
    protected $with = ["images"]; 

    protected $fillable = [
        'title',
        'user_id',
        'destination',
        'description',
        'conseils'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(RecitImages::class, 'recit_id');
    }
}
