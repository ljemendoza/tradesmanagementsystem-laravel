<?php

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
        Schema::create('BillofLading', function (Blueprint $table) {
            $table->id('BillofLadingID');
            $table->string('ShipperName', 100);
            $table->string('BLnumber', 50);
            $table->date('ETA');
            $table->date('OnBoardDate');
            $table->string('RegistryNumber', 50);
            $table->string('PortofLoading', 100);
            $table->string('ContainerSize', 20);
            $table->string('ContainerNumber', 50);
            $table->string('ProductName', 100);
            $table->string('VesselName', 100);
            $table->string('VoyageNumber', 50);
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
            // $table->foreignId('UserID')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billof_ladings');
    }
};
