<!DOCTYPE html>
<html>
<body>

<p>The AND operator (&&) returns true if both expressions are true, otherwise it returns false.</p>

<p id="demo"></p>

<script>
var x = 6;
var y = 3;

document.getElementById("demo").innerHTML = 
(x < 10 && y > 1) + "<br>" + 
(x < 10 && y < 1);
</script>
<?php
//Mantıksal operatörler değişkenler ya da değerler arasındamantıksal bağlar kurarlar. Bu örnekte and operatoru her iki ifade de doğruysa true yazdırır diğer durumda ise ekrana false yazdırır
?>

</body>
</html>