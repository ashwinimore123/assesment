<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Home extends Model
{
protected $table = "homes";
public $primaryKey = "upload_id";
protected $fillable = ["image"];
}
