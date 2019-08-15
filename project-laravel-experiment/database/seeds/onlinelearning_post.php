<?php

use Illuminate\Database\Seeder;

class onlinelearning_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('onlinelearning_posts')->insert([
            'id'=>'2', // khóa chính tự động tăng ,
            'id_gv'=>'1'
            'title'=>'Post', // chuổi varchar 255 ký tự,
            'img'=>'', 
            'description'=>'...', // kiểu text 
            'display_homepage'=>'1',
            'featured'=>'1',
            'status'=>'1',
            'content'=>'content',
            
        ]);
    }
}
