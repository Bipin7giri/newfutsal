<?php

use App\Models\SportCenter;
use App\Models\Sports;
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
        Schema::create('extra_features', function (Blueprint $table) {
            $table->id();
            $table->string('features')->nullable();
            $table->foreignIdFor(SportCenter::class)->constrained('sport_center');
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
        Schema::dropIfExists('extra_features');
    }
};
