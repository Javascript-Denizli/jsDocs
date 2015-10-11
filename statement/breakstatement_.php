<!DOCTYPE html>
<html>
<body>

<p>Click the button to do a loop with a break. The loop is supposed to output the numbers 0 to 4, but the break statement exits the loop when the variable i is equal to "3".</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var text = ""
    var i;
    for (i = 0; i < 5; i++) {
        if (i === 3) {
            break;
        }
        text += "The number is " + i + "<br>";
    }
    document.getElementById("demo").innerHTML = text;
}
</script>
<?php //Bu kod devam eden bir döngünün belli bir değişkenle kesilmesini sağlar.?>
</body>
</html>
