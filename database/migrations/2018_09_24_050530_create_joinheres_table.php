<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinheresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joinheres', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('district_id');
            $table->integer('group_id');
            $table->string('donor_name');
            $table->string('father_name');
            $table->string('donor_mobile');
            $table->string('donor_email');
            $table->string('donor_permanent_address');
            $table->string('donor_current_address');
            $table->string('gender');
            $table->string('avaliable_status');
            $table->string('image');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('joinheres');
    }
}
