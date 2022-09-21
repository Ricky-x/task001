<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    
    public $timestamps  = false;
    protected $fillable = ['ID','Items_ID','Items_Name','Items_Type','Items_Quantity','Items_Prices'];
    protected $primaryKey='ID';
}
