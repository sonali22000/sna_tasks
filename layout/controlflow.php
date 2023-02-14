<?php include "header.php"?>
<h3>1.Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays<h3>
<?php
  $month = date('F', time());
  if ($month == 'August')
  {
    echo 'It\'s August, so it\'s stil holiday.';
  }
  else
  {
    echo 'Not August, so I don\'t have any holidays.';
  }
?> 

<h3>2.Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.<h3>

<?php
$color = 'RED';
if ($color=='RED')
{
    echo "The color is red.";
}
else
{
    echo "The color is not red";
}

?>

<h3>3.Write a program to grade students based on their total score for a subject. 
    Use variable to hold the total score. Write a program to grade students based on 
    their total score for a subject. Use variable to hold the total score.  
<h3>
<?php

$score = 100;
if ($score > 80) {
    echo "Excellent";}
elseif($score > 70){
    echo "Great";}
elseif ($score > 60) {
    echo "Good ";}  
elseif ($score > 50) {
    echo "Pass ";}  
elseif ($score < 50)  {
    echo "Fail ";}
?>
<h3> 5.Use Switch statement with strops function to print the name of the browser as below
If someone is using Chrome it should print, you are using Goolge Chrome<h3>

<?php
function getbrowser()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $BROWSER ="N/A";
    $browsers = [
        '/msie/i' => 'Internet explorer',
        '/firefox/i'=> 'Firefox',
        '/safari/i'=>'safari',
        '/chrome/i'=>'chrome',
        '/edge/i'=>'edge',
        '/opera/i'=>'opera',
        '/mobile/i'=>'mobile browser',

    ];
    foreach($browsers as $regex=>$value)
    {
        if(preg_match($regex,$user_agent))
        {
            $browser=$value;
        }
    }
    return $browser;
}
echo"You are using:".getBrowser();

?>



     
<?php include "footer.php"?>


