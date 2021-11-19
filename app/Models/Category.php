<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    // czyli wartosci, ktore beda wypelniane przez uzytkownika
    protected $fillable = [
        'name'
    ];

    // kazda kategoria moze miec wiele przedmiotów
    public function items() {
        return $this->hasMany(Item::class);
    }
}
