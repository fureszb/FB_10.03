<?php
use App\Models\agency;
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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name');
            $table->string('country');
            $table->string('type');
            $table->timestamps();
        });

        agency::create([
           
            'name' => 'András', 
            'country' => 'Szlovákia',
            'type' => 'Valami', 
        ]);
        agency::create([
           
            'name' => 'Miksa', 
            'country' => 'Magyar',
            'type' => 'Valami2', 
        ]);agency::create([
           
            'name' => 'Kristóf', 
            'country' => 'Belga',
            'type' => 'Valami3', 
        ]);
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};