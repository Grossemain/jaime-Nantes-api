<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'description',
        'image',
        'adresse',
        'hours',
        'price',
        'slug',
        'web_site',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function termCategories()
    {
        return $this->belongsToMany(TermCategory::class, 'places_term_categories', 'place_id', 'term_category_id');
    }
}
