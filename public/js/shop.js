var cont = 0;
var total = 0;
const table = document.getElementById("testBody");
let pagar = document.getElementById("total_buy");

function loadTableData(items) {
    items.forEach( item => {
    let row = table.insertRow();
    row.id = "row "+cont;
    let name = row.insertCell(0);
    name.innerHTML = item.name;
    name.id = "name";
    let cantidad = row.insertCell(1);
    cantidad.innerHTML = item.cantidad;
    cantidad.id = "cant";
    let price = row.insertCell(2);
    let mult = parseInt(item.price)*parseInt(item.cantidad)
    price.innerHTML = mult;
    price.id = "precio";
    total = total+mult;
    let but = row.insertCell(3);
    but.innerHTML = "<button class='btn-less'>-</button><button class='btn-more'>+</button><button class='btn-dark'>X</button>";
    cont++;
    })
    pagar.innerHTML = total;
}
//Eliminar Fila de la Tabla
table.addEventListener('click', e => {
    if(e.target.classList.contains('btn-dark')){
        actions(e.target.parentElement.parentElement.id, 0); //se pasa el id de la fila contenedora del Boton
    }
    if(e.target.classList.contains('btn-more')){
        actions(e.target.parentElement.parentElement.id, 1)
    }
    if(e.target.classList.contains('btn-less')){
        actions(e.target.parentElement.parentElement.id, 2)
    }
    e.stopPropagation();
});
function actions(id, num){
    //Se almacena el precio para luego descontarlo del valor total a pagar y actualizarlo
    let price = document.getElementById(id).querySelector('#precio');
    let cantidad = document.getElementById(id).querySelector('#cant');
    let item_price = 0;
    let actual_price = parseInt(price.textContent);
    let actual_cant = parseInt(cantidad.textContent);
    if(num==0){
        total=total-actual_price;
        pagar.innerHTML = total;
        //Eliminando la Fila de la Tabla
        document.getElementById(id).remove();
    }else if(num==2 && actual_cant>1){
        item_price = actual_price/actual_cant;
        actual_cant = actual_cant - 1;
        actual_price = actual_price - item_price;
        total = total - item_price;

        price.innerHTML = actual_price;
        cantidad.innerHTML = actual_cant;
        pagar.innerHTML = total;
    }else if(num==1){
        item_price = actual_price/actual_cant;
        actual_cant = actual_cant +1;
        actual_price = actual_price + item_price;
        total = total + item_price;

        price.innerHTML = actual_price;
        cantidad.innerHTML = actual_cant;
        pagar.innerHTML = total;
    }
    
}
//Datos de Prueba
const items1 = [
    { name: "vino 1", cantidad: "10", price: "5000" },
    {  name: "vino 2", cantidad: "18", price: "3400"  },
];
const items2 = [
    {  name: "vino 4", cantidad: "8", price: "15000" },
    {  name: "vino 3", cantidad: "3", price: "10000"  },
];
loadTableData(items1);
loadTableData(items2);
loadTableData(items2);
loadTableData(items1);
loadTableData(items2);
loadTableData([]);