<?php

function hello(): void {
var_dump('hello');
}
$hi = hello();
var_dump($hi);
hello();

function helloName($name) {
var_dump("hello, $name!");
}

helloName('kaspar');
helloName('martin');

function helloNameAndAge($name, $age) {
    var_dump("hello, $name ! You are $age years old");
}
helloNameAndAge('kaspar', 32);



$test = function (){

};

var_dump($test);

$numbers = [1, 2, 3, 4];
$squares = array_map(function ($n) {
return $n * $n;
}, $numbers);
$squares = array_map(fn ($n) => $n * $n, $numbers);
var_dump($squares);

function cube(int $a): Int|String {
    if($a < 0) {
   return 'no negative!';
    }
return $a * $a * $a;
var_dump('blaaaaa');
    }
    var_dump(cube(4));

    $anwser = cube('jfloewan');
    $text = "cube of 5 is $ansWer!";
    echo $text;

