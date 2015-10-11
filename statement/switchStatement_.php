<!DOCTYPE html>
<html>
<body>

<p>Click the button to display what day it is today.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var day;
    switch (new Date().getDay()) {
        case 0:
            day = "Sunday";
            break;
        case 1:
            day = "Monday";
            break;
        case 2:
            day = "Tuesday";
            break;
        case 3:
            day = "Wednesday";
            break;
        case 4:
            day = "Thursday";
            break;
        case 5:
            day = "Friday";
            break;
        case  6:
            day = "Saturday";
            break;
        default:
            day = "Unknown Day";
    }
    document.getElementById("demo").innerHTML = "Today is " + day;
}
</script>
<?php
//Bir değişken ya da ifadenin alabileceği muhtemel değerlere bağlı olarak çalışacak kod grupları tanımlamak için kullanıır
?>
</body>
</html>
