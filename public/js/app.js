$('.slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$('.product').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});

$('.brand').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});

$('.slider-product-img').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    items: 1,
});


//my js

function increment() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}


function decrement() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value--;
    document.getElementById('number').value = value;
}

function cart() {
    if ($('.cart-nav').hasClass('active')) {
        $('.cart-nav').removeClass('active')
    } else {
        $('.cart-nav').addClass('active')
    }
}


$(document).mouseup(function (e) {
    const container = $('.outsideClick');
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.removeClass('active');
    }
});



function Sidenav(){
    if ($('.sidenav').hasClass('active')){
        $('.sidenav').removeClass('active')
    }else{
        $('.sidenav').addClass('active')
    }
}
