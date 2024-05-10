<?php 

// definition class is a Blueprint / Templete for make instance from object
// Class defined Object
// Using Class allow to save data and behavior called property and method
// data : property
// behavior : method 

// this example class
class Coba {
// this allow to you make property and method
// properti
    public $property;
// method
    public function method(){
    }
    
}

// create object instance form class
$a = new Coba();
$b = new Coba();
$c = new Coba();


var_dump($a);
var_dump($b);
var_dump($c);

/* 
NOTE:
PROPERTY
Property is actualy same as variable but there are diferents
- is a variable in object
- there is a visibility (publid, private, protected)
METHOD
method is actualy same as function but there are diferents
- is a gunction in Object
- there is a visibility (public, private, protected) with default value visibillity public

*/
