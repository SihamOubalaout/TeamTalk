<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Cmgmyr\Messenger\Models\Models;

class CreatePiecejointesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piecejointes', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->unsignedInteger('id_message');
            $table->timestamps();

            $table->foreign('id_message')->references('id')->on(Models::table('messages'))->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piecejointes');
    }
}
