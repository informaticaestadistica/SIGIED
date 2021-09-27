/*
	Respuesta por Ajax para la autentificacion de usuarios
*/

const btnIngresar = document.getElementById('btn-ingresar');

const validarUsuario = (user, pass)=>{
	const path = `php/inicio.php?user=${user}?pass=${pass}`;

	fetch(path)
		.then(response => (response.ok) ? Promise.resolve(response) : Promise.reject(new Error('Fallo la carga de datos')))
		.then(response => response.json())
		.then(date =>{

		})
		.chatch((error) => console.log(`Error: ${error.message}`))
}

btnIngresar.addEventListener('click', ()=>{
	validarUsuario()
	
})