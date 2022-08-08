let submit = document.querySelector("button");
submit.addEventListener("click", printPrices);
console.log("checl");

function printPrices(){
    let xhtmlQuantity = document.getElementById("basicXhtml").value;
    let phpQuantity = document.getElementById("introPhp").value;
    let jqueryQuantity = document.getElementById("advancedJquery").value;
    if(xhtmlQuantity.length == 0 || phpQuantity.length == 0 || jqueryQuantity.length == 0){
        alert("You have left an empty field");
    }
    var regex = '[^0-9]';
    if(xhtmlQuantity.match(regex) || phpQuantity.match(regex) || jqueryQuantity.match(regex)){
        alert("You have an input that is not an integer");
    }
    let xhtml = xhtmlQuantity * 19.99;
    let php = phpQuantity * 86.00;
    let jQuery = jqueryQuantity * 55.00;
    let sum = xhtml + php + jQuery;

    document.getElementById("resultingText").innerHTML = "<b>Basic XHTML (Quantity - " + xhtmlQuantity + "): </b>$" + xhtml + "<br>"
                                                       + "<b>Intro to PHP (Quantity - " + phpQuantity+ "): </b>$" + php + "<br>"
                                                       + "<b>Advanced Jquery (Quantity - " + jqueryQuantity + "):</b> $" + jQuery + "<br> <br>"
                                                       + "<b>Final Total: $</b>" + sum;
}