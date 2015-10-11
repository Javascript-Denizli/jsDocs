<!DOCTYPE html>
<html>
<head>
</head>
<body>

<p id="demo"></p>

<p>With the debugger turned on, the code inside the script element should stop executing before it executes the third line.</p>

<script>
var x = 15 * 5;
debugger;
document.getElementById("demo").innerHTML = x;
</script>
<?php //Bu kod ekrana yazılan yazıyı durdurmaya yarar. ?>
</body>
</html>
