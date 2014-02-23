/*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

$field = $_POST['scripn1'];


$link = "http://finance.google.co.uk/finance/info?client=ig&q=NSE:".$field;

$quote = file_get_contents($link);

  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  $json_output = json_decode($data, true);
  
 // print_r($json_output);
  
  //Output Stock price array key.
 
$jack = $json_output['l'];

echo "&scrip1=".$jack."&";

$field = $_POST['scripn2'];


$link = "http://finance.google.co.uk/finance/info?client=ig&q=NSE:".$field;

$quote = file_get_contents($link);

  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  $json_output = json_decode($data, true);
  
 // print_r($json_output);
  
  //Output Stock price array key.
 
$jack = $json_output['l'];
echo "&scrip2=".$jack."&";

$field = $_POST['scripn3'];


$link = "http://finance.google.co.uk/finance/info?client=ig&q=NSE:".$field;

$quote = file_get_contents($link);

  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  $json_output = json_decode($data, true);
  
 // print_r($json_output);
  
  //Output Stock price array key.
 
$jack = $json_output['l'];
echo "&scrip3=".$jack."&";
$field = $_POST['scripn4'];


$link = "http://finance.google.co.uk/finance/info?client=ig&q=NSE:".$field;

$quote = file_get_contents($link);

  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  $json_output = json_decode($data, true);
  
 // print_r($json_output);
  
  //Output Stock price array key.
 
$jack = $json_output['l'];
echo "&scrip4=".$jack."&";
$field = $_POST['scripn5'];


$link = "http://finance.google.co.uk/finance/info?client=ig&q=NSE:".$field;

$quote = file_get_contents($link);

  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  $json_output = json_decode($data, true);
  
 // print_r($json_output);
  
  //Output Stock price array key.
 
$jack = $json_output['l'];
echo "&scrip5=".$jack."&";
$field = $_POST['scripn6'];


$link = "http://finance.google.co.uk/finance/info?client=ig&q=NSE:".$field;

$quote = file_get_contents($link);

  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  $json_output = json_decode($data, true);
  
 // print_r($json_output);
  
  //Output Stock price array key.
 
$jack = $json_output['l'];
echo "&scrip6=".$jack."&";
$field = $_POST['scripn7'];


$link = "http://finance.google.co.uk/finance/info?client=ig&q=NSE:".$field;

$quote = file_get_contents($link);

  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  $json_output = json_decode($data, true);
  
 // print_r($json_output);
  
  //Output Stock price array key.
 
$jack = $json_output['l'];
echo "&scrip7=".$jack."&";
$field = $_POST['scripn8'];


$link = "http://finance.google.co.uk/finance/info?client=ig&q=NSE:".$field;

$quote = file_get_contents($link);

  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  $json_output = json_decode($data, true);
  
 // print_r($json_output);
  
  //Output Stock price array key.
 
$jack = $json_output['l'];
echo "&scrip8=".$jack."&";
$field = $_POST['scripn9'];


$link = "http://finance.google.co.uk/finance/info?client=ig&q=NSE:".$field;

$quote = file_get_contents($link);

  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  $json_output = json_decode($data, true);
  
 // print_r($json_output);
  
  //Output Stock price array key.
 
$jack = $json_output['l'];
echo "&scrip9=".$jack."&";


$field = $_POST['scripn10'];


$link = "http://finance.google.co.uk/finance/info?client=ig&q=NSE:".$field;

$quote = file_get_contents($link);

  $json = str_replace("\n", "", $quote);
  
  $data = substr($json, 4, strlen($json) -5);
    
  $json_output = json_decode($data, true);
  
 // print_r($json_output);
  
  //Output Stock price array key.
 
$jack = $json_output['l'];
echo "&scrip10=".$jack."&";



?>