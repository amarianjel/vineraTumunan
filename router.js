const express = require('express');
const router = express.Router();

const dotenv = require('dotenv');
dotenv.config({ path: './env/.env' });

//Invocamos a bcrypt
const bcrypt = require('bcryptjs');

//Variables de session
const session = require('express-session');
router.use(session({
    secret: 'secret',
    resave: true,
    saveUninitialized: true
}));

const conexion = require('./database/db');


//RUTA PARA LANZAR EL HOME
router.get('/', (req, res) => {
    res.render('index');
})


router.get('/catalogo', (req, res) => {
    conexion.query('SELECT * FROM products', (error, results) => {
        if (error) {
            throw error;
        } else {
            res.render('catalogoProductos', { results: results });
        }
    })
})


router.get('/formularioCompra', (req, res) => {
    res.render('formularioCompra');
})

router.get('/galeria', (req, res) => {
    res.render('galeria');
})
router.get('/alojamientos', (req, res) => {
        res.render('alojamientos');
    })
    /***********************************Rutas en Ingles ****************/
router.get('/en', (req, res) => {
    res.render('en/index');
})

/**************** */

/***********************************Rutas en Portugues ****************/
router.get('/po', (req, res) => {
    res.render('po/index');
})

/**************** */
router.get('/data', (req, res) => {
    conexion.query('SELECT * FROM products', (error, results) => {
        if (error) {
            throw error;
        } else {
            data = JSON.stringify(results)
            res.send(data);
        }
    })
})


module.exports = router;