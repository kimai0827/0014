<?php
//http://simplehtmldom.sourceforge.net/
//www.m2j.co.jp/mb/market_mb/rate.php
//http://emaken.com/sae/m2j/kawase.php?val=NZUSD
//USDJPY, EURJPY, EURUSD, AUDJPY, NZDJPY, 
//GBPJPY, HKDJPY, ZARJPY, CADJPY, AUDUSD, 
//NZDUSD

	$val = $_GET['val'];
	if($val == 'USDJPY')
		$num = 0;
	else if ($val == 'EURJPY')
		$num = 1;
	else if ($val == 'EURUSD')
		$num = 2;
	else if ($val == 'AUDJPY')
		$num = 3;
	else if ($val == 'NZDJPY')
		$num = 4;
	else if ($val == 'GBPJPY')
		$num = 5;
	else if ($val == 'HKDJPY')
		$num = 6;
	else if ($val == 'ZARJPY')
		$num = 7;
	else if ($val == 'CADJPY')
		$num = 8;
	else if ($val == 'AUDUSD')
		$num = 9;
	else if ($val == 'NZDUSD')
		$num = 10;

	$url = 'http://www.m2j.co.jp/mb/market_mb/rate.php';
 	include('../simple_html_dom.php');
  	$html = file_get_html($url);

$a = 0;

   foreach($html->find('font[color=#ffffff]') as $article){
	$a++;
	if( $a == 4 + 5*$num)
	        echo $article->innertext.' '; 
	else if( $a == 5 + 5*$num)
	        echo $article->innertext; 
    }

  echo $ret;
    echo " by m2j";


?>
