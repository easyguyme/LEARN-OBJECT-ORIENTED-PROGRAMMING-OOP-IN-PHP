<?php
/**
 * Created by PhpStorm.
 * User: Imran
 * Date: 9/14/2015
 * Time: 3:12 PM
 */

//When we create a variable inside a class, it is called a 'property'.
//The data/variables inside a class (ex: var name;) are called 'properties'.

class person
{


    var $name;
// Notice that the getter and setter names, match the associated property name.
    function set_name($new_name){
//The $this is a built-in variable (built into all objects) which points to the current object.
        $this->name=$new_name;
    }

    function get_name(){

        return $this->name;
    }
}
