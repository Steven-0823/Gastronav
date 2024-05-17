const nombre = document.querySelector('#nombre');
const apellido = document.querySelector('#apellidos');
const correo = document.querySelector('#correo');
const telefono = document.querySelector('#telefono');
const mensaje = document.querySelector('#mensaje');
const formulario = document.querySelector('.formulario');

const datosIndex={
    nombre:'',
    apellido:'',
    correo:'',
    telefono:'',
    mensaje:''
}

nombre.addEventListener('input', imprimirDatosIndex);
apellido.addEventListener('input', imprimirDatosIndex);
correo.addEventListener('input', imprimirDatosIndex);
telefono.addEventListener('input', imprimirDatosIndex);
mensaje.addEventListener('input', imprimirDatosIndex);

formulario.addEventListener('submit', (e)=>{
    e.preventDefault();
    const{nombre, apellido, correo, telefono, mensaje} = datosIndex;
    if(nombre === '' || apellido ===''  || correo === '' || telefono === '' || mensaje ===''){
        mensajeIndex('Todos los campos son obligatorios', true);
        return; 
    }
        mensajeIndex('Datos enviados correctamente');
    
});

function imprimirDatosIndex(e){
    datosIndex[e.target.id] = e.target.value;
}


function mensajeIndex(me, error = false){
    const alerta = document.createElement('P');
    alerta.textContent = me;

    if(error){
        alerta.classList.add('error');
    }else{
        alerta.classList.add('correcto');
    }

    formulario.appendChild(alerta);

    setTimeout(()=>{
        alerta.remove()
    }, 2000);
}
