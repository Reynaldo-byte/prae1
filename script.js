const name=['','titulo','intro','id_problema','justificacion','proposito','metas','marco','diseno','recursos','cronograma','resultados','conclusiones','recomendaciones','biblio']

function mostrar(id) {
	for (var i=1;i<=name.length-1;i++){
		if (i!=id) {
			document.getElementById(name[i]).setAttribute('hidden','')
			document.getElementById(name[i]+'1').setAttribute('hidden','')
		}
		else{
			document.getElementById(name[id]).removeAttribute('hidden')
			document.getElementById(name[id]+'1').removeAttribute('hidden')
		}
	}
}
