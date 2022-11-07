<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    // protected $guarded = [];
    protected $fillable = ['title','content','date','type','image'];

    use HasFactory;

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function getExcerptAttribute($value)
    {
        return Str::limit($this->content, 270, ' ');
    }
}