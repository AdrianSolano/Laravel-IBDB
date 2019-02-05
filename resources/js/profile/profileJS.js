// document.addEventListener('DOMContentLoaded',function(){
//   let myProfilePill = document.getElementById('myProfilePill');
//   myProfilePill.addEventListener('show',function(event){
//       alert("Se va mostrar la pesta単a" + event.target);
//   });
//
//   let myBooksPill = document.getElementById('myBooksPill');
//   myBooksPill.addEventListener('show',function(event){
//     alert("Se va mostrar la pesta単a" + event.target);
//   });
//
//   let friendsPill = document.getElementById('friendsPill');
//   friendsPill.addEventListener('show',function(event){
//       alert("Se va mostrar la pesta単a" + event.target);
//   });
//
//
// });

$(function() {
    $('#myTabPill a').on('show.bs.tab', function (e) {
        alert(e.target.id);
    })
});
