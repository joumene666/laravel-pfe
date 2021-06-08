<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structers', function (Blueprint $table) {
            $table->id();

            $table->string('code_structer');
            $table->date('date_creation');
            $table->string('type');
            $table->string('matricule-fiscale');
            $table->string('jort-creation');
            $table->string('num-compte-bancaire');
            $table->integer('code-membre-bureau');
            $table->string('nom-membre-bureau'); 
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
        Schema::dropIfExists('structers');
    }
}
