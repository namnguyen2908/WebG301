<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    protected $table = 'musics';
    protected $fillable = ['name', 'kindofmusic', 'singer'];
    
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
