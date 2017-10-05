
var valgte;
var info;

//1. load svg
$("#icon").load("signup.svg", svg_loaded);

function svg_loaded(){
console.log("har loaded svg");

//2. load JSON
$.getJSON("signup.json", data_loaded);
}

//3. put tekstvariable og aktivate click
function data_loaded(data){
    info = data;
    $("#icon svg g").on("click", vis_info);
    console.table(data);
}

//4. actions with click
function vis_info(e){
valgte = $(e.currentTarget).attr("id");

//5. show tekst from json
info.forEach(vis_tekst);
}

function vis_tekst(val){
    if(val.id == valgte){

document.querySelector(".data_text").textContent = val.text;
};
}



