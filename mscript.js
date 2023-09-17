// funcion para cambair la imagen
function Cambiar_Img(ImagenUser,on_or_off,){
    if(on_or_off == 'on'){
        ImagenUser.src = 'fotoperfil.avif'
    }else{
        ImagenUser.src = 'usuarioIMG.png'
    }
}
window.onload = function(){
    var par1 = localStorage.getItem('#Nemp')
}
// funcion para cambiar texto, nombrede la empresa & nombre del encargado
window.onload = function() {
  var texto1 = localStorage.getItem('texto1');
  var texto2 = localStorage.getItem('texto2');
  if (texto1) {
    document.getElementById('NomEmp').innerHTML = 'Empresa: '+ texto1;
  }
  if (texto2) {
    document.getElementById('NomEnc').innerHTML ='Encargado:'+ texto2;
  }
}
