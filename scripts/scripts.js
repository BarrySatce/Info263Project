$(".green").css("background-color", "green");

$(document).ready(function () {

})



//Submits Form and loads it in page using AJAX
$("#searchForm").submit(function(e){
    var value = $("#receiptID").val();
    if (value){
        $.post(
            'tables.php',
            $(this).serialize(),
            function( data, textStatus, jQxhr ){
                $('#requestData').html( data );
            },
        )
            .fail(function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            });

        e.preventDefault();
    }
});