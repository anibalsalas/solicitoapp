function validarFormulario(event) {
  event.preventDefault();
  var nombres = document.getElementById("nombres").value;
  var nom_area = document.getElementById("nom_area").value;

  if (nombres.trim() === "") {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'El campo del nombre es obligatorio!',
    })
  } else if (nom_area.trim() === "") {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'El Nombre del área es obligatorio!',
    })
  } else {
    event.target.submit();
  }
}