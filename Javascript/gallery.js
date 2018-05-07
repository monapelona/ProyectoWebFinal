//Vanessa Martínez Romero 160300006
//Jorge David Oregón Baltazar 160300117

function showPic (whichpic) {
 if (document.getElementById) {
  document.getElementById('Contenedor').src = whichpic.href;
  if (whichpic.title) {
   document.getElementById('Descripcion').childNodes[0].nodeValue = whichpic.title;
  } else {
   document.getElementById('Descripcion').childNodes[0].nodeValue = whichpic.childNodes[0].nodeValue;
  }
  return false;
 } else {
  return true;
 }
}
function validar(){

if (document.form.password.value=='ucaribe' && document.form.login.value=='vanejorge')
    { 

        document.form.submit(); 

    } 

    else{ 

         alert("Por favor ingrese: nombre de usuario y contraseña correctos."); 

    } 

}
function myFunction() {
    alert('¡Gracias por visitarnos!');
}

function goBack() {
    window.history.back()
}