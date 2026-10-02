function validar(){

    var nombre = document.registros.nombreUsuario.value;
    var email = document.registros.emailUsuario.value;
    var genero = document.registros.generoUsuario.value;

    const datos = {nombre:nombre,email:email,genero:genero};
     
     const text = JSON.stringify(datos);

     fetch("registros.php", {
             method: "POST",
             headers: {"Content-Type": "application/json"},
             body: text
        })
            .then(response => response.text())
            .then(respuesta => {
                var res = JSON.parse(respuesta);

                if(res['res'] === 'ok') {
                    alert(res['message']);
                }else{
                  alert(res['message']);   
                }
            })
            .catch(error => {
              alert("Error AJAX:", error);
             });
}


function buscar(){
    var email = document.buscador.emailUsuario.value;
    const datos = {email:email};
     
     const text = JSON.stringify(datos);
   
     fetch("buscador.php", {
             method: "POST",
             headers: {"Content-Type": "application/json"},
             body: text
        })
            .then(response => response.text())
            .then(respuesta => {
                var res = JSON.parse(respuesta);

                if(res['res'] === 'ok') {
                    document.getElementById("nombreUsuario").innerHTML = res['nombre'];
                    document.getElementById("emailUser").innerHTML = res['email'];
                    document.getElementById("generoUsuario").innerHTML = res['genero'];
                    const elemento = document.querySelector('.datosBuscados');
                    elemento.classList.remove('d-none');
                }else{
                  alert(res['message']);   
                }
            })
            .catch(error => {
              alert("Error AJAX:", error);
             });
}