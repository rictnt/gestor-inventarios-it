<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrepararSistema extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $path = base_path('utils'.DIRECTORY_SEPARATOR.'inventario.sql');
        DB::unprepared( file_get_contents($path) );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('codigos_postales');
    }
}