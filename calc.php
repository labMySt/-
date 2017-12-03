
<form name="test" method="post" action="calc.php">
	<p>
		<h1>Калькуляторрррр...</h1><br>
		<input type="text" size="20" name = "firstnamber">
		<select name = "do">
			<option>+</option>
				<option>-</option>
				<option>/</option>
				<option>*</option>
			</select>
			<input type="text" size="20" name = "secondnamber">
			<input type="submit" value="=">
	</p>		
</form>

<?php
	function check($ourInput){

    	if (empty($ourInput)) 
    		{   
    			if($ourInput != "0")
    			{
	    			echo "there is nothing";
	    			echo "<br>";
	    			global $flag;
	    			$flag = "nemona";
    			}
    		}
    	else return (int)$ourInput;

    };

    $flag = "mona";

    $f1 = check($_POST["firstnamber"]);
    
    $f2 = check($_POST["secondnamber"]);
   	
 if($flag == "mona")
 	{
 		
	switch ($_POST["do"]) {
	    case "+":
	        echo ($f1 + $f2);
	        break;
	    case "-":
	        echo ($f1 - $f2);;
	        break;
	    case "*":
	        echo ($f1 * $f2);;
	        break;
	    case "/":
	    	if($f2 == 0) 
	    		{ 
	    		echo "you can not divide by zero";
	    	    echo "<br>";
	    		}
	        else echo (int)($f1 / $f2);
	        break;
	}
}
else echo "try again";
?>