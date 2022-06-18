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
    let date = row.insertCell(1);
    date.innerHTML = item.date;
    let price = row.insertCell(2);
    price.innerHTML = item.price;
    price.id = "precio";
    total = total+parseInt(item.price);
    let but = row.insertCell(3);
    but.innerHTML = "<button class='btn-dark'>Eliminar</button>";
    cont++;
    })
    pagar.innerHTML = total;
}
//Eliminar Fila de la Tabla
table.addEventListener('click', e => {
    if(e.target.classList.contains('btn-dark')){
        delet(e.target.parentElement.parentElement.id); //se pasa el id de la fila contenedora del Boton
    }
    e.stopPropagation();
});
function delet(id){
    //Se almacena el precio para luego descontarlo del valor total a pagar y actualizarlo
    let price = document.getElementById(id).querySelector('#precio').textContent;
    total=total-parseInt(price);
    pagar.innerHTML = total;
    //Eliminando la Fila de la Tabla
    document.getElementById(id).remove();
}
//Datos de Prueba
const items1 = [
    { name: "vino 1", date: "10", price: "50000" },
    {  name: "vino 2", date: "18", price: "34000"  },
];
const items2 = [
    {  name: "vino 4", date: "8", price: "150000" },
    {  name: "vino 3", date: "1", price: "20000"  },
];
loadTableData(items1);
loadTableData(items2);
loadTableData(items2);
loadTableData(items1);
loadTableData(items2);
loadTableData([]);