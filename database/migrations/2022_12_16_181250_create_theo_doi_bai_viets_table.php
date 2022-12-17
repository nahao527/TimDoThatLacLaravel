<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheoDoiBaiVietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theo_doi_bai_viet', function (Blueprint $table) {
            $table->id();
            $table->integer('bai_viet_id');
            $table->integer('nguoi_dung_id');
            $table->string('tieu_de');
            $table->string('noi_dung');
            $table->softDeletes();
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
        Schema::dropIfExists('theo_doi_bai_viets');
    }
}
