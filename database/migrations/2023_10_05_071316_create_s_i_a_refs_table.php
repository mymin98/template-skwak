<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('s_i_a_refs', function (Blueprint $table) {
            $table->id('siaRef_ID');
            $table->string('siaRef_kod')->unique();
            $table->string('siaRef_desc');
            $table->dateTime('created_at');
            $table->string('created_by');
            $table->timestamp('updated_at');
            $table->string('updated_by');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_i_a_refs');
    }
};
