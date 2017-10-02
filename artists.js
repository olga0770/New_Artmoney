window.addEventListener("load", sidenVises);

function sidenVises() {

    console.log("siden vises");


    $.getJSON("artists.json", visCollectionListe);

}


function visCollectionListe(listen) {

    console.table( listen );
    listen.forEach(visCollection);
}




function visCollection(collection) {
    console.log( collection );


    var klon = document.querySelector("#partner_template").content.cloneNode(true);


    //indsæt data i klon
    klon.querySelector(".data_partnerlink").href = collection.partnerlink;



    klon.querySelector(".data_art").src = "picture/" + collection.art + "_art.jpg";


klon.querySelector(".data_company").innerHTML = collection.company;

klon.querySelector(".data_country").innerHTML = collection.country;


document.querySelector(".partners").appendChild(klon);



}














































