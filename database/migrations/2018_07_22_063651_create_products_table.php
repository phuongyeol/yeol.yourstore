<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');                               // ID sản phẩm
            $table->integer('category_id')->usigned();             // ID loại sản phẩn
            $table->integer('vendor_id')->unsigned();               // ID nhà cung cấp 
            $table->string('name')->nullable();                     // tên sản phẩm
            $table->string('slug')->nullable();                     // đường dẫn tên sản phẩm
            $table->string('description')->nullable();              // mô tả ngắn gọn
            $table->text('content')->nullable();                    // nội dung chi tiết
            $table->boolean('status')->default(false)->nullable();  // trạng thái sản phẩm
            $table->string('sale_price')->nullable();               // giá khuyến mãi
            $table->string('origin_price')->nullable();             // giá gốc
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
        Schema::dropIfExists('products');
    }
}
