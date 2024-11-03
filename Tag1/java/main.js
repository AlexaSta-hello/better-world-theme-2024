let darkmode = document.querySelector("#darkmodeId");
let alles = document.querySelector("body");
let hellmode = document.querySelector("#hellId");
let schriftmode = document.querySelector("#schriftId")
let grünmode = document.querySelector("#grünId")


function darkmodus(){
    alles.style.backgroundColor = "rgb(40, 39, 39)";
    document.querySelector("body").style.color = "white";
   document.querySelector("a").style.color = "white";
   document.querySelector("#nav2Id").style.color = "white";

}
//click---> Mouseevent
darkmode.addEventListener("click",darkmodus);

function hellmodus(){
    alles.style.backgroundColor= "white";
    alles.style.color="black";

}
hellmode.addEventListener("click",hellmodus);

//schriftgröße
function schriftmodus(){
    alles.style.fontSize = "3rem"

}
schriftmode.addEventListener("click",schriftmodus)

//Unterschiedliche Hintergründe Auswahl
let farbe1 = document.querySelector("#farbe1Id");
let farbe2 = document.querySelector("#farbe2Id");
let farbe3 = document.querySelector("#farbe3Id");
let farbe4 = document.querySelector("#farbe4Id");

function hellblau(){
    document.querySelector("body").style.backgroundColor = farbe1.value;
    console.log(farbe1);
}
farbe1.addEventListener("click",hellblau);

function hellesorange(){
    document.querySelector("body").style.backgroundColor = farbe2.value;
}
farbe2.addEventListener("click",hellesorange);

/*class und animation anzeigen*/

let burgerVar = document.querySelector("#hamburgerId");
let navVar = document.querySelector("#navId");

function toggleAnimation(){
    navVar.classList.toggle("show");
}
burgerVar.addEventListener("click",toggleAnimation);