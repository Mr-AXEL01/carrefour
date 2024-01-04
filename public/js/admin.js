$(document).ready(function () {
  const URLROOT = "http://localhost/carrefour";

  function draw() {
    $.ajax({
      url: URLROOT + "/admins/display",
      type: "GET",
      success: function (response) {
        console.log(response);
        let data = JSON.parse(response);
        $("#tbody").html("");
        let row = "";
        let element = "";
        data.forEach((e) => {
          row = $("<tr>", { class: "h-10" });
          for (const [key, value] of Object.entries(e)) {
            element = $("<td>", { class: "border-black border-2 rounded-sm" });
            element.html(value);
            row.append(element);
          }
          element = $("<td>", {
            class:
              "h-10 border-black border-2 flex justify-evenly items-center rounded-sm",
          });
          button = $("<button>", { class: "delete-button", type: "button" });
          button.attr("data-id", `${e.id}`);
          value = "DELETE";
          button.html(value);
          element.append(button);

          button = $("<button>", { class: "edit-button", type: "button" });
          button.attr("data-id", `${e.idProduct}`);
          value = "EDIT";
          button.html(value);
          element.append(button);

          row.append(element);

          $("#tbody").append(row);
        });
      },
    });
  }

  draw();

  $(document).on("click", "#add-button", function () {
    $("#submit").val("SUBMIT");
  });

  $(document).on("submit", "#form", function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    if ($("#submit").val() == "SUBMIT") {
      $.ajax({
        url: URLROOT + "/admins/add",
        type: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
          draw();

          $("#id").val("");
          $("#name").val("");
          $("#username").val("");
          $("#email").val("");
          $("#password").val("");
          $("#phone").val("");
          $("#adress").val("");
          $("#phone").val("");
          $("#logo").val("");
        },
      });
    } else {
      $.ajax({
        url: URLROOT + "/admins/edit",
        type: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
          draw();
        },
      });
    }
  });

  $(document).on("click", ".edit-button", function () {
    let id = $(this).data("id");
    $.ajax({
      url: URLROOT + "/admins/get/" + id,
      type: "GET",
      success: function (response) {
        let data = JSON.parse(response);
        $("#submit").val("EDIT");

        $("#id").val("");
        $("#name").val("");
        $("#username").val("");
        $("#email").val("");
        $("#password").val("");
        $("#phone").val("");
        $("#adress").val("");
        $("#phone").val("");
        $("#logo").val("");
      },
    });
  });

  $(document).on("click", ".delete-button", function () {
    let id = $(this).data("id");
    $.ajax({
      url: URLROOT + "/admins/remove/" + id,
      type: "GET",
      success: function (response) {
        draw();
      },
    });
  });
});
