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

    public function scopeKecamatan($query, $kecamatan){
        if($kecamatan){
            $query->where('kecamatan', $kecamatan);
        }
    }

    public function scopeCreatedAt($query, $created_at){
        if($created_at){
            $query->whereDate('created_at', $created_at);
        }
    }

    public function scopePriceRange($query, $range_start, $range_end){
        if($range_start && $range_end == null){
            $query->where('price','>=', $range_start);
        }
        if($range_start == null && $range_end){
            $query->where('price','<=', $range_end);
        }
        if($range_start && $range_end){
            $query->whereBetween('price',[$range_start, $range_end]);
        }
    }
}
