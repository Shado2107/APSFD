<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nom')->nullable();
            $table->String('creation')->nullable();
            $table->String('adhesion')->nullable();
            $table->String('gerant')->nullable();
            $table->String('tel')->nullable();
            $table->String('tel2')->nullable();
            $table->String('tel3')->nullable();
            $table->String('fax')->nullable();
            $table->String('siteweb')->nullable();
             $table->String('mail')->nullable();
            $table->String('bp')->nullable();
            $table->String('clientele')->nullable();
            $table->String('forme')->nullable();
            $table->String('agrement')->nullable();
            $table->String('nbreagence')->nullable();
            $table->String('totalclient')->nullable();
            $table->String('credit')->nullable();
            $table->String('epargne')->nullable();
            $table->String('par')->nullable();
            $table->String('situationgeo')->nullable();
            $table->String('gprs')->nullable();
            $table->boolean('etat')->default('0');
            
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
        Schema::dropIfExists('membres');
    }
}
