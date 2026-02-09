<?php

//operador and 

var_dump(true && true); //1  
echo "<hr>";
var_dump(true && false); //0
echo "<hr>";
var_dump(false && false); //0
echo "<hr>";
var_dump(false && true); //0

//operador logico or

var_dump(true || true); //1
echo "<hr>";
var_dump(true || false); //1
echo "<hr>";
var_dump(false || false); //0
echo "<hr>";
var_dump(false || true); //1

//operador logico xor

var_dump(true xor true); //0
echo "<hr>";
var_dump(true xor false); //1
echo "<hr>";
var_dump(false xor false); //0
echo "<hr>";
var_dump(false xor true); //1

//operador logico not o negacion

var_dump(!true); //0
echo "<hr>";
var_dump(!false); //1
echo "<hr>";
