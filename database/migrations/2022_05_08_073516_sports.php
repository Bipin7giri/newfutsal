<?php

use App\Models\ArenaCategory;
use App\Models\SportCategory;
use App\Models\SportCenter;
use App\Models\User;
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
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->string('short_description');
            $table->string('tags');
            $table->foreignIdFor(User::class)->constrained('users');
            $table->foreignIdFor(ArenaCategory::class)->constrained('arena_category');
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
        Schema::dropIfExists('sports');
    }
};
