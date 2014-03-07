/*Owner & Copyrights: Vance King Saxbe. A.*//*Copyright (c) <2014> Author Vance King Saxbe. A, and contributors Power Dominion Enterprise, Precieux Consulting and other contributors. Modelled, Architected and designed by Vance King Saxbe. A. with the geeks from GoldSax Consulting and GoldSax Technologies email @vsaxbe@yahoo.com. Development teams from Power Dominion Enterprise, Precieux Consulting. Project sponsored by GoldSax Foundation, GoldSax Group and executed by GoldSax Manager.*/

  //Obtain Quote Info - This collects the Microsoft Stock Info
  $quote = file_get_contents('http://finance.google.co.uk/finance/info?client=ig&q=INDEXBOM:BSE-METAL');
  
  //Remove CR's from ouput - make it one line
  $json = str_replace("\n", "", $quote);
  
  //Remove //, [ and ] to build qualified string  
  $data = substr($json, 4, strlen($json) -5);
    
  //decode JSON data
  $json_output = json_decode($data, true);
  
  //Un-remark print_r to see all array keys
  //print_r($json_output);
  
  //Output Stock price array key.
  echo "&BSEMETAL=".$json_output['l']; 

?>/*email to provide support at vancekingsaxbe@powerdominionenterprise.com, businessaffairs@powerdominionenterprise.com, For donations please write to fundraising@powerdominionenterprise.com*/