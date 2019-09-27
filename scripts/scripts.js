//document.getElementById("demo").innerHTML = "Hello, World!";

$("#demo").html("Hello, World!");

$(".green").css("background-color", "green");

$(document).ready(function () {
    var a = $(".green").text()
    console.log(a)
})

function checkAgainstTarget(min, max, id) {
    console.log($(id).text())
}