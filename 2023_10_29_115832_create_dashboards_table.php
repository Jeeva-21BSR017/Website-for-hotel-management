<?php
/*
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration // This is to migrate the HouseOwner Requirements-->
{
    public function up(): void
    {
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();//1
            $table->string('name');//jeeva
            $table->text('description');//Feel comfort and trust worthy.
            $table->integer('minbook');//1
            $table->integer('maxbook');//2
            $table->string('rentamt');//1900
            $table->string('photo')->nullable();//upload photo
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dashboards');
    }
};*/