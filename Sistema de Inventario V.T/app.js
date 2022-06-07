const express = require('express');
const { json } = require('express/lib/response');
const app = express();

const dotenv = require('dotenv');
dotenv.config({ path: './env/.env'});

//Invocamos a bcrypt
const bcrypt = require('bcryptjs');

//4 -seteamos el directorio de assets
app.use('/resources',express.static('public'));
app.use('/resources', express.static(__dirname + '/public'));

const conexion = require('./database/db');

app.use(express.urlencoded({extended:false}));
app.use(express.json());

app.set('view engine', 'ejs');

app.use('/', require('./router'));

app.listen(4000, () =>{
    console.log('SERVER corriendo en http://localhost:4000 ');
});
 