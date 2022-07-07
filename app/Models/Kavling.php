<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kavling extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title', 'description', 'price', 'denah'
    ];

    public function kavlingImage(){
        return $this->HasMany(KavlingImage::class,'kavling_id');
    }
}
