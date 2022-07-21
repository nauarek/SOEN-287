console.log("succesfully linked to HTML file!");

var tdElements = document.querySelectorAll('td');

//adding the restart button functionality
var restart = document.getElementById("reset");
restart.addEventListener("click", clearCells);

function clearCells(){
    for(var i =0; i<tdElements.length; i++){
        tdElements[i].textContent = "";
    }
}


for(var i =0; i< tdElements.length; i++){
    tdElements[i].addEventListener("click", handleClicks);
}
function handleClicks(){
    if(this.textContent == ""){
        this.textContent = 'X';
    } else if(this.textContent == 'X'){
        this.textContent ="O";
    } else{
        this.textContent = "";
    }
}