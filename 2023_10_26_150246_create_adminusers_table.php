<?php
/*
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration // This is to migrate user registration details-->
{
    
    public function up(): void
    {
        Schema::create('adminusers', function (Blueprint $table) {  //It stores the id,name,email,timestamps-->
            $table->id();//1
            $table->string('name');//jeeva
            $table->string('email');//jeevaa.21bsr@kongu.edu
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adminusers');
    }
};
*/