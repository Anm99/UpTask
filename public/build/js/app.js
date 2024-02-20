const mobileMenuBtn=document.querySelector("#mobile-menu");
const cerrarMenuBtn=document.querySelector("#cerrar-menu");
const sidebar=document.querySelector(".sidebar");

if(mobileMenuBtn){
    mobileMenuBtn.addEventListener('click',function(){
        sidebar.classList.add('mostrar');
    });
};

if(cerrarMenuBtn){
    cerrarMenuBtn.addEventListener('click',function(){
        sidebar.classList.add('ocultar');
        setTimeout(() => {
            sidebar.classList.remove('mostrar');
            sidebar.classList.remove('ocultar');
        }, 500);
    });
};


// elimina la clase de mostrar en un tamaño de tablet o mayores

const anchoPantalla = documen.body.clientWidth;

window.addEventListener('resize' , function(){
    const anchoPantalla = documen.body.clientWidth;
    if (anchoPantalla >= 768) {
        sidebar.classList.remove('mostrar')    
    }
}); 


