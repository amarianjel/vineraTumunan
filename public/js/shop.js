
let products = document.getElementById("products");
let cant = ["", "", "", "", "", "", "", ""];
let i = 0;

products.addEventListener('click', e =>{
    if(e.target.classList.contains('flaticon-shopping-bag')){
        console.log(e.target.parentElement.id);
        let id = e.target.parentElement.id;
        cant[i] = id;
        
        i++;
    }
    if(e.target.classList.contains('flaticon-visibility')){
        let vinos;
        cant.forEach( item => {
            item;
        });
    }
})