<?php
  		if (isset($_GET['submit']))
	{
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch ($operator) 
		{ 
			case 'None':
				$ans = "You need to select a method";
				break;
			case 'Add':
				$ans = $result1 + $result2;
				break;
			case 'Subtract':
				$ans = $result1 - $result2;
				break;
			case 'Multiply':
				$ans = $result1 * $result2;
				break;
			case 'Divide':
				$ans = $result1 / $result2;
				break;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Title of the document</title>
 </head>
 <body>
 	 <form>
	     <input type="text" name="num1" placeholder="number 1">
	     <input type="text" name="num2" placeholder="number 2">
	     <select name="operator">
		 <option>None</option>
		 <option>Add</option>
		 <option>Subtract</option>
		 <option>Multiply</option>
		 <option>Divide</option>
	     </select> 
	       <br>
	      <button type="submit" name="submit" value="submit">Calculate</button>
        </form>	 
 <p>The ans is : <?php echo $ans; ?> </p>
</body>
</html>