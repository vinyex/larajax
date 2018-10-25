<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('nik', 15);
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('jenis_kelamin', 15);
            $table->integer('city_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('city');
            $table->foreign('state_id')->references('id')->on('state');
            $table->foreign('country_id')->references('id')->on('country');
            $table->string('pendidikan', 60);
            $table->string('agama', 10);
            $table->string('status', 20);
            $table->string('alamat_domisili', 60);
            $table->string('alamat_ktp', 60);
            $table->string('nohp_pribadi', 15);
            $table->string('nohp_keluarga', 15);
            $table->string('no_kk', 25);
            $table->string('no_ktp', 25);
            $table->integer('umur')->unsigned();
            $table->date('birthdate');
            $table->date('hired_date');
            $table->integer('division_id')->unsigned();
            $table->foreign('division_id')->references('id')->on('division');
            $table->string('picture', 60);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
