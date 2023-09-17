
/*ESCUCHAR EVENTO DE LA PAGINA "paginaGENERAL" */
const imgUser = document.querySelector('#ImagenUsuario')
imgUser.addEventListener('mouseover', function() {Cambiar_Img(this,'on')} )
imgUser.addEventListener('mouseout', function() {Cambiar_Img(this,'off')} )