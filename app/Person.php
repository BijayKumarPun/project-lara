<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
protected $table='persons';
	public function login(){

	return "Hello world";

}

public function listAllPersons(){
	$persons = Person::all(); //gets all person
}
public function getByPrimaryKey(){


$person = Person::find(1); //1 is the key
return $person->name;

}


pubilc function getByPrimaryKeyOrFail(){

	$person = Person::findOrFail(1); //finds or fails with id 1
	$model = Person::where('votes','>',100)->firstOrFail();
}


public function queryUsingEloquentModel(){

	$persons=Person::where('votes','>',100)->take(10)->get();

	foreach($persons as $person){

	var_dump($person->name);
	}
}


public function saveNewPerson(){

$person = new Person;
$person->name='john';
$person->save();
}
public function updatePerson(){

	var $toUpdate=1;
	$person=Person::find($toUpdate);
	$person->email='John@snow.com';
	$person->save();
}



public function deletePerson(){
	$person=Person::find(1);
	$person->delete();
}

public function deletePersonByKey(){

	Person::destroy(1);
	Person::destroy([1,2,3]);
	Person::desotry(1,2,3);
}

public function updatePersonTimeStampOnly(){

	$user=Person::find(1);
	$user->touch();
}


use SoftDeletes;





pkjllllLjk}
