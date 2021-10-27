<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineDosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_doses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("registered_user_id");
            $table->string("vaccine");
            $table->string("dose");
            $table->date("published_date");
            $table->date("vaccinated_date")->nullable();
            $table->foreign("registered_user_id")->references("id")->on('registered_users');
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
        Schema::dropIfExists('vaccine_doses');
    }
}
