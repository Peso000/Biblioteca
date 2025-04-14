let numItems = 6;
let numItemsRemove = 0;


window.onload = function(){ 
    deixaVisivel();
}

function anterior(){
    console.log("Anterior");
}

function proximo(){
    let cardsInvisiveis = Array.from(document.querySelector(".carrosel").querySelectorAll(".card"));
    let cardsVisiveis = Array.from(document.querySelector(".carrosel").querySelectorAll(".card"));
    //let itemsVisiveis = items.filter((c, i) => i < numItems && c.className == "invisivel card").length;

    console.log(cardsVisiveis[cardsVisiveis.length-1].id, cardsInvisiveis[cardsInvisiveis.length-1].id)

    if(cardsVisiveis[cardsVisiveis.length-1].id <= cardsInvisiveis[cardsInvisiveis.length-1].id & numItemsRemove < 6){
        ++numItems;
        ++numItemsRemove;
        ocultaTodos();
        deixaVisivel();
    }
}

function ocultaTodos(){
    let items = Array.from(document.querySelector(".carrosel").querySelectorAll(".card"));

    items.forEach(c => c.removeAttribute("class"));
    items.forEach(c => c.setAttribute("class", "invisivel card"));
}

function deixaVisivel(){
    let items = Array.from(document.querySelector(".carrosel").querySelectorAll(".invisivel.card"));
    let itemsVisiveis = items.filter((c, i) => i < numItems);

    for(let i = 0; i < numItemsRemove; i++){
        itemsVisiveis.shift();
    }

    itemsVisiveis.forEach(c => c.removeAttribute("class"));
    itemsVisiveis.forEach(c => c.setAttribute("class", "visivel card"));
}