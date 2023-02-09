function peticionGet(peticion) {
    xmlhttp = new XMLHttpRequest();

    //alert(filtro);
    //var idAsignatura = id;

    var url = "cruds/tablas.php";
    xmlhttp.open('GET', url+"?peticion="+peticion, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function peticionActAsig(id, titulo, descripcion) {
    xmlhttp = new XMLHttpRequest();

    //alert(filtro);
    //var idAsignatura = id;

    var url = "cruds/actualizarAsignatura.php";
    xmlhttp.open('GET', url+"?ID="+id, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function actualizarEnAsignatura() {
    xmlhttp = new XMLHttpRequest();

    //alert(filtro);
    //var idAsignatura = id;
    let id = document.getElementById('ID').value;
    let titulo = document.getElementById('Titulo').value;
    let descripcion = document.getElementById('Descripcion').value;
    var url = "cruds/actualizarEnAsignatura.php";
    xmlhttp.open('GET', url+"?ID="+id+"&Titulo="+titulo+"&Descripcion="+descripcion, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function peticionElimAsig(id) {
    xmlhttp = new XMLHttpRequest();

    //alert(filtro);
    //var idAsignatura = id;

    var url = "cruds/eliminarAsignatura.php";
    xmlhttp.open('GET', url+"?ID="+id, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function eliminarAsignatura() {
    xmlhttp = new XMLHttpRequest();

    //alert(filtro);
    //var idAsignatura = id;
    let id = document.getElementById('ID').value;
    var url = "cruds/eliminarAsignatura.php";
    xmlhttp.open('GET', url+"?ID="+id, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function peticionRegAsis() {
    xmlhttp = new XMLHttpRequest();
    var url = "cruds/insertarasignatura.php";
    xmlhttp.open('GET', url, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function insertarEnAsignatura() {
    xmlhttp = new XMLHttpRequest();
    let titulo = document.getElementById('CTTitulo').value;
    let descripcion = document.getElementById('CTDescripcion').value;
    alert(titulo,titulo);
    var url = "cruds/insertarEnAsignaturas.php";
    xmlhttp.open('GET', url+"?CTTitulo="+titulo+"&CTDescripcion="+descripcion, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

/////////////////////////////
//FUNCIONES PARA ELIMINAR///

function peticionRegTem() {
    xmlhttp = new XMLHttpRequest();
    var url = "cruds/insertarTema.php";
    xmlhttp.open('GET', url, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function insertarEnTema() {
    xmlhttp = new XMLHttpRequest();
    let asignatura = document.getElementById('CBAsignatura').value;
    let tema = document.getElementById('tema').value;
    let descripcion = document.getElementById('descripcionT').value;
    var url = "cruds/insertarEnTema.php";
    xmlhttp.open('GET', url+"?CBAsignatura="+asignatura+"&tema="+tema+"&descripcionT="+descripcion, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function peticionActTema(id) {
    xmlhttp = new XMLHttpRequest();

    //alert(filtro);
    //var idAsignatura = id;

    var url = "cruds/actualizarTema.php";
    xmlhttp.open('GET', url+"?IDtema="+id, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function actualizarEnTema() {
    xmlhttp = new XMLHttpRequest();

    //alert(filtro);
    //var idAsignatura = id;
    let id = document.getElementById('id').value;
    let asignatura = document.getElementById('CBAsignatura').value;
    let tema = document.getElementById('tema').value;
    let descripcion = document.getElementById('descripcionT').value;
    var url = "cruds/actualizarEnTema.php";
    xmlhttp.open('GET', url+"?id="+id+"&CBAsignatura="+asignatura+"&tema="+tema+"&descripcionT="+descripcion, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function elimTema(id) {
    xmlhttp = new XMLHttpRequest();

    //alert(filtro);
    //var idAsignatura = id;
    //let id = document.getElementById('ID').value;
    var url = "cruds/eliminarTema.php";
    xmlhttp.open('GET', url+"?IDtema="+id, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

///////////////////////////////
//Ejercicios///////////////////
///////////////////////////////

function peticionRegEjercicio() {
    xmlhttp = new XMLHttpRequest();
    var url = "cruds/insertarEjercicio.php";
    xmlhttp.open('GET', url, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function insertarEnEjercicio() {
    xmlhttp = new XMLHttpRequest();
//    $image = $_FILES['imagen']['tmp_name'];
//    $imageName = $_FILES['imagen']['name'];
//    $tamanioImage = $_FILES['imagen']['size'];
//    $imagenSubida = fopen($_FILES['imagen']['tmp_name']);
//    $binarioImagen = fread($imagenSubida, $tamanioImage);
    let tema = document.getElementById('CBTema').value;
    let tipo = document.getElementById('CBTipo').value;
    let descripcion = document.getElementById('descripcion').value;
    let respuesta = document.getElementById('respuesta').value;
    let ejercicio = document.getElementById('ejercicio').value;
    var desc2=descripcion.split("\n").join("<br>");
    var res2=respuesta.split("\n").join("<br>");
    var ejer2=ejercicio.split("\n").join("<br>");
    var url = "cruds/insertarEnEjercicio.php";
    xmlhttp.open('GET', url+"?CBTema="+tema+"&CBTipo="+tipo+"&descripcion="+desc2+"&respuesta="+res2+"&ejercicio="+ejer2, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function peticionActEjercicio(id) {
    xmlhttp = new XMLHttpRequest();

    //alert(filtro);
    //var idAsignatura = id;

    var url = "cruds/actualizarEjercicio.php";
    xmlhttp.open('GET', url+"?id="+id, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function actualizarEnEjercicio() {
    xmlhttp = new XMLHttpRequest();

    //alert(filtro);
    //var idAsignatura = id;
    let id = document.getElementById('id').value;
    let tema = document.getElementById('CBTema').value;
    let tipo = document.getElementById('CBTipo').value;
    let descripcion = document.getElementById('descripcion').value;
    let respuesta = document.getElementById('respuesta').value;
    let ejercicio = document.getElementById('ejercicio').value;
    //alert(descripcion);
    var desc2=descripcion.split("\n").join("<br>");
    var res2=respuesta.split("\n").join("<br>");
    var ejer2=ejercicio.split("\n").join("<br>");
    //var desc3 = desc2.replace("¡","\n");
    //alert(res2);
    var url = "cruds/actualizarEnEjercicio.php";
    xmlhttp.open('GET', url+"?id="+id+"&CBTema="+tema+"&CBTipo="+tipo+"&descripcion="+desc2+"&respuesta="+res2+"&ejercicio="+ejer2, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function elimEjercicio(id) {
    xmlhttp = new XMLHttpRequest();

    //alert(filtro);
    //var idAsignatura = id;
    //let id = document.getElementById('ID').value;
    var url = "cruds/eliminarEjercicio.php";
    xmlhttp.open('GET', url+"?IDtema="+id, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

///////////////////////////////
/////////USUARIOS//////////////
//////////////////////////////

function peticionRegUsuario() {
    xmlhttp = new XMLHttpRequest();
    var url = "cruds/insertarUsuario.php";
    xmlhttp.open('GET', url, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function insertarEnUsuario() {
    xmlhttp = new XMLHttpRequest();
    let nombre = document.getElementById('txtnombre').value;
    let usuario = document.getElementById('txtusuario').value;
    let contrasenna = document.getElementById('txtcontrasenna').value;
    let codigo = document.getElementById('txtcodigo').value;
    let tipousuario = document.getElementById('CBTipo').value;

    var url = "cruds/insertarEnUsuario.php";

    xmlhttp.open('GET', url+"?nombre="+nombre+"&usuario="+usuario+"&contrasenna="+contrasenna+"&codigo="+codigo+"&tipousuario="+tipousuario, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function peticionActUsuario(id) {
    xmlhttp = new XMLHttpRequest();

    var url = "cruds/actualizarUsuario.php";
    xmlhttp.open('GET', url+"?id="+id, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function actualizarEnUsuario() {
    xmlhttp = new XMLHttpRequest();

    //alert(filtro);
    //var idAsignatura = id;
    let id = document.getElementById('id').value;
    let nombre = document.getElementById('txtnombre').value;
    let usuario = document.getElementById('txtusuario').value;
    let contrasenna = document.getElementById('txtcontrasenna').value;
    let codigo = document.getElementById('txtcodigo').value;
    let tipousuario = document.getElementById('CBTipo').value;
    

    var url = "cruds/actualizarEnUsuario.php";
    xmlhttp.open('GET', url+"?id="+id+"&nombre="+nombre+"&usuario="+usuario+"&contrasenna="+contrasenna+"&codigo="+codigo+"&tipousuario="+tipousuario, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}

function elimUsuario(id) {
    xmlhttp = new XMLHttpRequest();

    var url = "cruds/eliminarUsuario.php";
    xmlhttp.open('GET', url+"?id="+id, true);
    xmlhttp.send(null);
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4) {//estado Listo!
            if (xmlhttp.status == 200) {//Recarga exitosa
                document.getElementById('divTema').innerHTML = xmlhttp.responseText;
            } else {
                alert("Error ->" + xmlhttp.responseText);
            }
        }
    };
}