<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Post extends Model
{

	protected $table = 'onlinelearning_posts';

    protected $fillable = [
        'title','img','description','display_homepage','display_homepage','featured','status','content'
    ];

}
      