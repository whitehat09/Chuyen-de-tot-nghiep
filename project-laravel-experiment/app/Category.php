<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Category extends Model
{

	protected $table = 'onlinelearning_category';

    protected $fillable = [
        'description', 'title','img',
    ];
}