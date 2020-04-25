<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('super_columns', function (Blueprint $table) {
		    //See https::/laravel.com/docs/7.x/migrations#creating-columns
            $table->id();//Alias of $table->bigIncrements('id');
	    $table->bigInteger('votes');
	    $table->boolean('confirmed');
	    $table->char('name',100); //CHAR equivalent column with length
	    $table->date('created_at_date_date');//DATE equivalent
		    $table->decimal('item_amount',8,2);	//DECIMAL equivalent column with precision (total digits) and scale (decimal digits)
	    $table->double('amount',8,2); //DOUBLE equivalent
	    $table->enum('level',['easy','hard']); //ENUM equivalent column
	    $table->float('amount_float',8,2); //FLAOT equivalent column with a precision and scale
	    $table->geometry('positions_geo'); //GEOMETRY equivalent column
//	    $table->increments('id_incremental');//Auto incrementing UNSIGNED INTEGER ; had to be commented because of multiple primary keys ; @see id();
	    $table->integer('small_votes');//INTEGER equivalent column
	    $table->ipAddress('visitor'); //IP address equivalent column
	    $table->json('options'); //JSON equivalent colunn
	    $table->jsonb('options_b'); //JSONB equivalent column
	    $table->lineString('positions'); //LINESTRING equivalent column
	    $table->longText('description'); //LONGTEXT equivalent
	    $table->macAddress('device'); //MAC address equivalent column
//	    $table->nullableTimestamps(0); //ALias of timestamps() method
	    $table->rememberToken(); //Adds a nullable remember_token VARCHAR(100) EQUIVALENT COLUMN
	    $table->set('flavors',['strawberry','vanilla']); //SET equivalent column 
	    $table->string('name_str',100); //VARCHAR equivalent column with a length
		    $table->text('description_again'); //TEXT equivalent colmn
	    $table->uuid('id_uuid');//UUID equivalent column
    $table->year('birth_year'); //YEAR equivalent	    
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
        Schema::dropIfExists('super_columns');
    }
}
