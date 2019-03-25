

$("#menu-toggle").click(function (e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

function editarPerfil()
{
  $('#Perfil_Modal').modal('show');
}