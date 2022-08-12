jQuery(document).ready( $ =>{
    $('.menu-principal .menu').slicknav({
        label:'',
        appendTo:'.icon-networks-header'
    });
});

// Slider Logos Clientes
jQuery(document).ready($=>{
  $('.lanube-slider-clientes').slick({
    dots: false,
    infinite: true,
    speed: 200,
    slidesToShow: 4,
    slideToScroll: 1,
    autoplay: true,
  });
});