<?php
/*
$date = new DateTime('2019-01-10');
$now = new DateTime();
echo $now-$date;
if($date < $now) {
    echo 'date is in the past';
}
*/
$Gown_Fine=0;
$earlier=new DateTime();/////Current date
$later=new DateTime("2020-01-10");
$diff = $later -> diff($earlier)->format("%r%a");

if($diff <= 0)
{
	$diff = 0;
}else
{
	$diff =$diff;
	$Gown_Fine=$diff * 1000;
}

?>