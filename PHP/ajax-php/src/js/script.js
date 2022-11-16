$("#form").submit((e) => {
  e.preventDefault();

  let nome = $("#nome").val();
  let sobrenome = $("#sobrenome").val();
  $.ajax({
    type: "POST",
    url: "src/ajax/ajax.php",
    data: {
      acao: "novo_user",
      nome,
      sobrenome
    }
  }).then((res) => {
    console.log(res);
  });
});

function pegaUsuarios() {
  $.ajax({
    type: "GET",
    url: "src/ajax/pegaUsuarios.php"
  }).then((res) => {
    console.log(res);
  }).done((res) => {
    console.log('res');
  });
}
pegaUsuarios();