const buscar_descripcion_origen = document.getElementById('form-origenes')
const checks = document.getElementById('chcks')
const siguiente =document.getElementById('siguiente')
const elementos = document.getElementById('elementos')
const sub_elementos = document.getElementById('sub_elementos')
const falla= document.getElementById('falla')
const parte1 = document.getElementById('parte1')
const parte2 = document.getElementById('parte2')
const parte3 = document.getElementById('parte3')
const volver = document.getElementById('volver')
const cerrar = document.getElementById('cerrar')
const guardar = document.getElementById('guardar')


siguiente.addEventListener('click',()=>{

    if(parte1.style.display != 'none'){
        parte1.style.display = 'none'
        parte2.style.display = 'inline-block'
        volver.style.display ='inline-block'
        //cerrar.style.display = 'none'
        const cat_2 = document.getElementById('cat_2')
        const cat_1 = document.getElementById('form-categorias').value
        categoria = '<label>Categoria: '+ cat_1+'</label>'
        cat_2.innerHTML=categoria


        const path = ('sql_elementos.php?categoria=' + cat_1)
        fetch(path)
        
            .then(response => (response.ok) ? Promise.resolve(response) : Promise.reject(new Error('Fallo en la carga.')))

            .then(response => response.json())
            
            .then(data => {
                cargarElementos(data)
            })
        .catch((error) => console.log(`Error: ${error.message}`))


        const path_3 = ('sql_fallas.php?')
        fetch(path_3)
        
            .then(response => (response.ok) ? Promise.resolve(response) : Promise.reject(new Error('Fallo en la carga.')))

            .then(response => response.json())
            
            .then(data => {
                cargarFallas(data)
            })
        .catch((error) => console.log(`Error: ${error.message}`))
    }else{
        parte3.style.display = 'inline-block'
        parte2.style.display = 'none'
        siguiente.style.display = 'none'
        guardar.style.display = 'inline-block'
    }
    
    
})

const cargarFallas = (data) =>{
    falla.innerHTML =""
    if(data != undefined){
        falla_descp ="<select name='id_falla' class='form-control' id='form-falla'>"        
        for(const e of data){
            falla_descp+= "<option value="+e.id+">"+e.descripcion+"</option>"
        }
    falla_descp += "</select>"
    falla.innerHTML = falla_descp 
    }
}

const cargarElementos = (data) =>{
    elementos.innerHTML =""
    if(data != undefined){
        elementos_descp ="<select name='id_elemento' class='form-control' id='form-elementos'>"        
        for(const e of data){
            elementos_descp+= "<option value="+e.id+">"+e.descripcion+"</option>"
        }
    elementos_descp += "</select>"
    elementos.innerHTML = elementos_descp 
    }
    
    const elemento_1 = document.getElementById('form-elementos').value
    console.log('elmento1 '+elemento_1)
    const path_2 = ('sql_sub_elementos.php?elemento=' + elemento_1)
    fetch(path_2)
    
        .then(response => (response.ok) ? Promise.resolve(response) : Promise.reject(new Error('Fallo en la carga.')))
        .then(response => response.json())
            
        .then(data => {
        cargarSubElementos(data)
    })
    
        .catch((error) => console.log(`Error: ${error.message}`))
}

const cargarSubElementos = (data) =>{
    sub_elementos.innerHTML =""
    if(data != undefined){
        sub_elementos_descp ="<select name='id_sub_elemento' class='form-control' id='form-sub-elementos'>"        
        for(const e of data){
            sub_elementos_descp+= "<option value="+e.id+">"+e.descripcion+"</option>"
        }
    sub_elementos_descp += "</select>"
    sub_elementos.innerHTML = sub_elementos_descp 
    }
}

buscar_descripcion_origen.addEventListener('change',()=>{

    var selectedOption = buscar_descripcion_origen.value
	const path = ('sql_descripcion_origenes.php?origen=' + selectedOption)

	fetch(path)
	
		.then(response => (response.ok) ? Promise.resolve(response) : Promise.reject(new Error('Fallo en la carga.')))

		.then(response => response.json())
        
		.then(data => {
			cargarChecksOrigenes(data)
		})

	.catch((error) => console.log(`Error: ${error.message}`))
})


const cargarChecksOrigenes = (data) =>{
	const fragment = document.createDocumentFragment()
    checks.innerHTML =""
    if(data != undefined){
        chcks =""
        for(const descripcion of data){
            console.log(descripcion.descripcion)
            const chck = "<input type='radio' name='descripcion_origen' values='"+descripcion.descripcion+"'>"+descripcion.descripcion+"<br> "/*document.createElement('input')
            chck.setAttribute('type','checkbox')
            chck.setAttribute('name',descripcion.descripcion)
            chck.setAttribute('value',descripcion.descripcion)
            chck.textContent = descripcion.descripcion
            console.log(chck.textContent)*/
            //fragment.appendChild(chck)
            chcks += chck
		}
    //checks.append(fragment)
    checks.innerHTML = chcks
	} 
}