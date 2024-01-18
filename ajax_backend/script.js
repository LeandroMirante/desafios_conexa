$(document).ready(function () {
  var formData = new FormData(document.getElementById("meuFormulario"));
  $("#verificar").on("click", (e) => {
    e.preventDefault();

    if ($("#numVoo").val() == "" || $("#data").val() == "") {
      $("#informacoes").html("<h4>Insira o número do voo e uma data</h4>");
    } else {
      let formData = $("form").serialize();

      $.ajax({
        type: "POST",
        url: "main.php",
        data: formData,
        success: function (response) {
          let obj = JSON.parse(response);
          console.log(obj);
          console.log(obj["cadeirasOcupadas"].length);
          $("#informacoes").load("informacoes.html", () => {
            $("#numeroVoo").html(`${obj["numeroVoo"]}`);
            $("#numCadeira").html("1");
            $("#dataa").html(
              `${obj["dataVoo"]["dia"]}/${obj["dataVoo"]["mes"]}/${obj["dataVoo"]["ano"]}`
            );
            $("#vagas").html(100 - obj["cadeirasOcupadas"].length);
          });
        },
        error: function (error) {
          console.log(error);
        },
      });
    }
  });

  $("#resetar").on("click", (e) => {
    e.preventDefault();
    document.getElementById("numVoo").value = "";
    document.getElementById("data").value = "";
  });
});
