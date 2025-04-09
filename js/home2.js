function proximo(e){
    let element = e.target.parentElement.parentElement;
    let carrosel = element.querySelector(".items-carrosel2");

    carrosel.scrollBy({ left: 230 * 6, behavior: "smooth"});
}


function anterior(e){
    let element = e.target.parentElement.parentElement;
    let carrosel = element.querySelector(".items-carrosel2");

    carrosel.scrollBy({ left: -230 * 6, behavior: "smooth"});
}