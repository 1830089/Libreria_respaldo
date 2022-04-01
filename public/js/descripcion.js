const contador= document.getElementById("valor");

const incrementar= document.getElementById("aumentar");

const decrementar= document.getElementById("disminuir");

const valor= document.getElementById('cantidad_producto');

let numero=0;

incrementar.addEventListener("click", ()=>{
    if(numero<cantidad){

    numero++;
    contador.innerHTML=numero;
    console.log(cantidad);
    valor.setAttribute('value',numero);
    }else{

    }
});

decrementar.addEventListener("click", ()=>{
    if(numero===0){
        
    }else{
        numero--;
        contador.innerHTML=numero;
        valor.setAttribute('value',numero);
    }
});