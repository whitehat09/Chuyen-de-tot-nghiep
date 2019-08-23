<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Post extends Model
{

	protected $table = 'onlinelearning_posts'; // sử dụng bảng cơ sở dữu liệu có tên ...

    protected $fillable = [
        'title','img','description','display_homepage','display_homepage','featured','status','content','id_gv'
    ];  // sử dụng bảng cơ sở dữu liệu có tên ... với bằng này cột 

    public function category()
    {
    	 return $this->belongsTo('App\Category','id_gv'); // id_gv là tên của category cha
    	  return $this->hasMany('App\Post', 'foreign_key', 'local_key');
    }

}
      