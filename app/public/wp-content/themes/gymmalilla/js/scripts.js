jQuery(document).ready( $ =>  {
    $('.site-header .menu-principal .menu').slicknav({
        // label: '', // muestra lo que va entre las '', si no usamos la eqtiqueta carga por defecto MENU
        appendTo: '.site-header',    
    });

    // Agregar Slider

    // if($(listado-testimoniales).length > 0) {
    //     $(".listado-testimoniales").bxSlider( { 
    //         auto: true, 
    //         mode: 'fade',  
    //         pager: true, 
    //         controls: false, 
    //         speed: 1000, 
    //         pause: 5000 } );
    // }
    
     $(".listado-testimoniales").bxSlider( { 
            auto: true, 
            mode: 'fade',  
            pager: true, 
            controls: false, 
            speed: 1000, 
            pause: 5000 } );



  // Mapa de Leaflet
    const lat = document.querySelector('#lat').value,
          lng = document.querySelector('#lng').value,
          direccion = document.querySelector('#direccion').value;


    if(lat && lng && direccion) {
        var map = L.map('mapa').setView([lat, lng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    
        L.marker([lat, lng]).addTo(map)
            .bindPopup(direccion)
            .openPopup();
    }      





});


// Animaciones posicion fija de Scroll
window.onscroll =  () => {
    const scroll = window.scrollY;

    const headerNav = document.querySelector('.barra-navegacion');
    const documentBody = document.querySelector('body');


   // si la cantidad de escroll es mayor a, agregar clase 

    if(scroll > 300) {
        headerNav.classList.add('fixed-top');
         documentBody.classList.add('ft-active');
    } else {
         headerNav.classList.remove('fixed-top');
          documentBody.classList.remove('ft-activo');
    }
}