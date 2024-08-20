<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBanksTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_banks', function (Blueprint $table) {
            $table->id('BankId'); 
            $table->string('Bankname');
            $table->string('Bankemail')->unique();
            $table->string('Bankcontact');
            $table->integer('No_of_Employee');
            $table->string('NTN');
            $table->text('BankAddress');
            $table->string('Password');
            $table->string('Branches');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_banks');
    }
}
