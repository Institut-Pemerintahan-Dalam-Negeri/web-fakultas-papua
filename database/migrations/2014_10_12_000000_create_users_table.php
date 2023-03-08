<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('USER', function (Blueprint $table) {
            $table->string('USER_ID', 36)->primary()->comment('Primarykey UUID Value');
            $table->string('USER_NAME', 150);
            $table->string('USER_EMAIL', 150)->unique();
            $table->string('USER_PASSWORD');
            $table->rememberToken();

            // Timestamps
            $table->timestamp('USER_CREATED_AT');
            $table->timestamp('USER_UPDATED_AT')->nullable();

            // Soft Delete
            $table->softDeletes('USER_DELETED_AT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('USER');
    }
};
