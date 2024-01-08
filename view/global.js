$(document).ready(function (){
    $("#passview").click(function (){
        if($(this).hasClass("fa-eye"))
        {
            $(this).removeClass("fa-eye");
            $(this).addClass("fa-eye-slash");
            $("#password").attr("type","text");
        }
        else
        {
            $(this).removeClass("fa-eye-slash");
            $(this).addClass("fa-eye");
            $("#password").attr("type","password");
        }
    });
    $('[name="login"]').click(function (){
        login();
    });
    $('#kayitolbuton').click(function (){
        register();
    });
    $('[name="dogrulamasend"]').click(function (){
        mailControler();
    });
});
function login() {
    $.ajax({
        url: "hash/login",
        type: "POST",
        data: $("#loginform").serialize(),
        success: function (data)
        {
            var response = JSON.parse(data);
                setTimeout(function (){
                    Swal.fire({
                        title: response.title,
                        text: response.text,
                        icon: response.statu,
                        confirmButtonText: "Tamam"
                    });
                },1500);
                if(response.statu==="success") {
                    setTimeout(function () {
                        window.location.href = "index";
                    }, 3000);
                }
        }
    });
}
function register(){
    $.ajax({
        url: "hash/register",
        type: "POST",
        data: $("#formkayitol").serialize(),
        success: function (data)
        {
            console.log(data);
            var response = JSON.parse(data);
                setTimeout(function (){
                    Swal.fire({
                        title: response.title,
                        text: response.text,
                        icon: response.statu,
                        confirmButtonText: "Tamam"
                    });
                },1500);
               if(response.statu==="success"){
                   setTimeout(function (){
                       window.location.href="giris";
                   },3000);
               }
        }
    });
}
function mailControler()
{
    var mail = $('[name="dogrulamakodu"]').val();
    $.ajax({
        url: "hash/mailcontroller",
        type: "POST",
        data: $('#formcodcontrol').serialize(),
        success: function (data)
        {
            console.log(data);
            var response = JSON.parse(data);
            setTimeout(function (){
                Swal.fire({
                    title: response.title,
                    text: response.text,
                    icon: response.statu,
                    confirmButtonText: "Tamam"
                });
                if(response.statu==="success")
                {
                    window.location.href="giris";
                }
            },2000);
        }
    });
}
