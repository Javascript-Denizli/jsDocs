<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>
try {
    adddlert("Welcome guest!");
}
catch(err) {
    document.getElementById("demo").innerHTML = err.message;
}
</script>
<?php
//Catch hatayı yakalar ve bunu işlemek için bir kod uygular
?>
</body>
</html>
