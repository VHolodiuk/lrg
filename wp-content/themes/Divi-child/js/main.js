
jQuery( document ).ready(function($) {
    jQuery('.header-carousel').owlCarousel({
        dots:false,
        nav:false,
        items:1,
        autoplay:true,
        loop: true,
        autoplayTimeout: 4000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn'
    })
    //animate logo on main
    if ( $('.home-slider-image-wrap').length ){

        setTimeout(() => $('.home-slider-image-wrap img:nth-child(1)').fadeIn(500), 500);
        setTimeout(() => $('.home-slider-image-wrap img:nth-child(2)').fadeIn(500), 800);
        setTimeout(() => $('.home-slider-image-wrap img:nth-child(3)').fadeIn(500), 1100);
        setTimeout(() => $('.home-slider-image-wrap img:nth-child(4)').fadeIn(500), 1300);
        setTimeout(() => $('.arrow-down').fadeIn(1200), 1800);
    }


    //scroll arrow
    $('.arrow-down, .arrow-arrow img:nth-child(4)').on('click', function() {
        if ($('#welcome-section')[0]) {
            scrollToWelcome();
        }
        else{
            let top = $('#not-home-section').offset().top - document.querySelector('header .menu-wrap').clientHeight;
            $('html, body').animate({
                scrollTop: top
            }, 2000);
        }
    });

    //sticky header
    if ($("body").hasClass("front-page") || $("#main-content").hasClass("homepage3")) {
        $(window).scroll(function() {
            let header = $(document).scrollTop();
            let $header = $("header");
            let $arrowDown = $('.arrow-down');
            let headerHeight;

            if (jQuery(window).width() > 991) {
                headerHeight = $header.outerHeight() - 450;
            }
            else {
                headerHeight = $header.outerHeight() -  50;
            }


            if (header > headerHeight) {
                $header.addClass("fixed");
                $arrowDown.hide();
            } else {
                $header.removeClass("fixed");
                $arrowDown.show();
            }

            //hide header on foooter
            let windowHeidght = $(document).outerHeight();
            let footerHeight = $('#main-footer').outerHeight();
            let heightWithoultFooter = windowHeidght - footerHeight - 250;
            if ( header > heightWithoultFooter){
                $("header").addClass('hide');
            } else{
                $("header").removeClass('hide');
            }

        });
    } else {
        $(window).scroll(function() {
            let header = $(document).scrollTop();
            let headerHeight = $("header").outerHeight();
            if (header > headerHeight) {
                $("header").addClass("sticty-bg");
            } else {
                $("header").removeClass("sticty-bg");
            }
            //hide header on foooter
            let windowHeidght = $(document).outerHeight();
            let footerHeight = $('#main-footer').outerHeight();
            let heightWithoultFooter = windowHeidght - footerHeight - 250;
            if ( header > heightWithoultFooter){
                $("header").addClass('hide');
            } else{
                $("header").removeClass('hide');
            }
        });
    }

    //paralax

    // $(window).scroll(function() {
    //     let offsetDoc = $(document).scrollTop();
    //     let offsetImg = $('.parents-paralax .et_pb_parallax_css').offset().top;
    //     let offsetImg2 = $('.lascalas-mother .et_pb_parallax_css').offset().top;
    //
    //     if (offsetDoc  > (offsetImg + 160) ) {
    //         let differenceOffset = (offsetDoc - offsetImg) / 3;
    //
    //         $('.parents-paralax .et_pb_parallax_css').css('background-position', 'center ' + -differenceOffset + 'px');
    //     } else {
    //         $('.parents-paralax .et_pb_parallax_css').css('background-position', 'center ');
    //     }
    //
    //     if (offsetDoc  > (offsetImg2 + 160) ) {
    //         let differenceOffsetTwo = (offsetDoc - offsetImg2) / 3;
    //         $('.lascalas-mother .et_pb_parallax_css').css('background-position', 'center ' + -differenceOffsetTwo + 'px');
    //     } else {
    //         $('.lascalas-mother .et_pb_parallax_css').css('background-position', 'center ');
    //     }
    // });








    $('.menu-icon-link').on('click', function() {
        $('.top-menu').toggleClass('show');
        $('body').addClass('no-scroll');
        $('.close-menu').show();
    });
    $('.close-menu').on('click', function() {
        $('.top-menu').removeClass('show');
        $('body').removeClass('no-scroll');
        $('.close-menu').hide();

    });

    $("#dateYear").html((new Date).getFullYear());

    //accordion
    $('.toggle-accordion').on('click', function() {
        // let src = (image.attr('src') === templateUrl+'/assets/img/accordion-plus.png')
        //     ? templateUrl+'/assets/img/accordion-minus.png'
        //     : templateUrl+'/assets/img/accordion-plus.png';
        //image.attr('src', src);
        if ($(this).parent().hasClass('open')) {
            //$(this).attr('src', templateUrl+'/assets/img/accordion-plus.png');
            $(this).parent().removeClass('open');
            $(this).parent().siblings('.accordion-content-wrap').slideUp(500);
        } else {
            //$('.toggle-accordion').attr('src', templateUrl+'/assets/img/accordion-plus.png');
            //$(this).attr('src' , templateUrl+'/assets/img/accordion-minus.png');
            $('.accordion-title-wrap').removeClass('open');
            $(this).parent().addClass('open');
            $('.accordion-content-wrap').slideUp(500);
            $(this).parent().siblings('.accordion-content-wrap').slideDown(500);
        }
    });

    $('.top-menu').on('click', function () {
        scrollToHash();
    });

    $('.main-menu-list').mouseenter(function () {
        removeHighlightFromMenuItems();
    });
    $('.main-menu-list').mouseleave(function () {
        highlightCurrentPageItemWithHash();
    });


   //joins us forms
    document.addEventListener( 'wpcf7mailsent', function( event ) {
                $('.join-us-form .wpcf7-submit').addClass('added');
                $('.join-us-form .wpcf7-submit').attr('disabled','disabled');
                $('.join-us-form .wpcf7-submit').val('Thank You!');
            setTimeout(function() {
                $('.join-us-form .wpcf7-submit').removeClass('added');
                $('.join-us-form .wpcf7-submit').removeAttr('disabled');
                $('.join-us-form .wpcf7-submit').val('Submit');
            }, 5500);

    }, false )

    //send email conttact

        $('.keep-in-touch-radio li.choice-1 label').on('click', function () {
            $('.notification-email input').val('firemarlton@gmail.com, lascalasfire@gmail.com');
        });
        $('.keep-in-touch-radio li.choice-2 label').on('click', function () {
            $('.notification-email input').val('fireglassboro@gmail.com, lascalasfire@gmail.com');
        });
        $('.keep-in-touch-radio li.choice-3 label').on('click', function () {
            $('.notification-email input').val(' firephiladelphia@gmail.com, lascalasfire@gmail.com, james@lascalasrestaurantgroup.com');
        });
        $('.keep-in-touch-radio li.choice-4 label').on('click', function () {
            $('.notification-email input').val('firevillanova@gmail.com, lascalasfire@gmail.com, frank@lascalarestauantgroup.com');
        });
        $('.keep-in-touch-radio li.choice-5 label').on('click', function () {
            $('.notification-email input').val('birraphilly@gmail.com, ciro@lascalarestaurantgroup.com');
        });
        $('.keep-in-touch-radio li.choice-6 label').on('click', function () {
            $('.notification-email input').val('lascalasbirra@gmail.com');
        });
        $('.keep-in-touch-radio li.choice-7 label').on('click', function () {
            $('.notification-email input').val(' lascalaspronto@gmail.com, jrvillaperalta@gmail.com');
        });
        $('.keep-in-touch-radio li.choice-8 label').on('click', function () {
            $('.notification-email input').val('lascalasprontomedford@gmail.com, antfioravanti7@gmail.com');
        });

});


window.addEventListener("DOMContentLoaded", function() {
    resizeGalery();
    scrollToRestaurantsEventListener();
    placeholderMove();
    //addedTitle();
});
window.addEventListener("hashchange", function() {
    formSend(); //contactus send
    btnUndisable();
    scrollToHash();
    highlightCurrentPageItemWithHash();
});
window.addEventListener("load", function() {
    showPopupUrl();
    showCovidPopupUrl();
    //auditDatePopup();
    clickSubmit();
    chagneButton();
    scrollToHash();
    highlightCurrentPageItemWithHash();
    textareaCharecters();
});
window.addEventListener("resize", function() {
    resizeGalery();
});


function highlightCurrentPageItemWithHash () {
    let $menuLi = jQuery('.main-menu-list li');
    removeHighlightFromMenuItems();

    $menuLi.each(function (index, el) {
        let $el = jQuery(el);
        let currentPathWithHash = window.location.pathname + window.location.hash;
        if ($el.find('a').attr('href') === currentPathWithHash || $el.find('a').attr('href') === window.location.href) {
            $el.addClass('active');
        }
    });
}

function removeHighlightFromMenuItems() {
    let $menuLi = jQuery('.main-menu-list li');
    $menuLi.removeClass('active');
}


function scrollToHash() {
    if (window.location.hash) {
        var hash = window.location.hash.substring(1);
        if (hash === "welcome") {
            scrollToWelcome();
        } else if (hash === "restaurants") {
            scrollToRestaurants();
        } else if (hash === "our-inspiration") {
            scrollToOurInspiration();
        }
    }
}

//ResizeGalery
function resizeGalery(){
    const images = document.querySelectorAll(".galery-wrapper .et_pb_column");
    images.forEach(function(element){
      //console.log(element.offsetWidth);
      element.style.height = element.offsetWidth + "px";
      element.style.minHeight = "unset";
    });
}


//Added Title to Form
/*
function addedTitle(){
    const keepRadio = document.querySelector(".keep-in-touch-radio");
    const regardingRadio = document.querySelector('.regarding-radio');
    if(keepRadio){
        keepRadio.insertAdjacentHTML('beforebegin', '<p class="keep-radio-title">concerning which restaurant?</p>');
        regardingRadio.insertAdjacentHTML('beforebegin', '<p class="regarding-radio-title">and/or regarding?</p>');
    }
}
*/

//Shower Popup---------------------
function showPopup(){
    const popupWrapper = document.querySelector(".modal-wrapper");
    if(popupWrapper){
        document.querySelector("body").classList.add("overflov-hidden");
        popupWrapper.classList.add("show");
    }
    hidenPopup();
}

//--HJiden popup
function hidenPopup(){
    const popupWrapper = document.querySelector(".modal-wrapper");
    const closeButton = popupWrapper.querySelector(".close-popup");
    const input = popupWrapper.querySelector(".wpforms-field-required");
    const date = new Date();
    const currentDate = date.getDate();
	jQuery(document).mouseup(function (e){ // событие клика по веб-документу
	    var div = jQuery("#modal-window"); // тут указываем ID элемента
	    if (!div.is(e.target) && div.has(e.target).length === 0) { // и не по его дочерним элементам
            document.querySelector("body").classList.remove("overflov-hidden");
            popupWrapper.classList.remove("show");
            localStorage.setItem('currentDate', currentDate);
	    }
    });
    closeButton.addEventListener("click", function(evt){
        evt.preventDefault();
        document.querySelector("body").classList.remove("overflov-hidden");
        popupWrapper.classList.remove("show");
        localStorage.setItem('currentDate', currentDate);
    });

    //close after no action
    setTimeout(function(){
        if (input.value == "") {
            document.querySelector("body").classList.remove("overflov-hidden");
            popupWrapper.classList.remove("show");
        }
    }, 20000);
}

//---Shower Popup when click JOIN US
function showPopupUrl(){
    const showerButton = document.querySelector("#open_popup");
    //const urlParams = window.location.href;
    //console.log(showerButton);
    if(showerButton){
       showerButton.addEventListener("click", function(e){
           e.preventDefault();
           showPopup();
       });
    }
}
//---Shower Popup when click COVID - 19
function showCovidPopupUrl(){
    const showerButton = document.querySelector(".covid-popup a");
    const showerButton1 = document.querySelector("#open_popup_covid");
    //const urlParams = window.location.href;
    //console.log(showerButton);
    if(showerButton){
       showerButton.addEventListener("click", function(e){
           e.preventDefault();
           showPopupCovid();
       });
    }
    if(showerButton1){
        showerButton1.addEventListener("click", function(e){
           e.preventDefault();
           showPopupCovid();
       });
    }
}

//Shower Popup COVID---------------------
function showPopupCovid(){
    const popupWrapper = document.querySelector(".modal-wrapper-covid");
    if(popupWrapper){
        document.querySelector("body").classList.add("overflov-hidden");
        popupWrapper.classList.add("show");
    }
    hidenPopupCovid();
}

//--HJiden popup COVID
function hidenPopupCovid(){
    const popupWrapper = document.querySelector(".modal-wrapper-covid");
    const closeButton = popupWrapper.querySelector(".modal-wrapper-covid .close-popup");
    jQuery(document).mouseup(function (e){ // событие клика по веб-документу
        var div = jQuery("#modal-wrapper-covid"); // тут указываем ID элемента
        if (!div.is(e.target) && div.has(e.target).length === 0) { // и не по его дочерним элементам
            document.querySelector("body").classList.remove("overflov-hidden");
            popupWrapper.classList.remove("show");
        }
    });
    closeButton.addEventListener("click", function(evt){
        evt.preventDefault();
        document.querySelector("body").classList.remove("overflov-hidden");
        popupWrapper.classList.remove("show");
    });
}

//---Audit when Home page and today Date, first show popup
function auditDatePopup(){
    if (window.innerWidth > 768) {
        if(window.location.pathname=='/'){
            const date = new Date();
            const currentDate = date.getDate();
            if((localStorage.getItem('currentDate') != currentDate) && (localStorage.getItem('Subscribed') != "true") ){
               setTimeout(() => showPopup() , 15000);
            }
        }
    }
}


//---When JoinUs Submit
function clickSubmit(){
    const submits = document.querySelectorAll(".join-submit");
    submits.forEach(function(submit){
        submit.addEventListener("click", function(){
            localStorage.setItem('Subscribed', "true");
        });
    });
}

//---If Form Send Change button and text
function formSend(){
    const urlParams = window.location.href;
    //console.log(urlParams);
    const button = document.querySelector(".keep-in-touch-submit");
    if (button) {
        if(urlParams.substr(-4) == "send"){
            clearInputKeep();
            button.classList.add('added');
            button.disabled = true;
            button.innerHTML = "Thank You!";
        }
        else{
            button.classList.remove('added');
            button.disabled = false;
            button.innerHTML = "Submit";
        }
    }
}
//----Change button text when change inputs.
function btnUndisable(){
    const urlParams = window.location.href;
    const button = document.querySelector(".keep-in-touch-submit");
    if (button) {
        if (urlParams.substr(-4) == "send") {
            setTimeout(function() {
                button.classList.remove('added');
                button.disabled = false;
                button.innerHTML = "Submit";
                if(history.pushState) {
                    history.pushState(null, null, '#');
                }
                else {
                    location.hash = '#';
                }
            }, 5000);
        }
    }

}

function clearInputKeep() {
    const formWrapper = document.querySelector(".keep-in-touch");
    if (formWrapper) {
        const inputs = formWrapper.querySelectorAll("input");
        const radio = formWrapper.querySelectorAll("li");
        const label = formWrapper.querySelectorAll("label");
        radio.forEach(element => {
            element.classList.remove("wpforms-selected");
        });
        inputs.forEach(element => {
            element.value = "";
            element.checked = false;
        });
        label.forEach(element => {
            element.classList.remove("focus");
        });
        formWrapper.querySelector('textarea').value = '';
    }
}

//Scroll to Restaurants
function scrollToRestaurantsEventListener() {
    const btnSubscribe = document.querySelector('.our-inspiration-btn');
    if (btnSubscribe) {
        btnSubscribe.addEventListener('click', function(e) {
            e.preventDefault();
            scrollToRestaurants();
        })
    }
}

function scrollToRestaurants() {
    if (window.innerWidth > 768) {
        let top;
        if (document.querySelector('header').classList.contains('fixed')) {
            top = jQuery('#resto-grid').offset().top - document.querySelector('header .menu-wrap').clientHeight - 8;    
        }
        else{
            top = jQuery('#resto-grid').offset().top - document.querySelector('header .menu-wrap').clientHeight - 20;
        }
        //console.log(top);
        jQuery('html, body').animate({
            scrollTop: top
        }, 800);
    } else {
        jQuery('.top-menu').removeClass('show');
        jQuery('body').removeClass('no-scroll');
        jQuery('.close-menu').hide();
        let top = jQuery('#resto-grid').offset().top - document.querySelector('header .menu-wrap').clientHeight - 10;
        jQuery('html, body').animate({
            scrollTop: top
        }, 800);
    }
}

function scrollToOurInspiration() {
    let top = jQuery('#inspiration').offset().top - document.querySelector('header .menu-wrap').clientHeight - 10;
    jQuery('html, body').animate({
        scrollTop: top
    }, 1500);
}

function scrollToWelcome() {
    if (jQuery(window).width() > 991) {
        let top = jQuery('#welcome-section').offset().top - 140;
        jQuery('html, body').animate({
            scrollTop: top
        }, 800);
    } else {
        let top = jQuery('#welcome-section').offset().top - 40;
        jQuery('html, body').animate({
            scrollTop: top
        }, 800);
    }

    if (jQuery(window).width() < 991) {
        jQuery('.close-menu').trigger('click');
    }
    history.pushState("", document.title, window.location.pathname);

}

//Resize let`s Eat
function letsEat() {
    const letsEat = document.querySelector("#letsEat");
    if (letsEat) {
        let width = letsEat.clientWidth / 1.87;
        //console.log(width);
        letsEat.style.height = width + "px";
    }
}


//Change error text
function changeError() {
    const phonefield = document.querySelector('.phone-field');
    //console.log('change');
    changeText(".wpforms-image-choices-modern", "Please select a restaurant.");
    changeText('.regarding-radio', "Please make a selection.");
    //changeText('.name-field', "Please input you`r name");
    //changeText('.mail-field', "Please input you`r mail");
    //changeText('.phone-field', "Please input you`r phone number");
}

function changeText(nameWrap, text) {
    //console.log('ChangeText')
    wrap = document.querySelector(nameWrap);
    if (wrap) {
        const error = wrap.querySelector('label.wpforms-error');
        if (error) {
            if (error.textContent == 'This field is required.' || error.previousSibling.value == "") {
                error.textContent = text;
            }
        }
    }
}

function clickOnWrapper() {
    wrap = document.querySelector(".et_pb_section.et_pb_section_0.et_section_regular");
    wrap.addEventListener('click', function() {
        setTimeout(changeError, 10);
    });
}

function chagneButton() {
    const wrapper = document.querySelector('.keep-in-touch');
    const button = document.querySelector(".keep-in-touch-submit");
    if (button) {
        button.addEventListener('click', function() {
            //console.log('click');
            setTimeout(changeError, 510);
            clickOnWrapper();
        });
    }
    if (wrapper) {
        const inputs = wrapper.querySelectorAll('input');
        inputs.forEach(element => {
            element.addEventListener('input', function() {
                setTimeout(changeError, 100);
            });
            element.addEventListener('change', function() {
                setTimeout(changeError, 100);
            });
            element.addEventListener('mouseover', function() {
                setTimeout(changeError, 100);
            });

        });
    }

}

function placeholderMove() {
    const formWrapper = document.querySelector('.wpforms-field-container');
    if (formWrapper) {
        const inputs = formWrapper.querySelectorAll(".wpforms-field");
        for (let index = 0; index < inputs.length; index++) {
            const element = inputs[index];
            const input = element.querySelector('.wpforms-field-large');
            const label = element.querySelector('.wpforms-field-label');
            if (input) {
                input.addEventListener('input', function() {
                    // console.log(input);
                    // label.classList.add("focus");
                    if (input.value != '') {
                        label.classList.add("focus");
                    }
                    else{
                        label.classList.remove("focus");
                    }
                })
            }
        }
    }
}

function textareaCharecters() {
    const formWrapper = document.querySelector('.wpforms-field-container');
    if (formWrapper) {
        const textarea = formWrapper.querySelector('.wpforms-field-textarea textarea');
        const limit = formWrapper.querySelector('.wpforms-field-textarea .wpforms-field-description');
        let text = " of 300 characters";
        if (textarea) {
            textarea.addEventListener('input', function() {
                //console.log(textarea.value, String(textarea.value).length);
                limit.innerHTML = String(textarea.value).length + text;
            })   
        }
    }
}