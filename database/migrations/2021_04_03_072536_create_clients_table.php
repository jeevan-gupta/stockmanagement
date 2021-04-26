<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table ->id();
            $table ->string('name');
            $table ->string('clientCode');
            $table ->string('currentAddress');
            $table ->string('permanentAddress');
            $table ->string('contact');
            $table ->string('joiningDate');
            $table ->string('expiryDate');
            $table ->string('CitizenshipNo');
            $table ->string('citizenIssueDate');
            $table ->string('citizenIssuePlace');
            $table ->string('bankName');
            $table ->string('accountNo');
            $table ->string('dematNo');
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
        Schema::dropIfExists('clients');
    }
}
