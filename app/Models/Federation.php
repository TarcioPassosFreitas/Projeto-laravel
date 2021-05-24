<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Federation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'state', 'email', 'password'];

    public function companies(){
        return $this->hasMany(Company::class);
    }

    public function search($search = null){
        $result = $this->where(function($query) use($search){
            if($search){
                $query->where('ej', 'LIKE', "%{$search}%");
            }
        })->toSql();
    }
}
