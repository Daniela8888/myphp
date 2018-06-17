<html>
<head>
<title>Calculator</title>
<meta charset="UTF-8">
</head>
<body>


<form method="POST" action="calculator.php">
  
    
    <b>Please enter the first number :</b>
    	<br/><input type="text" name="num1" size="30"><br>
</p>
   
   <select name = "function">
      <option value="+">Add [+]</option>
      <option value="-">Subtract [-]</option>
     <option value="/">Divide [/] </option>
       <option value="*">Multiple [*]</option>
    </select>
  </p>
	
  
    <b>Enter the second number : </b><br/><input type="text" name="num2"    size="20"></p>
	
    <input type="checkbox" name="checkbox" id="check" value="false">Suhlasim s vypoctom</p>
	
    <input type="radio" name="radio" value="old">Som dospelý/á</p>
	
    <input type="radio" name="radio" value="young">Nie som dospelý/á</p>
	
    <input type="submit" value="Calculate" name="calculate"></p>
	
    <button type="history" value="History" name="History">History</button>
   <style>
   body { 
    background: lightblue  fixed center; 
}
</style>
</form>
</body>
</html>
