const express = require('express');
const router = express.Router();

const conexion = require('./database/db');

//RUTA PARA OBTENER PRODUCTOS
router.get('/', (req,res)=>{
    conexion.query('SELECT * FROM productos WHERE estado="activo"', (error,results)=>{
       if(error){
           throw error;
       }else{
            res.render('index',{results:results});
       }
   })
})

//
router.get('/data', (req,res)=>{
    conexion.query('SELECT * FROM productos WHERE estado="activo"', (error,results)=>{
       if(error){
           throw error;
       }else{
           data = JSON.stringify(results)
            res.send(data);
       }
   })
})


//RUTA PARA GUARDAR Y ACTUALIZAR PRODUCTO
const crud = require('./controllers/crud');
router.post('/save',crud.save);
router.post('/update', crud.update);

//RUTA PARA CREAR PRODUCTO
router.get('/create', (req,res)=>{
    res.render('create');
})

//RUTA PARA EDITAR PRODUCTO
router.get('/edit/:id', (req,res)=>{
    const id = req.params.id;
    conexion.query('SELECT * FROM productos WHERE productId=?',[id], (error,results)=>{
        if(error){
            throw error;
        }else{
             res.render('edit',{product:results[0]});
        }
    })
})


//RUTA PARA ELIMINAR UN PRODUCTO
router.get('/delete/:id', (req,res)=>{
    const id = req.params.id;
    conexion.query('UPDATE productos SET estado="desactivado" WHERE productId=?',[id], (error,results)=>{
        if(error){
            throw error;
        }else{
             res.redirect('/');
        }
    })
})

module.exports = router;