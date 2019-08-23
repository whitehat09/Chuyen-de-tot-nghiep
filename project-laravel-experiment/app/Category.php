<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Category extends Model
{

	protected $table = 'onlinelearning_category';

    protected $fillable = [
        'description', 'title','img',
    ];
    public function posts()
    {
    	 return $this->hasMany('App\Post', 'foreign_key', 'local_key');
    	  return $this->belongsTo('App\posts');

    }
}