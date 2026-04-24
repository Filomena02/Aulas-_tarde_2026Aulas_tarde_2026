document.addEventListener('DOMContentLoaded',function(){
	const formulario=document.getElementById('form');
	const loader=document.getElementById('loader');
	formulario.addEventListener('submit',function(){
		loader.style.display='block';
	});
});
