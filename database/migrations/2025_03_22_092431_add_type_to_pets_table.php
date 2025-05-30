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
    Schema::table('pets', function (Blueprint $table) {
        $table->string('type')->after('id'); // Add the 'type' column
    });
}

public function down()
{
    Schema::table('pets', function (Blueprint $table) {
        $table->dropColumn('type'); // Remove the 'type' column if rolled back
    });
}


   
};
