documente.addEventeListener('DOMContentLoaded',function(){
const formulario=getElementById('form');
const loader=document.getElementById('loader');
formulario.addEventListener('submit', function(){loader.style.display='block';
	});
});