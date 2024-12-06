<?php
$array = [
    "name" => "Alex",
    "age" => 21,
    "course" => "PHP Development"
];
$object = (object)$array;
echo $object->name."<br>";
echo $object->course."<br>";

$newarray = (array)$object;
echo $newarray["age"];
?>