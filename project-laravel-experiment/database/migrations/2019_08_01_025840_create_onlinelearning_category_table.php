<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlinelearningCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlinelearning_category', function (Blueprint $table) {
            $table->bigIncrements('id'); // khóa chính tự động tăng 
            $table->text('title'); // chuổi varchar 255 ký tự 
            $table->string('img')->nullable(); // ảnh 
            $table->text('description'); // kiểu text 
            


            $table->timestamps();  // dấu thời gian
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onlinelearning_category');
    }
}
