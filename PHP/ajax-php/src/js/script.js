$("#form").submit((e) => {
  e.preventDefault();

  let nome = $("#nome").val();
  let sobrenome = $("#sobrenome").val();
  $.ajax({
    url: "src/ajax/ajax.php",
    type: "POST",
    data: {
      acao: "inserir",
      nome,
      sobrenome
    },
    success: (res) => {
      pegaUsuarios();
      alert(res);
    }
  });
});

$("#atualiza").click(() => {
  pegaUsuarios();
});

function pegaUsuarios() {
  $.ajax({
    url: "src/ajax/ajax.php",
    type: "POST",
    data: {
      acao: "mostrar"
    },
    success: (res) => {
      document.getElementById('container').innerHTML = "";
      Object.entries(res).forEach(item => {
        let objeto = item[1];
        console.log(objeto);
        document.getElementById('container').innerHTML += `<li>${item[1].nome} - ${item[1].sobrenome}</li>`;
      });
    }
  });
}
pegaUsuarios();