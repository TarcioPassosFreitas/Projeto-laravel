<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['federation_id', 'name', 'email', 'password'];

    public function federation(){
        return $this->belongsTo(Federation::class);
    }

    public function search($search = null){
        $results =  $this->where(function ($query) use($search){
            if($search){
                $query->where('name', 'LIKE', "%{$search}%");
            }

        })->toSql();

        dd($results);

    }
}
