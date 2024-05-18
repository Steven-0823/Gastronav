const contenedor = document.querySelector('.contenido__main');
const boton = document.querySelectorAll('.btn__lugares');

boton.forEach((punto, i)=>{
    boton[i].addEventListener('click', ()=>{
        let pocision = i;
        let operacion = pocision * -50;

        contenedor.style.transform = `translateX(${operacion}%)`;


    });
});