<!DOCTYPE html>
<html>
<body>

<p>Click the button to do a loop which will skip the step where i is equal to 3.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var text = "";
    var i;
    for (i = 0; i < 5; i++) {
        if (i === 3) {
            continue;
        }
        text += "The number is " + i + "<br>";
    }
    document.getElementById("demo").innerHTML = text;
}
</script>
<?php //Bu kod bir döngünün belli bir değeri atlayıp devam etmesini sağlar. Burada 3 değeri atlanmıştır. ?>
</body>
</html>
