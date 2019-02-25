document.addEventListener('DOMContentLoaded',function()
{   
    let inputSearch = document.getElementById('botonSubmit');
    inputSearch.addEventListener('submit',function(event){
        event.preventDefault();
        editAjax();
    });
    
});
function editAjax(){

    let editForm = $("#botonSubmit").serialize();
    axios.put('/books/editAjax',editForm)
    .then(function(response){
        console.log(response);
        alert("Editus");
    }).catch(function (error) {
        console.log(error);
        alert("Error");
    });
  
  }