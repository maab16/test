<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_dealers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('dealer_id')
                ->constrained()
                ->onDelete('cascade');
            $table->date('effective_date');
            $table->date('expiration_date');
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
        // $table->dropForeign(['agent_id', 'dealer_id']);
        Schema::dropIfExists('agent_dealers');
    }
}
