<?
//  if(!empty($_POST)
// {
	if (($_COOKIE["history"] > 0) )
	{
		$cookie = 1;
		setcookie("history", $cookie, time()+3600);	 
		include "exit.php";
        echo "<br>";
  	}
	else{
		if($_POST["name"] == "Ivan" && $_POST["parol"] == "parol"  && $_POST["email"] == "ivan@example.com" ){
        		$cookie = 1;
				setcookie("history", $cookie, time()+3600);	 
				include "exit.php";
		        echo "<br>";
        	}      
	}	
	else if($_COOKIE["history"] == 0){
        	$cookie = 0;		
    		setcookie("history", $cookie, time()+3600);	 
    		include "enter.php";
        	echo "<br>";
        	if(!isset($_POST["exit"]))echo "try again";
	    	}     
	 // else 
		// {   
		// 	$cookie = 0;		
	 //    	setcookie("history", $cookie, time()+3600);	 
	 //    	include "enter.php";
	 //        echo "<br>";		
	 // 	}

?>


