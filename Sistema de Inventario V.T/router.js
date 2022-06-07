const express = require('express');
const router = express.Router();

const dotenv = require('dotenv');
dotenv.config({ path: './env/.env'});

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

router.get('/login',(req, res)=>{
    res.render('login');
})

router.get('/register',(req, res)=>{
    res.render('register');
})


//10 - Método para la REGISTRACIÓN
router.post('/register', async (req, res)=>{
	const email = req.body.email;
	const name = req.body.name;
    const rol = req.body.rol;
	const pass = req.body.pass;
	let passwordHash = await bcrypt.hash(pass, 8);
    conexion.query('INSERT INTO users SET ?',{email:email, name:name, rol:rol, pass:passwordHash}, async (error, results)=>{
        if(error){
            console.log(error);
        }else{            
			res.render('register', {
				alert: true,
				alertTitle: "Registration",
				alertMessage: "¡Successful Registration!",
				alertIcon:'success',
				showConfirmButton: false,
				timer: 1500,
				ruta: ''
			});
            //res.redirect('/');         
        }
	});
})

//Metodo para la autenticacion
router.post('/auth', async (req, res)=> {
	const email = req.body.email;
	const pass = req.body.pass;    
    let passwordHash = await bcrypt.hash(pass, 8);
	if (email && pass) {
		conexion.query('SELECT * FROM users WHERE email = ?', [email], async (error, results, fields)=> {
			if(results.length == 0 || !(await bcrypt.compare(pass, results[0].pass) )) {    
				res.render('login', {
                        alert: true,
                        alertTitle: "Error",
                        alertMessage: "USUARIO y/o PASSWORD incorrectas",
                        alertIcon:'error',
                        showConfirmButton: true,
                        timer: false,
                        ruta: 'login'    
                    });
				
				//Mensaje simple y poco vistoso
                //res.send('Incorrect Username and/or Password!');				
			} else {         
				//creamos una var de session y le asignamos true si INICIO SESSION       
				req.session.loggedin = true;                
				req.session.name = results[0].name;
				res.render('login', {
					alert: true,
					alertTitle: "Conexión exitosa",
					alertMessage: "¡LOGIN CORRECTO!",
					alertIcon:'success',
					showConfirmButton: false,
					timer: 1500,
					ruta: ''
				});        			
			}			
			res.end();
		});
	} else {	
		res.send('Please enter user and Password!');
		res.end();
	}
});


//12 - Método para controlar que está auth en todas las páginas
router.get('/', (req, res)=> {
	if (req.session.loggedin) {
		res.render('index',{
			login: true,
			name: req.session.name			
		});		
	} else {
		res.render('index',{
			login:false,
			name:'Para acceder al sistema de inventario debe iniciar sesión',			
		});				
	}
	res.end();
});


//función para limpiar la caché luego del logout
router.use(function(req, res, next) {
    if (!req.email)
        res.header('Cache-Control', 'private, no-cache, no-store, must-revalidate');
    next();
});

 //Logout
//Destruye la sesión.
router.get('/logout', function (req, res) {
	req.session.destroy(() => {
	  res.redirect('/login') // siempre se ejecutará después de que se destruya la sesión
	})
});


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