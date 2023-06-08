let header = document.getElementById("header");
let bars = document.getElementById("bars");
let nav = document.getElementById("nav");
let navClose = document.getElementById("nav-close");  


window.onload = function (){
    if (scrollY){
        header.style.boxShadow = "0 5px 20px 0 #00000021";
        header.style.backgroundColor = "white";
    }
};
window.onscroll = function (){
    if (scrollY){
        header.style.boxShadow = "0 5px 20px 0 #00000021";
        header.style.backgroundColor = "white";
    }else{
        header.style.boxShadow = "";
        header.style.backgroundColor = "";
    };
};


bars.onclick = function(){
    nav.style.transform = "translateX(0px)";
    navClose.style.display = "block";
}
navClose.addEventListener("click", function(){
    nav.style.transform = "translateX(-314px)";
    navClose.style.display = "none";
})