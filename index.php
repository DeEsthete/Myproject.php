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

//include "./classes/Tag.php";
//$tag = new Tag("a", true);
//$tag->setBody("ClickThis");
//$arr = ["href" => "//link"];
//$arr2 = [
//    "href" => "//neLink",
//    "ads" => "fhfg"
//];
//$tag->setAttrs($arr);
//$tag->addAttrs($arr2);
//echo $tag->getString();

//include "./classes/MiniMarket.php";
//$m = new MiniMarket();
//echo $m->hasItem("lhea");

include_once "./classes/School/School.php";
include_once "./classes/School/Rating.php";
include_once "./classes/School/Student.php";
$school = new School();
$student1 = new Student();
$student1->setName("Leha");
$student1->setAge(19);
$student1->setHeight(171);
$student1->setKurs("Kurs1");
$student1->setFakultet("Fakultet1");
$ratings1 = [];
$ratings1[0] = new Rating("Algebra", 5, "Simple");
$ratings1[1] = new Rating("Phisic", 3, "Simple");
$student1->setRatings($ratings1);

$student2 = new Student();
$student2->setName("Vadim");
$student2->setAge(27);
$student2->setHeight(169);
$student2->setKurs("Kurs3");
$student2->setFakultet("Fakultet1");
$ratings2 = [];
$ratings2[0] = new Rating("Algebra", 2, "Simple");
$ratings2[1] = new Rating("Phisic", 5, "Simple");
$student2->setRatings($ratings2);

$students = [];
$students[] = $student1;
$students[] = $student2;
$school->setStudents($students);

//var_dump($school->getStudents());

var_dump($school->getMiddleHeight());
























