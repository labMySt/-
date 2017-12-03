<?php 
$arr_s = 1;
if(!$_COOKIE["vasa"]){
    setcookie("vasa", $arr_s, time()+3600);
	print_r("Hello! You are in first time on our site!");
	 
}
else {
	$arr_s = $_COOKIE["vasa"] + 1;
	setcookie("vasa", $arr_s, time()+3600);
	print_r("Hello! You are in ".($arr_s-1)." time on our site!");
}
?>


    ?>
	