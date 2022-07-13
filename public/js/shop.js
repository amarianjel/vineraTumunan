
let products = document.getElementById("products");
let cant = ["", "", "", "", "", "", "", ""];
let i = 0;

products.addEventListener('click', e =>{
    if(e.target.classList.contains('flaticon-shopping-bag')){
        let name = e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent.trim();
        cant[i] = name;
        
        i++;
    }
    if(e.target.classList.contains('flaticon-visibility')){
        let vinos;
        cant.forEach( item => {
            item;
        });
    }
})