const usuario = document.querySelector('#usuario');
const contraseña = document.querySelector('#contraseña');
const formulario = document.querySelector('.container');
const btFormulario = document.querySelector('.boton_formulario');

const datos={
    usuario:'',
    constraseña:''
}

usuario.addEventListener('input', imprimirDatos);
contraseña.addEventListener('input', imprimirDatos);

btFormulario.addEventListener('click', (e)=>{
    e.preventDefault();
    const {usuario, contraseña} = datos;

    if(usuario === '' || contraseña === ''){
        mensaje('Todos los campos son obligatorios');
        return;
    }

    location.href = '/resources/views/html/index.blade.html';

});

function imprimirDatos(e){
    datos[e.target.id] = e.target.value;
    
}

function mensaje(m){
    const validar = document.createElement('P');
    validar.textContent = m;
    validar.classList.add('error');
    formulario.appendChild(validar);

    setTimeout(()=>{
        validar.remove()
    },2000);
}
