<?php

/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */

$data = array();



$data['cardview'][] = array('id' => '1','ads' => 'no','image_url'=>'http://developerstore.co.in/thumb/downloadmp3online/1.jpg','search_txt' => 'Motivation song Live Hindi');
$data['cardview'][] = array('id' => '2','ads' => 'no','image_url'=>'http://developerstore.co.in/thumb/downloadmp3online/2.jpg','search_txt' => ' Daawat e Ishq song');
$data['cardview'][] = array('id' => '3','ads' => 'yes','image_url'=>'','search_txt' => '');
$data['cardview'][] = array('id' => '4','ads' => 'no','image_url'=>'http://developerstore.co.in/thumb/downloadmp3online/3.jpg','search_txt' => 'Bindu song');
$data['cardview'][] = array('id' => '5','ads' => 'no','image_url'=>'http://developerstore.co.in/thumb/downloadmp3online/4.jpg','search_txt' => 'Happy Friendship Day Song');
$data['cardview'][] = array('id' => '6','ads' => 'yes','image_url'=>'','search_txt' => '');
$data['cardview'][] = array('id' => '7','ads' => 'no','image_url'=>'http://developerstore.co.in/thumb/downloadmp3online/5.jpg','search_txt' => 'Jaanat 2 Song Download');
$data['cardview'][] = array('id' => '8','ads' => 'no','image_url'=>'http://developerstore.co.in/thumb/downloadmp3online/6.jpg','search_txt' => 'Hero Song Download');
$data['cardview'][] = array('id' => '9','ads' => 'no','image_url'=>'http://developerstore.co.in/thumb/downloadmp3online/7.jpg','search_txt' => 'Love gets Spicy Song Download');
$data['cardview'][] = array('id' => '10','ads' => 'no','image_url'=>'http://developerstore.co.in/thumb/downloadmp3online/8.jpg','search_txt' => 'Zara Pass aavo song');
$data['fruits2'][] = array('id' => 'Ruby','id2'=>'ddd');

// array for JSON response
//$kitty = array('kitten' => array());
//$cardview['cardview'][] = array('id' => 'Ruby','id2'=>'ddd');
//$cardview['cardview'][] = array('id' => 'Silver','id2'=>'ddd');



//$output = json_encode($cardview);

//echo $output;
echo json_encode($data);
?>