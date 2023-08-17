<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    protected $table = 'musics';
    protected $fillable = ['name', 'kindofmusic', 'singer', 'national_id'];
    
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function national()
    {
        return $this->belongsTo(National::class);
    }
}
