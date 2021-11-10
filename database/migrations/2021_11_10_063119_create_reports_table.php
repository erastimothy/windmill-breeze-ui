<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('type')->default('Bimbel'); //bimbel / hari ceria / special event
            $table->text('note');
            $table->text('images');
            $table->integer('kb_amount')->default(0); //kelas besar
            $table->integer('kk_amount')->default(0); //kelas kecil
            $table->integer('total')->default(0);
            $table->foreignId('house_id');
            $table->foreignId('status_id');
            $table->foreignId('stock_flow_id'); 
            $table->foreignId('createdBy')->nullable(); 
            $table->foreignId('updatedBy')->nullable(); 
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
        Schema::dropIfExists('reports');
    }
}
