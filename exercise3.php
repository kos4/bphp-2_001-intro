<?php

//$variable = 1;
//$variable = 'one';
//$variable = true;
//$variable = 3.14;
//$variable = null;
$variable = [];

/*if (is_int($variable)) {
  $type = 'int';
} elseif (is_string($variable)) {
  $type = 'string';
} elseif (is_bool($variable)) {
  $type = 'bool';
} elseif (is_float($variable)) {
  $type = 'float';
} elseif (is_resource($variable) || is_array($variable) || is_object($variable)) {
  $type = 'other';
} elseif (is_null($variable)) {
  $type = 'null';
} else {
  $type = 'undefined';
}*/

switch (true) {
  case is_int($variable):
    $type = 'int';
    break;
  case is_string($variable):
    $type = 'string';
    break;
  case is_bool($variable):
    $type = 'bool';
    break;
  case is_float($variable):
    $type = 'float';
    break;
  case (is_resource($variable) || is_array($variable) || is_object($variable)):
    $type = 'other';
    break;
  case is_null($variable):
    $type = 'null';
    break;
  default:
    $type = 'undefined';
}

echo "type is $type";