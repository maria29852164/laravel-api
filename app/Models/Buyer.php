<?php

namespace App\Models;

use App\Scopes\BuyerScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends User
{
    use HasFactory;
    protected $table='users';
    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::addGlobalScope(new BuyerScope);
    }
    public function expences(){
        return $this->hasMany(Expence::class,'user_id',$this->primaryKey);
    }







}
