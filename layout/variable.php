<?php include "header.php"?>
<h3> Exercise 3 In-class Task Variable & Operators 07.02.2023 (variable.php)
<h2> Create a simple html form to get Firstname and Lastname from the user and use 
     echo statement to print using tag: Hello …., You are welcome to my site
</h2>

<form action="action.php" method="post">
    <div class="row">

        <div class="col">
        <input type="text" name="fname" required placeholder="First Name" class="form-control">
        </div>
        <div class="col">
        <input type="text" name="lname" required placeholder="Last Name" class="form-control"> </div>
        </div>
    
    <div class="row">
        <div class="col">

       Birth Date: <input type = "date" name="bdate" required placeholder="Birth Date" class="from-control">
</div>
<div class="col">

Select Fav color:<input type="color" name ="color" required placeholder="color" class="from-control"></div>
</div>
</form>
<table class="table table-bordered">
<tr>
<th> SNA </th><th> First Name </th><th> Last Name </th> 
</tr>
<tr>
<th> 1 </th><th> Pekka </th><th> Suzaan </th> 
</tr>
<tr>
<th> 2 </th><th> Johanna </th><th> Kesh </th> 
</tr>
<tr>
<th> 3 </th><th> John </th><th> Ferna </th> 
</tr>
</table>
<h4> 4.Write a PHP script with two string variables. Assign any text to these variables. Join them together.  
    Print the length of the string. (Hint: string function)</h4>
<?php 
$a="Sri";
$b="Lanka";
$c= $a. $b;
echo"$c<br><br>";
echo  "Wellcome to Sri Lanka:" .strlen($c);
?>

<h5> 5.Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and 
    echo statement to output your answer.</h5>

    <?php $num1="298";
    $num2="234";
    $num3="46";
$total = $num1+$num2+$num3;
echo "Total=".$total;
?>

<h6> 6.Write a PHP script to detect the browser being 
    used to view your pages. (Use predefined variables: $_SERVER).</h6>

    <?php
    echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
?>
<h6>

<h7> 7.Write a PHP script in the footer section of your universal footer just below 
    the Copyright information to display the last modification time of a file. (Hint: Use predefined 
    variable $_SERVER, basename function  to get the filename , filetime function to get the last 
    modified time & date function to print the date and time)<h7>
<? include "footer.php" ?>







<?php include "footer.php"?>


