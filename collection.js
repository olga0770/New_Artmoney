window.addEventListener("load", sidenVises);

function sidenVises() {

    console.log("siden vises");


    $.getJSON("collection.json", visCollectionListe);

}


function visCollectionListe(listen) {

    console.table( listen );
    listen.forEach(visCollection);
}




function visCollection(collection) {
    console.log( collection );


    var klon = document.querySelector("#collection_template").content.cloneNode(true);


    //indsæt data i klon
    klon.querySelector(".data_collectionlink").href = collection.collectionlink;



    klon.querySelector(".data_art").src = "picture/" + collection.art + "_art.jpg";


klon.querySelector(".data_arttitle").innerHTML = collection.arttitle;

klon.querySelector(".data_artist").innerHTML = collection.artist;


document.querySelector(".picture").appendChild(klon);



}














































