<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RecitImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'recit_id'
    ];

    public function aventure()
    {
        return $this->belongsTo(Recit::class, 'id');
    }
}
