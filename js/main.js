$(document).ready(function(){
    var imgItems = $('.slider li').length;
    var imgPos = 1;

    /* Se crea un ciclo donde se ingresen los circulos de selección para que aparezcan
    los iconos dependiendo de los slides */
    for(i=0;i<imgItems; i++){
        $('.pagination').append('<li><ion-icon name="ellipse-outline"></ion-icon></li>');
    }
    
    $('.slider li').hide();
    $('.slider li:first').show();

    /* Color de el circulo seleccionado*/
    $('.pagination li:first').css({'color':'#2B81C1'});

    /* Ejecucion Click a los slides mediante paginación */
    $('.pagination li').click(pagination);

    /* Cambiará cada ciertos segundos automáticamente (4 segs)*/
    setInterval(function(){
        next();
    },6000);

    /* Funcion de paginación */
    function pagination(){
        var  paginationPos = $(this).index()+1;

        $('.slider li').hide();
        $('.slider li:nth-child('+paginationPos+')').fadeIn();

        $('.pagination li').css({'color':'#B2B2B2'});
        $(this).css({'color':'#2B81C1'});
    }

    /* Funcion de incremento de slider */
    function next(){
        if(imgPos>=imgItems){
            imgPos = 1;
        }else{
            imgPos++;
        }

        $('.pagination li').css({'color':'#B2B2B2'});
        $('.pagination li:nth-child('+imgPos+')').css({'color':'#2B81C1'});

        $('.slider li').hide();
        $('.slider li:nth-child('+imgPos+')').fadeIn();
    }
});