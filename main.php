<?php
include 'formulaire.php';

$form1 = new Form2("main.php", "post");
$form1->addTextZone("name");
$form1->addTextZone("age");
$form1->addRadioButton("id","test");
$form1->addRadioButton("id","test2");
$form1->addRadioButton("id","test3");
echo "<br>";
$form1->addCheckBox("checkbox1");
$form1->addCheckBox("checkbox2");
$form1->addCheckBox("checkbox3");
$form1->addButton("Envoi");
$form1->getForm();

if(isset($_POST["name"]) && isset($_POST["age"])){
    echo $_POST["name"]."<br>";
    echo $_POST["age"];
    echo $_POST["id"];
}

?>