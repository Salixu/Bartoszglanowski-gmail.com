<?php
$app->get('/home', function($request, $response){
  return 'Home';
});

$app->get('/contact', function($request, $response){
  return 'Contact';
});
?>
