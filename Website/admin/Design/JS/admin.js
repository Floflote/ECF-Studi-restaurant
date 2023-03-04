// ********** Page Categories **********
// Ajout d'une catégorie

$("#add_category_bttn").click(function () {
  var category_name = $("#category_name_input").val();
  var dataDo = "Add";

  if ($.trim(category_name) == "") {
    $("#required_category_name").css("display", "block");
  } else {
    $.ajax({
      url: "./Conf/Function/categorie-button.php",
      method: "POST",
      data: { category_name: category_name, do: dataDo },
      dataType: "JSON",
      success: function (message) {
        if (message["alert"] == "Attention") {
          swal("Attention", message["message"], "warning").then((value) => {});
        }
        if (message["alert"] == "Valide") {
          swal("Validé", message["message"], "success").then((value) => {
            window.location.replace("Categories.php");
          });
        }
      },
      error: function (xhr, status, error) {
        alert(
          "Une erreur est survenue lors de la requête. Veuillez réessayer."
        );
      },
    });
  }
});

// Suppression d'une catégorie

$("#delete_category_bttn").click(function () {
  var category_id = $(this).data("id");
  var dataDo = "Delete";

  $.ajax({
    url: "./Conf/Function/categorie-button.php",
    method: "POST",
    data: { category_id: category_id, do: dataDo },
    success: function (message) {
      swal("Supprimée", "La catégorie a bien été supprimée !", "success").then(
        (value) => {
          window.location.replace("Categories.php");
        }
      );
    },
    error: function (xhr, status, error) {
      alert("Une erreur est survenue lors de la requête. Veuillez réessayer.");
    },
  });
});
