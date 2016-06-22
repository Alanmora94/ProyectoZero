function Login(){

    $.ajax({
        type:"POST",
        url:"admin.php",
        dataType:'html',
        data:{accion : 'FormLogin'}

    })
    .done(function (resultado){

        $("#principal").html(resultado);
    })
    .fail(function (a, b, c){
        alert(a.responseText + "  " + b + "  " + c);
    });
}

function Logeo(){

    var nombre = $("#nombre").val();
    var mail = $("#mail").val();
    var clave = $("#clave").val();
    var recordar = $("#recordarme").is(":checked");

    $.ajax({
        type:"POST",
        url:"sesion/LogIn.php",
        data:{nombre : nombre,
              mail : mail,
              clave : clave,
              recordar : recordar}

    })
    .done(function (resultado){

         $("#user").html(resultado);
    });
}

function RevisarCookie(){

    $.ajax({
        type:"POST",
        url:"sesion/LogIn.php",
        data:{accion : "inicio"}
    })
    .done(function (resultado){

        $("#user").html(resultado);
    });
}


function Deslogeo(){

    $.ajax({
        type:"POST",
        url:"sesion/LogOut.php"
        })
    .done(function (resultado){

         $("#user").html(resultado);
        location.reload(true);
    });
}


