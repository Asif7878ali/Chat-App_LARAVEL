<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('message_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('message_id')->constrained('messages');
            $table->string('name', 255); //test.png
            $table->string('path', 1024);
            $table->string('mine', 255); //images/png
            $table->string('size');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('message_attachments');
    }
};
