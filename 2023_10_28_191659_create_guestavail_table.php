<?php
/*
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration  //This is to migrate the checking availability of rooms
{
    
    public function up(): void
    {
        Schema::create('guestavails', function (Blueprint $table) {
            $table->id();//1
            $table->date('check_in');//28-10-2023
            $table->date('check_out');//29-10-2023
            $table->integer('adults');//1
            $table->integer('children');//2
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guestavails');
    }
};
*/