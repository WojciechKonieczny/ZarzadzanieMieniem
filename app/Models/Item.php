<?php

namespace App\Models;

use App\Models\Mod;
use App\Models\User;
use App\Models\Category;
use App\Models\Location;
use App\Models\ModelOrName;
use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'manufacturer_id',
        'model_or_name_id',
        'category_id'
    ];

    // kazdy przedmiot moze miec jednego producenta
    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }

    // kazdy przedmiot moze miec jeden model
    public function modelorname() {
        return $this->belongsTo(ModelOrName::class);
    }

    // kazdy przedmiot moze nalezec do jednej kategorii
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // kazdy przedmiot moze miec wielu wlascicieli
    public function users() {
        return $this->belongsToMany(User::class)->withPivot('serial_number', 'purcharse_date', 'warranty_end', 'assignment_date');
    }

}
