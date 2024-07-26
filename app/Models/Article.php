<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'title',
        'h1_title',
        'content',
        'image',
        'slug',
    ];

    public function termCategories()
    {
        return $this->belongsToMany(TermCategory::class, 'articles_term_categories', 'article_id', 'term_category_id');
    }
}
