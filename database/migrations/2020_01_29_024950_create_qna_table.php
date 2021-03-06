<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQnaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qna', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('jenis', array('Pasang Baru', 'Pesta', 'Perubahan Daya', 'Balik Nama', 'Geser', 'IML', 'SLO'));
            $table->text('pertanyaan',500);
            $table->longText('jawaban',5000);
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
        Schema::dropIfExists('qna');
    }
}
