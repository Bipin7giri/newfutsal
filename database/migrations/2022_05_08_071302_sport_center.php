<?php

use App\Models\Area;
use App\Models\ArenaCategory;

use App\Models\Team;

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
        Schema::create('sport_center', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Team::class)->nullable()->constrained('teams');
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->string('short_description');
            $table->foreignIdFor(Area::class)->constrained('area');
            $table->string('location');
            $table->foreignIdFor(ArenaCategory::class)->constrained('arena_category');
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
        Schema::dropIfExists('sport_center');
    }
};
