<?php include "header.php"?>
<form action="" method="get">
    <input type="number" placeholder="Enter your first number" name="num1">
    <input type="number" placeholder="Enter your second number" name="num2">
    <select name ='operator'>
<option value="add">Add</option>
<option value="sub">Subtract</option>
<option value="mul">Multiply</option>
<option value="div">Divide</option>
</select>
<input type="submit" name="calculate" value="calculate">
</form>
<?php
if (isset($_GET['calculate'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch($operator){
        case "add":
            $result = $num1 + $num2;
            break;
            case "sub":
                $result = $num1 - $num2;


                break;
            case "mul":
                    $result = $num1 * $num2;
                    break;
            case "div":
                        $result = $num1 / $num2;
                        break;

        default:
            $result = "Error:You have not selected the correct operator";


    }

if (isset($result)){
    echo "<h2> Result: $result </h2>";
}
}
?>
<h4>1.  Write a php script to display courses as list. Use 
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")<li><h4>
<?php
$courses1=array("PHP","HTML","JavaScript","CMS","Project");
unset($courses1["4"]);
foreach ($courses1 as $value) {
    echo $value."<br>";
    var_dump($courses1);}
    

?>

<h4>2. dump action
    <?php
    $courses1=array("PHP","HTML","JavaScript","CMS","Project");
    unset($courses1["4"]);
    foreach ($courses1 as $value) {
        echo $value."<br>";
        var_dump($courses1);
        $values=array_values($courses1);
        foreach ($values as $value) {
            echo $value . "<br>";}
        }
    ?>
<h4> 3.sorting<h4>
    <?php
    $courses3=array("PHP","HTML","JavaScript","CMS","Project");
    echo "a) ascending order sort by value <br>";
    asort($courses);
    foreach ($courses as $x =>$x_value) 
    {
        echo $x_value;
        echo "<br>";
    }
    echo "b) ascending order sort by Key>br>";
    ksort ($courses);
    foreach($courses as $x=>$x_value)
    {
        echo $x_value;
        echo"<br>";
    }
    echo "c) descending order sort by value<br>";
    arsort($courses);
    foreach($courses as $x=>$x_value)
    {
        echo $x_value;
        echo "<br>";

    }
    echo "d) descending order sort by Key<br>";
    krsort($courses);
    foreach($courses as $x=>$x_value)
    {
        echo $x_value;
        echo"<br>";
    }
    ?>
<h4>4. all values to upper case<h4>
    <?php
    $courses=array("PHP","HTML","JavaScript","CMS","Project");
    print_r(array_change_key_case($course,CASE_UPPER));
    ?>
<h4>5.List all your favorite colors and their hexadecimal equivalents<h4>

<?php
$color['#ff0000'] = "Red";
$color['#ffc0cb'] = "Pink";
$color['#0000ff'] = "Blue";
$color['#800080'] = "Purple";
$color['#008000'] = "Green";

foreach($color as $x=>$x_values) {
    echo $x. "=>".$x_values."<br>";}
    ?>
<h4>6.PHP script to calculate and display average temperature<h4>
    <?php
    $a=array (78, 60, 62, 68, 71, 68, 73,
    85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
    74, 62, 62, 65, 64, 68, 73, 75, 79, 73
);
$sum=array_sum($a);
$count=count($a);
echo"Avarage temperature : ".$sum/$count;

sort($a);

for($i=0; $i <5; $i++){
    echo $a[$i]."<br>";}
    rsort($a);
    for ($i=0; $i < 5; $i++){
        echo $a[$i]."<br>";}
?>
}

}



<?php include "footer.php"?>