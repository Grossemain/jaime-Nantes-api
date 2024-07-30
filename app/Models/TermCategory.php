<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermCategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'term_category_name',
        'term_category_description',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, 'term_category_id', 'term_category_id');
    }

}
