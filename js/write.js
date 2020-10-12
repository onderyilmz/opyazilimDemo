$(document).ready(function(){
    console.log("JS Func.")
    $("#buton").click(function(){
        console.log("buton");
        //data = $('.formRegister').serialize();
        //alert(data);
        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: $('.formRegister').serialize(),
            success:function (answer){
                $('#sonuc').html(answer);
            }
        })
    });
    /*
    $('.formRegister').click(function (e){
        e.preventDefault();
        var form = $(this);
        var formSeri = form.serialize();
        var formAction = form.attr('action');
        $.ajax({
            method: 'post',
            type: 'json',
            url: 'ajax.php',
            data: $(this).serialize(),
            success: function (data){
                console.log("Başarılı----- "+data);


            }

        })

    });
*/

});