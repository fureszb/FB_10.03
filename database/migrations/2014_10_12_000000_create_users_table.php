<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('vip');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => "Bence", 
            'email' => 'fureszb@gmail.com', 
            'password' => '1122',
            'vip' => false
        ]);
        User::create([
            'name' => "Sanyi", 
            'email' => 'asd@gmail.com', 
            'password' => '1122',
            'vip' => true
        ]);
        User::create([
            'name' => "Peti", 
            'email' => 'dfgh@gmail.com', 
            'password' => '1122',
            'vip' => false
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
