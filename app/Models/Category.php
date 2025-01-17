<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'category_name',
        'category_description',
        'category_slug',
        'term_category_id',
    ];

    public function termCategory()
    {
        return $this->belongsTo(TermCategory::class, 'id');
    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id');
    }

    public function places()
    {
        return $this->hasMany(Place::class, 'category_id');
    }
}
