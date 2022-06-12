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
        Schema::create("images", function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sports::class)->nullable()->constrained('sports');
            $table->foreignIdFor(SportCenter::class)->nullable()->constrained('sport_center');
            $table->string("src");
            $table->string("driveid")->nullable();
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
        Schema::dropIfExists('images');
    }
};
