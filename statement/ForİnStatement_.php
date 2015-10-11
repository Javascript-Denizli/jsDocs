<!DOCTYPE html>
<html>
<body>

<p>Click the button to loop through the properties of an object.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var person = {fname:"John", lname:"Doe", age:25}; 
    
    var text = "";
    var x;
    for (x in person) {
        text += person[x] + " ";
    }
    document.getElementById("demo").innerHTML = text;
}
</script>
<?php //Bu bir nesnenin sahip olduğu özellik isimlerine göre ya da bir dizi içerisinde sıralı bir şekilde ulaşmamızı saylayan döngüdür. ?>
</body>
</html>
