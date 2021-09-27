const search = document.getElementById("search");
const allCues = document.getElementsByClassName("cuesAnexo");
const allNros = document.getElementsByClassName("nros");

search.addEventListener('keyup', ()=>{
	value = search.value;
	for (const cue of allCues){
		//Consultamos si encontramos el valor de busqueda
		if(cue.dataset.search != value){
		//Si no lo encontramos debemos ocultarlo
			cue.parentElement.style.display = 'none';
		} else {
		//Si lo encontro debemos ponerlo visible
			cue.parentElement.style.display = 'table-row';
		}
		if(value == ''){
			cue.parentElement.style.display = 'table-row';
		}
	}
	//Si no es un Cue buscamos un Cod.Jurisdiccional
	if(value < 260000000){
		for (const nro of allNros){
			//Consultamos si encontramos el valor de busqueda
			if(nro.dataset.search != value){
			//Si no lo encontramos debemos ocultarlo
				nro.parentElement.style.display = 'none';
			} else {
			//Si lo encontro debemos ponerlo visible
				nro.parentElement.style.display = 'table-row';
			}
			if(value == ''){
				nro.parentElement.style.display = 'table-row';
			}
		}
	}
})