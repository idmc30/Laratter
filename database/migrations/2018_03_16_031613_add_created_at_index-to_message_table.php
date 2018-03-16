<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreatedAtIndexToMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            //modificacion de la table messages 
            // si quiero colocar mi propio nombre de index va como segundo parametro
            //$table->index('created_at','my_created_at_idx');


            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            //el index se contruye el nombre de la tabla + el nombre de las columnas+la palabra  index
          $table->dropIndex('messages_created_at_index');
        });
    }
}
