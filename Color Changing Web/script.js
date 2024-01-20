
let currentIndex = 0;
const colors=["black", "turquiose", "aquamarine" , "maroon" , "blue", "lime" , "red", "yellow", "brown", "white", "green"];

function colorChange(){
    
    const colorBox = document.getElementById("color-box");

    colorBox.style.backgroundColor = colors[currentIndex];

    currentIndex = (currentIndex + 1) % colors.length;
}

