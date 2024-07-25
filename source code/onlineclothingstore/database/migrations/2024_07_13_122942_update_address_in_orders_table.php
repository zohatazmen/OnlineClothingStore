<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->text('address')->nullable()->change(); // Make address nullable
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->text('address')->nullable(false)->change(); // Revert if needed
        });
    }
};
