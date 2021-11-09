$(document).ready(function () {
  $("#sbt01").click(function () {
    $("#formCadastrar").attr({
      action: "cadastrar.php",
      method: "POST",
    });
  });
});

$(document).ready(function () {
  $("#sbt02").click(function () {
    $("#formLogar").attr({
      action: "login.php",
      method: "POST",
    });
  });
});
