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
        Schema::create('visit_entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('residents_id');
            $table->unsignedBigInteger('concierges_id');
            $table->date('visit_date');
            $table->time('duration');
            $table->time('entry_time');
            $table->time('exit_time');
            $table->string('visit_reason');
            $table->string('observation');
            $table->string('registered_by');
            $table->foreign('residents_id')->references('id')->on('residents')->onDelete('cascade');
            $table->foreign('concierges_id')->references('id')->on('concierges')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visit_entries');
    }
};
