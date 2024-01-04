


$(document).ready(function() {

    const URLROOT= "http://localhost/carrefour";

    function draw () {
        $.ajax({
            url: URLROOT + "/productOfCart/display",
            type: "GET",
            success: function(response) {
                console.log(response);
                let data = JSON.parse(response);
                $('tbody').html('');
                let row = "";
                let element = "";
                data.forEach(e => {
                    row = $("<tr>", {class: "h-10"});
                    for (const [key, value] of Object.entries(e)) {
                        element = $("<td>", {class: "border-black border-2 rounded-sm"});
                        element.html(value);
                        element.appendTo(element);
                    }
                    element = $("<td>", {class: "h-10 border-black border-2 flex justify-evenly items-center rounded-sm"});
                    button = $("<button>", {class: "delete-button" , type: "button"});
                    button.attr('data-id', `${e.id}`);
                    value = "DELETE";
                    button.html(value);
                    element.appendTo(button);

                    button = $("<button>", {class: "edit-button", type: "button"});
                    button.attr('data-id', `${e.id}`);
                    value = "EDIT";
                    button.html(value);
                    element.append(button);

                    row.append(element);

                    $('tbody').append(row);
                });

            }
        });
    }

    draw();
    
});