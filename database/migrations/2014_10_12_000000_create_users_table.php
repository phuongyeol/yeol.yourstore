<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');                   // ID người dùng
            $table->string('name');                     // Tên 
            $table->string('email', 109)->unique();     // Imail
            $table->string('username');                 // Tên đăng nhập
            $table->string('password');                 // Mật khẩu đăng nhập
            $table->string('avatar');                   // Ảnh đại diện
            $table->string('mobile')->nullable();       // ĐTDĐ
            $table->string('address')->nullable();      // Địa chỉ
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
