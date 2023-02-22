<?php 
$title = "ex 1 :HAMK oy";
include "header.php"?>
<h2> excercise 1 </h2>

<h3> 3.1 Write a simple PHP script to print your information (Name and your groupid ) </h3>
    <?php //OPENING TAG 
    echo"Sonali NA <br>";
    echo "BBCAP22";
    ?>
    <h3> 3.2 Write PHP code to display the following massage. </h3>
    <?php
    echo "Hello World ! My name is \"sonali";
    ?>
    <h3> Current Date </h3>
    <?php 
    echo date ("d.m.Y")
    ?>

<script>
    document.write("Hello World this is JavaScript");
    </script>
    <noscript>
    Please enable JavaScript to view this content,
    </noscript>
<input type="button" onclick="hello()" value="Click Me">


   <h3> 3.4 Variable in Php </h3>
    <?php
    $title1 = "PHP is intersting";
    echo "<h1>" . $title1 . "</h1>";
    ?>
<script>
    //window.alert
    //window.alert("This will trigger an alert box");
    //window.alert(5+10);
    //document.write
    document.write("Hello this is interesting");
</script>
<h3> 3.5 Table & Variable </h3>
<button onclick="add()">Click to Add </button>
<hr>
<p id="place1" style="color:red; background-color:yellow;"> </p> 
<span id="place2" style="color:red; background-color:green;"> </span> 
<script>
    document.getElementById("place1").inertHTML = "This will go to place1";
    document.getElementById("place2").innerHTML = "This will go to span";

    </script>
    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    echo "
    <table>
<tr>
<th> S.N </th> <th> Name </th> <th> Grade </th> 
</tr>

<tr>
<td> 1 </td><td> Pekka </td><td> $g1 </td>
</tr>
<td> 2 </td><td> Johanna </td><td> $g2 </td>
</tr>
<td> 3 </td><td> John </td><td> $g3 </td>
</tr>
  </table>
";
    ?>
<h3> 4 Screenshot of the development environment </h3>
<<img src="picture.png" alt="docker screenshot" style="width: 60%">

<h2> changing background background-color</h2>
<form>
<input type="color" name = "background" onchange="changeColor('background',this.value)">
</form>


<?php include "footer.php"?>


    

 




