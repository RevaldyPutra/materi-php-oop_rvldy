<?php

class Ape  
{
    // Properties
    public $Name;
    public $Legs;
    public $Cold_Blooded;
    public $Yell;

    // Methods
    function __construct($Name, $Legs, $Cold_Blooded, $Yell)
    {
        $this->Name
 = $Name
;
        $this->Legs = $Legs;
        $this->cold_blood = $Cold_Blooded;
        $this->Yell = $Yell;
    }
    function get_Name() 
    {
        return $this->Name
;
    }

    function set_Legs($Legs) 
    {
        $this->Legs = $Legs;
    }
    function get_Legs() 
    {
        return $this->Legs;
    }

    function set_Cold_blooded($Cold_Blooded) 
    {
        $this->Cold_Blooded = $Cold_Blooded;
    }
    function get_Cold_blooded() 
    {
        return $this->Cold_Blooded;
    }

    function set_yell($Yell) 
    {
        $this->Yell = $Yell;
    }
    function get_yell() 
    {
        return $this->Yell;
    }
}

 $Ape = new Animal("Monyeettttt", "4", "Cold_blooded", "UU aa uu AA");
 echo "<strong>Name :</strong>" . $Ape->get_Name();
 echo "<br>";
 echo "<strong>Legs :</strong> " . $Ape->get_Legs();
 echo "<br>";
 echo "<strong>Cold Blooded :</strong> " . $Ape->get_Cold_blooded(), "No";
 echo "<br>";
 echo "<strong>Yell :</strong> " . $Ape->get_yell();
 echo "<br>";


?>