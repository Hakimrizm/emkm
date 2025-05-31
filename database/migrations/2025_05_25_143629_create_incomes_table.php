<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->unsignedBigInteger('income_category_id');
            $table->text('description')->nullable();
            $table->decimal('amount', 15, 2);
            $table->date('date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('income_category_id')->references('id')->on('income_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('incomes');
    }
};
