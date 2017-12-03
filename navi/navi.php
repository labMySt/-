<?

if(!$_COOKIE["history"])

	{
		$cookie = array("http://myshop/navi/navi.php");
    	setcookie("history", serialize($cookie), time()+3600);	 
	}

else 
	{   
		$cookie = unserialize($_COOKIE["history"]);
		array_push($cookie, "http://myshop/navi/navi.php");
    	setcookie("history", serialize($cookie), time()+3600);	 
	}
echo "hello! This is my first page!";
echo "<br>";
?>

<html>
<a href="http://myshop/navi/navi.php">Go to navi</a>
<a href="http://myshop/navi/navi2.php">Go to navi2</a>
<a href="http://myshop/navi/navi3.php">go to navi3</a>

</html>
<?
	echo "<pre>";
    echo (var_dump(unserialize($_COOKIE["history"])));

?>