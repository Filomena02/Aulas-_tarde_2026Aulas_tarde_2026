document.addEventListener('DOMContentLoaded',function(){
	const formulario=document.getElementById('form');
	const loader=document.getElementById('loader');
	formulario.addEventListener('submit',function(){
		loader.style.display='block';
	});

	const telefone=document.getElementById('telefone');
	if (telefone) {
		telefone.addEventListener('input',function(e){
			let valor=e.target.value.replace(/\D/g,'');
			valor= valor.substring(0,11);
			let numeroformatado='';

			if (valor.length > 0) numeroformatado += '(' + valor.substring(0, 2);
			if (valor.length >= 3) numeroformatado += ')';
			if (valor.length > 10) {
				numeroformatado += valor.substring(2, 7);
				if (valor.length >= 8) {
					numeroformatado += '-' + valor.substring(7, 11);
				}
			}else if (valor.length > 6) {
				numeroformatado += valor.substring(2, 6);
				numeroformatado += '-' + valor.substring(6, 10);
			}else if (valor.length > 2) {
				numeroformatado += valor.substring(2);
			}

			e.target.value=numeroformatado;

		});
	}

});
