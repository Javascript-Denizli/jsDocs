<!DOCTYPE html>
<html>
<body>

<p>Click the button to loop through a block of code as long as i is less than 5.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var text = ""
    var i = 0;
    do {
        text += "<br>The number is " + i;
        i++;
    }
    while (i < 5);
    document.getElementById("demo").innerHTML = text;
}
</script>
<?php //Bu kod bir koşuulun gerçekleşmesine bağlı olarak döngüyü devam eettirir. ?>
</body>
</html>
