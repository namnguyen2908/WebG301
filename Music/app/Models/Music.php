<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    protected $table = 'musics';
    protected $fillable = ['name', 'kindofmusic', 'singer', 'national_id', 'category_id', 'description'];
    
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function national()
    {
        return $this->belongsTo(National::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
