<?php

use App\Models\Import\Kecamatan;
use App\Models\Kecamatan as ModelsKecamatan;
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
        Schema::create(Kecamatan::tableName, function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->text('file')->nullable()->default(null);
            $table->integer('count', false, false)->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Kecamatan::tableName);
    }
};
