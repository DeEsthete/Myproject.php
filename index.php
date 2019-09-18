<?php
//$myVar = $_GET["my_var"];
//$name = $_GET["name"];
//echo $name . $myVar;

//include "./classes/MyClass.php";
//$myClass = new MyClass();
//$myClass->setVar(111);
//echo $myClass->getVar();

//include "./classes/Number.php";
//$number = new Number(7);
//echo $number->mult(10)->add(21);
//echo $number->getNum();

//include "./classes/Worker.php";
//$w1 = new Worker("w1", 10, rand(90, 110));
//$w2 = new Worker("w2", 10, rand(90, 110));
//
////for ($i = 10; $i < 80; $i++){
////    $w1->growUp();
////}
//
//while($w1->isAlive){
//    $w1->growUp();
//    echo "Age: " . $w1->getAge() . " Height: " . $w1->getHeight() . "</br>";
//}
//echo ($w1->getAge() + $w2->getAge()) / 2 . "</br>";
//echo ($w1->getHeight() + $w2->getHeight()) / 2;

include "./classes/Tag.php";
$tag = new Tag("a", true);
$tag->setBody("ClickThis");
$arr = ["href" => "//link"];
$arr2 = [
    "href" => "//neLink",
    "ads" => "fhfg"
];
$tag->setAttrs($arr);
$tag->addAttrs($arr2);
echo $tag->getString();