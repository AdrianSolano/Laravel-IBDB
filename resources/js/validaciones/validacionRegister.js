document.addEventListener('DOMContentLoaded',function(){

  /* let inputName = document.getElementById('name');
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
  let inputEmail = document.getElementById('email');
  inputEmail.addEventListener('change',function(event){
    axios.post('/register/validation', {
        name: inputEmail.value
    }).then(function(response){
            gestionarErrores($("#email"),response.data.name)
        })
        .catch(function (error) {
            console.log(error);
        });
  }); */

});

function gestionarErrores(input,errores){
    var hayErrores = false;
    let divErrores = input.next();
    divErrores.html("");
    input.removeClass("bg-success bg-danger");
    if (errores.length === 0) {
        input.addClass("bg-success");
    } else {
        hayErrores = true;
        input.addClass("bg-danger");
        for (let error of errores) {
            divErrores.append("<div>"+error+"</div>");
        }
    }
    input.parent().next().remove();
    return hayErrores;
}
