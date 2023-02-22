<?php
$title = "JavaScript Event and form validations";
include "header.php"
?>
<h2> A simple button to display date </h2>
<button onclick="this.innerHTML = Date()"> Click to know date </button>
<h2>Make a button and a place holder as pharagraph for the date</h2>
<button onclick="gettElementById('p1').innerHTML=Date()"> Click to know date </button>
<p id="date"> </p>

<h2> Change the background color </h2>
<form>
<input type="color" id="fcolor" onchange="changeFcolor()">
</form>

<h2>On mouse Over and on Mouse Out </h2>

<span onmouseover="this.style.color='blue';
this.style.backgroundColor='yellow';
this.style.fontSize = '2em';" 
onmouseout="
this.style.color='red';
this.style.backgroundColor='White';
this.style.fontSize = '1.1em';" >Some text </span>




<?php
include "footer.php"?>