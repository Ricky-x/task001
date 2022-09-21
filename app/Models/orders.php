<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    
    public $timestamps  = false;
    protected $fillable = ['Order_id','Customers_id','Items_id',];
    protected $primaryKey='Order_id';
}
