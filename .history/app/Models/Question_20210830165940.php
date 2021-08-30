<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','body'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setTitleAttributes($value){
        $this->attributes['titles'] = $value;
        $this->attributes['slug'] =  Str::slug($value);
    }
}
