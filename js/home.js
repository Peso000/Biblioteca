let numItems = 8;
let numItemsRemove = 0;


window.onload = function(){ 
    deixaVisivel();
}

function anterior(){
    console.log("Anterior");
}

function proximo(){
    let items = Array.from(document.querySelectorAll(".invisivel.card"));
    //let itemsVisiveis = items.filter((c, i) => i < numItems && c.className == "invisivel card").length;

    //console.log(items.length, itemsVisiveis+1)

    if(items.length > 0){
        ++numItems;
        ++numItemsRemove;
        ocultaTodos();
        deixaVisivel();
        console.log("proximot")
    }
}

function ocultaTodos(){
    let items = Array.from(document.querySelector(".carrosel").querySelectorAll(".carrosel.card"));

    items.forEach(c => c.removeAttribute("class"));
    items.forEach(c => c.setAttribute("class", "invisivel card"));
}

function deixaVisivel(){
    let items = Array.from(document.querySelector(".carrosel").querySelectorAll(".invisivel.card"));
    let itemsVisiveis = items.filter((c, i) => i < numItems);

    for(let i = 0; i < numItemsRemove; i++){
        itemsVisiveis.shift();
    }

    console.log(items)

    itemsVisiveis.forEach(c => c.removeAttribute("class"));
    itemsVisiveis.forEach(c => c.setAttribute("class", "visivel card"));
}