$(document).ready(function(){

   

        // function draw(){
        //     $.ajax({
        //         url: URLROOT + '/Clients/display',
        //         type: 'GET',
        //         success: function(response){
        //             console.log(response);
        //             let data = JSON.parse(response);
        //             $('tbody').html('');
        //             let row = "";
        //             let element = "";
        //             data.forEach(e => {
        //                 row = $("<tr>", {class: "h-10"});
        //                 for (const [key, value] of Object.entries(e)) {
        //                     element = $("<td>", {class: "border-black border-2 rounded-sm"});
        //                     element.html(value);
        //                     row.append(element);
        //                 }
        //                 element = $("<td>", {class: "h-10 border-black border-2 flex justify-evenly items-center rounded-sm"});
        //                 button = $("<button>", {class: "delete-button bg-blue-500 text-white w-[35px] h-[35px] rounded-md", type: "button"});
        //                 button.attr('data-idClient', `${e.idClient}`);
        //                 value = $("<i>", {class:"fa-solid fa-trash"});
        //                 button.html(value);
        //                 element.append(button);

        //                 button = $("<button>", {class: "edit-button", type: "button"});
        //                 button.attr('data-id', `${e.idProduct}`);
        //                 value = "EDIT";
        //                 button.html(value);
        //                 element.append(button);

        //                 row.append(element);

        //                 $('tbody').append(row);
        //             });
        
        //         }
        //     });
        // }

        // draw();

    $(document).on('click', '#add-button', function(){
        $('#submit').val('SUBMIT');
    });

    $(document).on('submit', '#form', function(e){
        e.preventDefault();
        let formData = new FormData(this);
        
        $.ajax({
            url: URLROOT + '/clients/add',
            type: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData:false,
            success: function(response){

                // window.location.replace(URLROOT + '/home');
                // console.log(response);
            }
        });

        $.ajax({
            url: URLROOT + '/login/logout',
            type: 'GET',
            success: function(response){
                // window.location.replace(URLROOT + "/home");
                // console.log(response);
            }
        });

        $.ajax({
            url: URLROOT + '/login/login',
            type: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData:false,
            success: function(response){
                // window.location.replace(URLROOT + "/home");
                console.log(response);
            }
        });
        
    });

    // $(document).on('click', '.edit-button', function(){
    //     let id = $(this).data('id');
    //     $.ajax({
    //         url: URLROOT + '/products/get/' + id,
    //         type: 'GET',
    //         success: function(response){
    //             let data = JSON.parse(response);
    //             $('#submit').val('EDIT');

    //             $('#id').val(data.id);
    //             $('#name').val(data.name);
    //             $('#address').val(data.address);

    //         }
    //     });
    // });


})