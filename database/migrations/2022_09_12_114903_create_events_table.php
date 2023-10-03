<?php

use App\Models\Events;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table ->foreignId("agency_id")->references("agency_id")->on("agencies");
            $table->date('date');
            $table->integer('limit');
            $table->timestamps();
        });

        Events::create([
           
            'date' => '2002.04.01', 
            'limit' => 10, 
            'agency_id' => 1,
        ]);
        
        Events::create([
           
            'date' => '2002.05.01', 
            'limit' => 20, 
            'agency_id' => 2,
        ]); 
        Events::create([
           
            'date' => '2002.03.01', 
            'limit' => 30, 
            'agency_id' => 1,
        ]);
    }
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
