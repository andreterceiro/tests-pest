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
  
test('request test', function() {
    $response = file_get_contents("http://www.terceiro.com.br");
    $assertionResponse = false;
    if (strpos($response, 'andreterceiro') > 0) {
        $assertionResponse = true;
    }
    expect($assertionResponse)->toBe(true); // redirect to Github Pages
});