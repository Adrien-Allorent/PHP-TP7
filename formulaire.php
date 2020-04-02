<?php

class Formulaire{
    function __construct($nom, $methode){
        echo "<form action='".$nom."' method='".$methode."'>";
    }
    public function addTextZone($text = ""){
        echo "$text"."<input name='".$text."' type='text'/><br>";
    }
    public function addButton($text = ""){
        echo"<input type='submit' value='".$text."'/>";
    }
    public function getForm(){
        echo "</form>";
    }
}

class Form2 extends Formulaire{
    public function addCheckBox($text = ""){
        echo "<input type='checkbox' id=".$text." name=".$text." value=".$text.">
              <label for=".$text.">$text</label><br>";
    }
    public function addRadioButton($id, $name = ""){
        echo "<input type='radio' id=".$id." name=".$id." value=".$name.">
              <label for=".$name.">$name</label>";
    }
}

?>

