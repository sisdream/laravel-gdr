<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
    ];



    public function characters(){
        return $this->hasMany(Character::class);
    }

    public function get_description($n_charts){
        return ($n_charts < strlen($this->description)) ? substr($this->description, 0, $n_charts) . '...' : substr($this->description, 0, $n_charts);
    }
}
