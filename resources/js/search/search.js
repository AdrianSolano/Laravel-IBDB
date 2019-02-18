document.addEventListener('DOMContentLoaded',function()
{   
    let inputSearch = document.getElementById('form');
    inputSearch.addEventListener('submit',function(event){
        event.preventDefault();
        obtenerLibrosAjax();
    });
});

function obtenerLibrosAjax()
{
    $('#librosMostrar').on('submit', function (event) {
        axios.post('/buscarAjax', {
           busqueda: $("#inputBusqueda").val()
        })
        .then(function(response){
            response.getElementById("#librosMostrar");
        })
        .catch(function (error) {
           console.log(error);
        });
      })
}