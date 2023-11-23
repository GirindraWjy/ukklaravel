<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->year('year');
            $table->unsignedTinyInteger('month');
            $table->unsignedTinyInteger('day');
            $table->unsignedTinyInteger('quarter');
            $table->unsignedSmallInteger('week');
            $table->string('day_name');
            $table->string('month_name');
            $table->string('event')->nullable();
        });

        $startDate = now()->subYear();
        $endDate = now()->addYear();
        $dates = [];

        while ($startDate->lte($endDate)) {
            $dates[] = [
                'date' => $startDate->format('Y-m-d'),
                'year' => $startDate->year,
                'month' => $startDate->month,
                'day' => $startDate->day,
                'quarter' => ceil($startDate->month / 3),
                'week' => $startDate->weekOfYear,
                'day_name'  => $startDate->dayName,
                'month_name' => $startDate->monthName,
            ];
            $startDate->addDay();
        }

        DB::table('dates')->insert($dates);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dates');
    }
};
