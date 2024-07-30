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
        'term_category_id',
    ];

    public function termCategories()
    {
        return $this->belongsTo(TermCategory::class, 'term_category_id', 'term_category_id');
    }
}
