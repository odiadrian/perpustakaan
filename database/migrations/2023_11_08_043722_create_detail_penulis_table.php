<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penulis', function (Blueprint $table) {
            $table->id();
            $table->string('domsili');
            $table->string('agama');
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twtter');
            $table->string('linked_in');
            $table->string('blog');
            $table->string('youtube');
            $table->foreignId('id_penulis')->notNull()->references('id')->on('penulis')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('detail_penulis');
    }
};
