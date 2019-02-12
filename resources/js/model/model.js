document.addEventListener('DOMContentLoaded',function(){

  // alertaModel();

  eliminarBookAjax();
});


function alertaModel(){
  $("form[data-accion='deletus']").on('submit',function(event){
    event.preventDefault()
    alert('hola');
  })
};
function eliminarBookAjax(){
    let datosFormulario = $("deletus").serialize();
    axios.post('/books/eliminarBookAjax',datosFormulario)
    .then(function(response){
      alert("deletus");
    }).catch(function () {
        alert("Error");
    });

}
