<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content', 'image', 'user_id'
    ];

    // protected $guard = [

    // ];

    public function writer() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getImagePathAttribute() {
        return 'storage/images/'.$this->image;
    }
}
