<?php
/**
 * Created by PhpStorm.
 * User: Spicy
 * Date: 9/14/2015
 * Time: 3:12 PM
 */


class person
{


    var $name;

    function set_name($new_name){

        $this->name=$new_name;
    }

    function get_name(){

        return $this->name;
    }
}