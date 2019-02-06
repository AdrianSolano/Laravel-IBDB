document.addEventListener('DOMContentLoaded',function(){

  let inputName = document.getElementById('name');
  inputName.addEventListener('change',function(event){
    axios.post('/register/validation', {
        name: inputName.value
    }).then(function(response){
            gestionarErrores($("#name"),response.data.name)
        })
        .catch(function (error) {
            console.log(error);
        });
  });

});
