<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagWorkTable extends Migration
{
    public function up()
    {
        Schema::create('tag_work', function (Blueprint $table) {
            $table->foreignId('work_id')->constrained()->onDelete('cascade');
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');
            $table->primary(['work_id', 'tag_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tag_work');
    }
}