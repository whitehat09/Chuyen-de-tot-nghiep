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
        DB::table('onlinelearning_category')->insert([
        	'id'=>'2', // khóa chính tự động tăng 
            'name'=>'Hoàng Ngọc Thắng', // chuổi varchar 255 ký tự 
            'description'=>'đẹp trai vô đối', // kiểu text 
            'year-old'=>'21'// kiểu số 
        ]);
    }
}
