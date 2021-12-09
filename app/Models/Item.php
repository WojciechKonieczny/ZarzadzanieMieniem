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
        return $this->belongsTo(ModelOrName::class, 'model_or_name_id'); // nie zastosowalem sie do konwencji nazewnictwa w tym przypadku, wiec musze podac klucz obcy 
    }

    // kazdy przedmiot moze nalezec do jednej kategorii
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // kazdy przedmiot moze miec wielu wlascicieli
    public function users() {
        return $this->belongsToMany(User::class)->withPivot('id', 'serial_number', 'purcharse_date', 'warranty_end', 'assignment_date');
    }

    public function hasManufacturer($manufacturer) : bool {

        // jesli jest stringiem, to ktos szuka po nazwie
        if( is_string($manufacturer) ) {
            return $this->manufacturer->contains('name', $manufacturer);
        }

        // jesli jest int, to ktos szuka po id producenta
        if( is_int($manufacturer) ) {
            return $this->manufacturer->contains('id', $manufacturer);
        }

        // jesli atrybut jest instancja modelu, czyli ktos wrzucil caly model
        if( $manufacturer instanceof Manufacturer ) {
            return $this->manufacturer->contains('id', $manufacturer->id);
        }

        // jesli ktos wrzuci jeszcze inny typ danych
        return false;
    }

    public function hasModelOrName($modelOrName) : bool {

        // jesli jest stringiem, to ktos szuka po nazwie
        if( is_string($modelOrName) ) {
            return $this->modelorname->contains('name', $modelOrName);
        }

        // jesli jest int, to ktos szuka po id modelu
        if( is_int($modelOrName) ) {
            return $this->modelorname->contains('id', $modelOrName);
        }

        // jesli atrybut jest instancja modelu, czyli ktos wrzucil caly model
        if( $modelOrName instanceof ModelOrName ) {
            return $this->modelorname->contains('id', $modelOrName->id);
        }

        // jesli ktos wrzuci jeszcze inny typ danych
        return false;
    }

    public function hasUser($user) : bool {

        // jesli jest stringiem, to ktos szuka po nazwie
        if( is_string($user) ) {
            return $this->user->contains('name', $user);
        }

        // jesli jest int, to ktos szuka po id kateogrii
        if( is_int($user) ) {
            return $this->user->contains('id', $user);
        }

        // jesli atrybut jest instancja modelu, czyli ktos wrzucil caly model
        if( $user instanceof User ) {
            return $this->user->contains('id', $user->id);
        }

        // jesli ktos wrzuci jeszcze inny typ danych
        return false;

    }

    public function hasCategory($category) : bool {

        // jesli jest stringiem, to ktos szuka po nazwie
        if( is_string($category) ) {
            return $this->category->contains('name', $category);
        }

        // jesli jest int, to ktos szuka po id kateogrii
        if( is_int($category) ) {
            return $this->category->contains('id', $category);
        }

        // jesli atrybut jest instancja modelu, czyli ktos wrzucil caly model
        if( $category instanceof Category ) {
            return $this->category->contains('id', $category->id);
        }

        // jesli ktos wrzuci jeszcze inny typ danych
        return false;
    }
}
