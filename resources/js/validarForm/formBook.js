document.addEventListener('DOMContentLoaded',function(){

  let subBook = document.getElementById('subBook');
  subBook.addEventListener('submit',function(event){
      event.preventDefault();
      crearBookAjax();
  });

/*  let inputTitleBook = document.getElementById('title');
  inputTitleBook.addEventListener('change',function(event){
      validarBook();
  });

  let inputAuthorBook = document.getElementById('author');
  inputAuthorBook.addEventListener('change',function(event){
      validarBook();
  });

  let inputPublisherBook = document.getElementById('publisher');
  inputPublisherBook.addEventListener('change',function(event){
    validarBook();
  });

  let inputDescriptionBook = document.getElementById('description');
  inputDescriptionBook.addEventListener('change',function(event){
    validarBook();
  }); */

});

function crearBookAjax(){
    let datosFormulario = $("#subBook").serialize();
    axios.post('/books/crearLibroAjax',datosFormulario)
    .then(function(response){
        let div = $("#mostrarLibros");
        div.append(response.data)
    }).catch(function () {
        alert("La cagaste amijo");
    });


}

function validarTitleBook(){

  let datosPost = {};
  datosPost[input.title] = input.value;
  axios.post('/books/crearLibroAjax',datosPost)
  .then(function(){
      alert("Buen formulario amigo");
  }).catch(function () {
      alert("La cagaste amijo");
  });

}
