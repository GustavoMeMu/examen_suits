
const enviar_datos = () => {
    let email = document.getElementById("email").value;
    let password = document.getElementById("loginPassword").value;
    let data = new FormData();
    data.append("email", email)
    data.append("loginPassword", password)
    fetch("app/controller/login.php", {
        method: "POST",
        body: data
    }).then(respuesta => respuesta.json())
        .then(respuesta => {
            if (respuesta[0] == 1) {
                alert(respuesta[1]);
                window.location = "index.php";
            } else {
                alert(respuesta[1]);

            }
            console.log(respuesta);
        })
    //append para añadir elementos
    //.then promesa
    //fetch de envio y recepcion de datos por http y https 
    //URL Direccion externa
    //URI URL pero interna
}
document.getElementById("btn_saludar").addEventListener("click", () => {
    enviar_datos();
});
// $('#btn_saludar').on('click',()=> {

//     enviar_datos();
// });