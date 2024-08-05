<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $primaryKey="section_id";
    protected $table = 'sections';
    protected $fillable = ['table_name'];
}
