<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlinelearningPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlinelearning_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_gv'); // tác giả bài viết
            $table->text('title'); // tiêu đề
            $table->string('img')->nullable(); // ảnh 
            $table->text('description')->nullable(); // mô tả 
            $table->boolean('display_homepage')->default(0); // hiển thị lên trang web
            $table->boolean('featured')->default(0); // đặc sắc ( nổi bật )
            $table->boolean('status')->default(0); // trạng thái
            $table->text('content')->nullable(); // kiểu text  nội dung 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onlinelearning_posts');
    }
}
