//a simple function that triggers alert box
function hello(){
alert("Welcome to my website");
}
//a simple function to add 2 numbers
function add (){
    document.write(5+6);
}
//document.getElementById(id) 
//display or like echo
//document.write
//windows.alert
//innerHTML
//console.log

//function to cahnge the background color of the page
function ChangeColor(where,newColor){
    //lets declare a variable with let keyword to get the color from the input box
    //color variable will get the color user selects
    let color = document.getElementById('background').Value;
    document.body.style.backgroundColor = color;
}
//function to change the font color of your page

function changeFcolor(){
let fcolor = document.getElementById('fcolor').value;
document.body.style.color = fcolor;
}

// crud
function crud(){
let fname=(document.form1.fname.value).trim();
if (fname.length<5){
    alert("First name must have atleast 5 characters");
    return false;
}

}

function fname(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("First name must have atleast 5 characters");
        return false;
    }
}