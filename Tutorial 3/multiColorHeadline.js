var headline = document.querySelector('#one');


var headline2 = document.querySelector('#two');

function changeColorInterval() {
    headline.style.color = getRandomColor();
}

function changeColorInterval2(){
  headline2.style.color = getRandomColor();
  headline2.innerHTML = "<italic> you hovered on this line!</italic>";
}

function mouseOut() {
  headline2.style.color = getRandomColor();
  headline2.textContent = "you hovered out!";
}

headline2.addEventListener("mouseover", changeColorInterval2);

headline2.addEventListener("mouseout", mouseOut);

function getRandomColor() {
    var color = "#";
    var letters = "0123456789abcdef";
    for(var i =0; i<6; i++){
        color += letters [Math.floor(Math.random()*16)];
    }
    return color;
}

setInterval("changeColorInterval()", 500);
