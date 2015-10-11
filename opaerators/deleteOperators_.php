<!DOCTYPE html>
<html>
<body>

<p>The delete operator deletes a property from an object.</p>

<p id="demo"></p>

<script>
var person = {
    firstname:"John",
    lastname:"Doe",
    age:50,
    eyecolor:"blue"
};
delete person.age;
document.getElementById("demo").innerHTML =
person.firstname + " is " + person.age + " years old.";
</script>
<?php
//Bir nesnenin bir özelliğini siler
?>
</body>
</html>
