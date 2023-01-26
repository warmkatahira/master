<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bases', function (Blueprint $table) {
            $table->string('base_id')->primary();
            $table->string('base_name', 30);
            $table->string('base_zip_code_1', 3);
            $table->string('base_zip_code_2', 4);
            $table->string('base_address_1');
            $table->string('base_address_2')->nullable();
            $table->string('base_tel', 12);
            $table->string('base_fax', 12)->nullable();
            $table->unsignedInteger('base_sort_num');
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
        Schema::dropIfExists('bases');
    }
};
