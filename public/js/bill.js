


$(document).ready(function(){

    const URLROOT = "http:localhost/carrefour";



    function draw(){
        $.ajax({
            url: URLROOT + '/bills/display',
            type: 'GET',
            success: function(response){
                console.log(response);
                let data = JSON.parse(response);
                $('tbody').html('');
                let row = "";
                let element = "";
                data.array.forEach(element => {
                    row = $("<tr>",{class: h-10});
                    for (const [key, value] of Object.entries(element)) {
                        element = $("<td>", {class: "border-black border-2 rounded-sm"});
                        element.html(value);
                        row.append(element);
                    }
                });

            }
        

        })
    }
)}
