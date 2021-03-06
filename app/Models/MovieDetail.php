<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class MovieDetail extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'movie_id',
        'description',
        'director',
        'duration_min',
        'date_begin',
        'date_end',
        'rated',
        'trailer_path',
        'price',
        'rating'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'movie_id' => 'string',
        'description' => 'string',
        'director' => 'string',
        'duration_min' => 'integer',
        'date_begin' => 'datetime',
        'date_end' => 'datetime',
        'rated' => 'integer',
        'trailer_path' => 'string',
        'price' => 'integer',
        'rating' => 'integer'
    ];

    public function casters()
    {
        return $this->belongsToMany(Caster::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    /**
     * Get the movie's image.
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
