<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Timezone extends Model
{
protected $table = "timezones";
public $primaryKey = "timezone_id";
protected $fillable = ['timezone','timezonedetails','is_active'];
}

