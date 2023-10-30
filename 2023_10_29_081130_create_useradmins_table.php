<?php
/*
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration  // This is to migrate user registration details-->
{
    
    public function up(): void
    {
        Schema::create('useradmins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('useradmins');
    }
};
*/