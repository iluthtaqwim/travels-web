<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kavling extends Model
{
    use HasFactory;

    protected $fillable =
        [
        'title', 'description', 'price', 'denah', 'kecamatan', 'location', 'spesification',
    ];

    public function kavlingImage()
    {
        return $this->HasMany(KavlingImage::class, 'kavling_id');
    }

    public function scopeSearch($query, $keywords)
    {
        return $query->where('title', 'like', '%' . $keywords . '%')
            ->orWhere('description', 'like', '%' . $keywords . '%')
            ->orWhere('price', 'like', '%' . $keywords . '%');
    }
}
