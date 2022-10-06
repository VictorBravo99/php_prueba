function main(busqueda) {

    fetch("./Controller/municipio.php?op=Listar",  {
        method: "POST",
        body: busqueda,
      })
    .then((response) => response.json())
    .then((response) => {

     municipio = response.map((x)=> { let municipio="<p class='ms-2 btn btn-primary' onclick='choice("+x.id+")'>"+x.nombre+"</p>" 
      return municipio.toString()}).join("")
      cuadro.innerHTML= municipio;
    });

}

main()

function choice(id){
  fetch("./Controller/municipio.php?op=Choice",{
    method:'POST', 
    body:id}).then((response)=>response.json()).then((response)=>{
      buscar.value= response[0].nombre
    })
}

buscar.addEventListener("keyup", () => {
    const valor = buscar.value;
    if (valor == "") {
      main();
    } else {
      main(valor);
    }
  });