document.addEventListener('DOMContentLoaded',function(){
    let input = document.getElementById('title');
    input.addEventListener('change',function(event){
        alert(`El valor del input es: ${event.target.value} `);
    });
})
