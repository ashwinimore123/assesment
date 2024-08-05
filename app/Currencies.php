<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Currencies extends Model
{
public $primaryKey="currency_id";
protected $table = 'currencies';
protected $fillable = [
'currency_id',
'currency_name', 
'is_active',
'currency_symbol',
'created_at',
'updated_at',
];
}
