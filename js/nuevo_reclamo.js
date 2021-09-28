/*================================= Carga del select de Categoria =================================*/
const categorias = document.getElementById('categoria')

/*	obtencion de los datos de la tabla 'caracteristicas_sigied'*/
const obtenerCaracteriscas = () =>{
	const path = ('elementos_reclamo.php?opcion=1') //La opcion 1 es para obtener las caracteristicas

	fetch(path)
	
		.then(response => (response.ok) ? Promise.resolve(response) : Promise.reject(new Error('Fallo en la carga.')))

		.then(response => response.json())

		.then(data => {
			categoriaArray = data
			cargarCategorias(data)

		})

	.catch((error) => console.log(`Error: ${error.message}`))
}


const cargarCategorias = (data)=>{
	const fragment = document.createDocumentFragment()

	for(const categoria of data){
		let option = document.createElement('OPTION')
		
		option.setAttribute('value', categoria.id)
		option.textContent = categoria.descripcion
		fragment.append(option)
	}
	categorias.append(fragment)
	cargarElemento(elementosArray, categorias.firstElementChild.value)
}

/*================================= Carga del select de Elemento =================================*/

const elementos = document.getElementById('elemento')
let elementosArray = new Array

/*	obtencion de los datos de la tabla 'caracteristicas_sigied'*/
const obtenerElementos = () =>{
	const path = ('elementos_reclamo.php?opcion=2') //La opcion 1 es para obtener los elementos

	fetch(path)
	
		.then(response => (response.ok) ? Promise.resolve(response) : Promise.reject(new Error('Fallo en la carga.')))

		.then(response => response.json())

		.then(data => {
			elementosArray = data
		})

	.catch((error) => console.log(`Error: ${error.message}`))
}

//Al cambiar la seleccion de cartegoria, se cambian los elementos 
categorias.addEventListener('change',(e) =>{

	document.getElementById('categoria-elegida').value = e.target.options[e.target.value -1].textContent
	cargarElemento(elementosArray, e.target.value)
})

const cargarElemento = (data, categoria)=>{
	const fragment = document.createDocumentFragment()
	//Borramos el contenido
	elementos.innerHTML = ''

	for(const elemento of data){
		let option = document.createElement('OPTION')
		if(elemento.categoria_id == categoria){
			option.setAttribute('value', elemento.id)
			option.textContent = elemento.descripcion
			fragment.append(option)
		}
	}
	elementos.append(fragment)
	cargarSubElemento(subElementosArray, elementos.firstElementChild.value)
}


const subElementos = document.getElementById('sub-elemento')
let subElementosArray = new Array

/*	obtencion de los datos de la tabla 'caracteristicas_sigied'*/
const obtenerSubElementos = () =>{
	const path = ('elementos_reclamo.php?opcion=3') //La opcion 1 es para obtener los sub-elementos

	fetch(path)
	
		.then(response => (response.ok) ? Promise.resolve(response) : Promise.reject(new Error('Fallo en la carga.')))

		.then(response => response.json())

		.then(data => {
			subElementosArray = data
		})

	.catch((error) => console.log(`Error: ${error.message}`))
}
obtenerSubElementos()

//Al cambiar la seleccion de cartegoria, se cambian los elementos 
elementos.addEventListener('change',(e) =>{
	cargarSubElemento(subElementosArray, e.target.value)
})

const cargarSubElemento = (data, elemento)=>{
	const fragment = document.createDocumentFragment()
	//Borramos el contenido
	subElementos.innerHTML = ''

	for(const subElemento of data){
		let option = document.createElement('OPTION')
		if(subElemento.elemento_id == elemento){
			option.setAttribute('value', subElemento.id)
			option.textContent = subElemento.descripcion
			fragment.append(option)
		}
	}
	subElementos.append(fragment)
}

obtenerElementos()
obtenerCaracteriscas()

/*	Carga de la seleccion de Fallas*/
const falla = document.getElementById('falla')

const obtenerFallas = () =>{
	const path = ('elementos_reclamo.php?opcion=4') //La opcion 1 es para obtener los sub-elementos

	fetch(path)
	
		.then(response => (response.ok) ? Promise.resolve(response) : Promise.reject(new Error('Fallo en la carga.')))

		.then(response => response.json())

		.then(data => {
			cargarFallas(data)
		})

	.catch((error) => console.log(`Error: ${error.message}`))
}

const cargarFallas = (data) =>{
	const fragment = document.createDocumentFragment()

	for(const falla of data){
		let option = document.createElement('OPTION')
		option.setAttribute('value', falla.id)
		option.textContent = falla.descripcion
		fragment.append(option)
	}
	falla.append(fragment)
}

obtenerFallas()
/*	Funcionalidades de cambio de pantallas*/
/*	Esta Horrible lo se! Pero no se me ocurre nada por ahora xD*/
const pasos = document.getElementById('pasos')
const datosGenerales = document.getElementById('datos-generales')
const detalleElemento = document.getElementById('detalle-elemento')
const archivosAdjuntos = document.getElementById('archivo-adjunto')
const prioridades = document.getElementById('prioridades')

pasos.addEventListener('click', (e)=>{
    switch (e.target.textContent){
        case 'Datos generales':
        case 'Detalle de Elemento':
        case 'Archivos adjuntos':
        case 'Prioridades':
            if(!e.target.classList.contains('seleccionado')){
                for(paso of pasos.children){
                    paso.classList.remove('seleccionado')
                }
                e.target.classList.toggle('seleccionado')
            }
            break
        }
    let titulo = document.getElementById('titulo')
    switch (e.target.textContent){
        case 'Datos generales':
        	titulo.textContent = 'Datos Generales'
            datosGenerales.classList.remove('oculto')
            detalleElemento.classList.add('oculto')
            archivosAdjuntos.classList.add('oculto')
            prioridades.classList.add('oculto')
            break
        case 'Detalle de Elemento':
 	        titulo.textContent = 'Detalle de Elemento'
            datosGenerales.classList.add('oculto')
            detalleElemento.classList.remove('oculto')
            archivosAdjuntos.classList.add('oculto')
            prioridades.classList.add('oculto')
            break
        case 'Archivos adjuntos':
        	titulo.textContent = 'Archivos adjuntos'
            datosGenerales.classList.add('oculto')
            detalleElemento.classList.add('oculto')
            archivosAdjuntos.classList.remove('oculto')
            prioridades.classList.add('oculto')
            break
        case 'Prioridades':
        	titulo.textContent = 'Prioridades'
            datosGenerales.classList.add('oculto')
            detalleElemento.classList.add('oculto')
            archivosAdjuntos.classList.add('oculto')
            prioridades.classList.remove('oculto')
            break
    }
})


/*Funciones para Agregar un nuevo elemento*/

const contenedorFalla = document.getElementById('contenedor-falla')
const btnNuevo = document.getElementById('btn-nuevo')
let contador = 0

btnNuevo.addEventListener('click', (e) =>{
	contador++

	e.preventDefault()

	document.getElementsByClassName('btn-borrar')[0].classList.remove('oculto')

	let copia = contenedorFalla.firstElementChild.cloneNode('true')

	/*Modificamos los atributos del Select de "Elemento"*/
	copia.children[1].firstElementChild.lastElementChild.removeAttribute('name')
	copia.children[1].firstElementChild.lastElementChild.setAttribute('name', `elemento-${contador}`)
	/*Modificamos los atributos del Select de "Sub-Elemento"*/
	copia.children[1].children[1].lastElementChild.removeAttribute('name')
	copia.children[1].children[1].lastElementChild.setAttribute('name', `sub-elemento-${contador}`)
	/*Modificamos los atributos del Select de "Falla"*/
	copia.children[1].lastElementChild.lastElementChild.removeAttribute('name')
	copia.children[1].lastElementChild.lastElementChild.setAttribute('name', `falla-${contador}`)
	copia.firstElementChild.remove()

	contenedorFalla.append(copia)

})

contenedorFalla.addEventListener('click', (e) =>{
    
    e.preventDefault()

    if(e.target.classList.contains('btn-borrar') && contador > 0){
        e.target.parentElement.remove()
        contador--
        ocultarBoton()
    }
})

const ocultarBoton = ()=>{
    if(contador == 0)
        document.getElementsByClassName('btn-borrar')[0].classList.toggle('oculto')
}