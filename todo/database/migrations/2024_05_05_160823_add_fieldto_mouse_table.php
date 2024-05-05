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
        Schema::table('mouse', function (Blueprint $table) {
            // $table->boolean('is_delete')->default(false);

            $table->string('tittle')->required()->after('name');
            $table->date('dob')->required()->after('tittle');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('mouse', function (Blueprint $table) {
            // $table->boolean('is_delete')->default(false);

            $table->dropColumn('tittle');
            $table->dropColumn('dob');
        });
    }
};
