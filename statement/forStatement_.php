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
<?php //Bu kod koşulu oluşturan değişkenin değeri değiştirmez ise,koşul sürekli doğrulanağından sonsuz bir döngü oluşturulmuş olur. ?>
</body>
</html>