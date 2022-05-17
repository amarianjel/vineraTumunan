const conexion = require('../database/db');

exports.save = (req,res)=>{
    const name = req.body.productName;
    const code = req.body.productCode;
    const stock = req.body.stock;
    const price = req.body.price;
    const description = req.body.description;
    conexion.query('INSERT INTO productos SET ?',{productName:name, productCode:code, stock:stock, price:price, description:description}, (error,results)=>{
        if(error){
            console.log;
        }else{
            res.redirect('/');
        }
    })
}

exports.update = (req, res)=>{
    const id = req.body.productId;
    const name = req.body.productName;
    const code = req.body.productCode;
    const stock = req.body.stock;
    const price = req.body.price;
    const description = req.body.description;
    conexion.query('UPDATE productos SET ? WHERE productId= ?',[{productName:name, productCode:code, stock:stock, price:price, description:description}, id], (error,results)=>{
        if(error){
            console.log;
        }else{
            res.redirect('/');
        }
    })
}