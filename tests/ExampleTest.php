<?php
namespace Tests;
use Andreterceiro\Math;

require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

function sum($a, $b) {
    return $a + $b;
}
 
test('sum', function () {
  $result = sum(1, 2);
 
  expect($result)->toBe(3);
});

test('subtract', function () {
    $result = Math::subtract(2, 1);
   
    expect($result)->toBe(1);
});
  