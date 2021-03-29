"use strict";
/*-------this is a function which change blocks place-------*/
(function () {
    let originalPositions = [];
    let daElements = document.querySelectorAll('[data-da]');
    let daElementsArray = [];
    let daMatchMedia = [];
    //Заполняем массивы
    if (daElements.length > 0) {
        let number = 0;
        for (let index = 0; index < daElements.length; index++) {
            const daElement = daElements[index];
            const daMove = daElement.getAttribute('data-da');
            if (daMove != '') {
                const daArray = daMove.split(',');
                const daPlace = daArray[1] ? daArray[1].trim() : 'last';
                const daBreakpoint = daArray[2] ? daArray[2].trim() : '767';
                const daType = daArray[3] === 'min' ? daArray[3].trim() : 'max';
                const daDestination = document.querySelector('.' + daArray[0].trim())
                if (daArray.length > 0 && daDestination) {
                    daElement.setAttribute('data-da-index', number);
                    //Заполняем массив первоначальных позиций
                    originalPositions[number] = {
                        "parent": daElement.parentNode,
                        "index": indexInParent(daElement)
                    };
                    //Заполняем массив элементов
                    daElementsArray[number] = {
                        "element": daElement,
                        "destination": document.querySelector('.' + daArray[0].trim()),
                        "place": daPlace,
                        "breakpoint": daBreakpoint,
                        "type": daType
                    };
                    number++;
                }
            }
        }
        dynamicAdaptSort(daElementsArray);

        //Создаем события в точке брейкпоинта
        for (let index = 0; index < daElementsArray.length; index++) {
            const el = daElementsArray[index];
            const daBreakpoint = el.breakpoint;
            const daType = el.type;

            daMatchMedia.push(window.matchMedia("(" + daType + "-width: " + daBreakpoint + "px)"));
            daMatchMedia[index].addListener(dynamicAdapt);
        }
    }

    //Основная функция
    function dynamicAdapt(e) {
        for (let index = 0; index < daElementsArray.length; index++) {
            const el = daElementsArray[index];
            const daElement = el.element;
            const daDestination = el.destination;
            const daPlace = el.place;
            const daBreakpoint = el.breakpoint;
            const daClassname = "_dynamic_adapt_" + daBreakpoint;

            if (daMatchMedia[index].matches) {
                //Перебрасываем элементы
                if (!daElement.classList.contains(daClassname)) {
                    let actualIndex = indexOfElements(daDestination)[daPlace];
                    if (daPlace === 'first') {
                        actualIndex = indexOfElements(daDestination)[0];
                    } else if (daPlace === 'last') {
                        actualIndex = indexOfElements(daDestination)[indexOfElements(daDestination).length];
                    }
                    daDestination.insertBefore(daElement, daDestination.children[actualIndex]);
                    daElement.classList.add(daClassname);
                }
            } else {
                //Возвращаем на место
                if (daElement.classList.contains(daClassname)) {
                    dynamicAdaptBack(daElement);
                    daElement.classList.remove(daClassname);
                }
            }
        }
        customAdapt();
    }

    //Вызов основной функции
    dynamicAdapt();

    //Функция возврата на место
    function dynamicAdaptBack(el) {
        const daIndex = el.getAttribute('data-da-index');
        const originalPlace = originalPositions[daIndex];
        const parentPlace = originalPlace['parent'];
        const indexPlace = originalPlace['index'];
        const actualIndex = indexOfElements(parentPlace, true)[indexPlace];
        parentPlace.insertBefore(el, parentPlace.children[actualIndex]);
    }

    //Функция получения индекса внутри родителя
    function indexInParent(el) {
        var children = Array.prototype.slice.call(el.parentNode.children);
        return children.indexOf(el);
    }

    //Функция получения массива индексов элементов внутри родителя
    function indexOfElements(parent, back) {
        const children = parent.children;
        const childrenArray = [];
        for (let i = 0; i < children.length; i++) {
            const childrenElement = children[i];
            if (back) {
                childrenArray.push(i);
            } else {
                //Исключая перенесенный элемент
                if (childrenElement.getAttribute('data-da') == null) {
                    childrenArray.push(i);
                }
            }
        }
        return childrenArray;
    }

    //Сортировка объекта
    function dynamicAdaptSort(arr) {
        arr.sort(function (a, b) {
            if (a.breakpoint > b.breakpoint) {
                return -1
            } else {
                return 1
            }
        });
        arr.sort(function (a, b) {
            if (a.place > b.place) {
                return 1
            } else {
                return -1
            }
        });
    }

    //Дополнительные сценарии адаптации
    function customAdapt() {
        //const viewport_width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    }

}());

// preloader
window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
        document.body.classList.add('loaded');
        document.body.classList.remove('loaded_hiding');
    }, 500);
};


$(function () {

    // gamburger
    $('.gamburger').click(function () {
        $('.menu-collapse').toggleClass('d-none').css('order', '1');
        $('.menu').toggleClass('nav-gamburger');
    });

    $('.menu-collapse__list a').click(function () {
        $('.menu-collapse').addClass('d-none').css('order', '1');
    });

    // director-slider
    if ($('*').is('.director-slider')) {
        $('.director-slider').slick({
            dots: true,
            infinite: false,
            prevArrow: '<button type = "button" class="slick-prev"><i class="fa fa-angle-left"></i></ button>',
            nextArrow: '<button type = "button" class="slick-next"><i class="fa fa-angle-right"></i></ button>'
        });
    }

    // offer-slider
    if ($('*').is('.offer-slider')) {
        $('.offer-slider').slick({
            dots: true,
            infinite: true,
            prevArrow: '<button type = "button" class="slick-prev"><i class="fa fa-angle-left"></i></ button>',
            nextArrow: '<button type = "button" class="slick-next"><i class="fa fa-angle-right"></i></ button>'
        });
    }

    // scrolling
    $('a[href^="#services"]').click(function () {
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 800);
        return false;
    });
    $('a[href^="#about"]').click(function () {
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 800);
        return false;
    });
    $('a[href^="#contacts"]').click(function () {
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 800);
        return false;
    });
    $('a[href^="#creation"]').click(function () {
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 800);
        return false;
    });
    $('a[href^="#reviews"]').click(function () {
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 800);
        return false;
    });

    $('a[href^=".hover"]').click(function () {
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 800);
        return false;
    });

    $('a[href^=".jackpot"]').click(function () {
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 800);
        return false;
    });

    $('a[href^=".consultation"]').click(function () {
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 800);
        return false;
    });

    $('a[href^=".director"]').click(function () {
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 800);
        return false;
    });

    $('a[href^="#header"]').click(function () {
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 800);
        return false;
    });

    //   $(document).mouseup(function (e){ // отслеживаем событие клика по веб-документу
    //     var block = $(".services-list__content"); // определяем элемент, к которому будем применять условия (можем указывать ID, класс либо любой другой идентификатор элемента)
    //     if (!block.is(e.target) // проверка условия если клик был не по нашему блоку
    //         && block.has(e.target).length === 0) { // проверка условия если клик не по его дочерним элементам
    //         block.hide(); // если условия выполняются - скрываем наш элемент
    //     }
    // });

    // mob-reviews-slider
    if ($('*').is('.mob-reviews-slider')) {
        $('.mob-reviews-slider').slick({
            dots: true,
            infinite: false,
            prevArrow: '<button type = "button" class="slick-prev"><i class="fa fa-angle-left"></i></ button>',
            nextArrow: '<button type = "button" class="slick-next"><i class="fa fa-angle-right"></i></ button>'
        });
    }

    if ($('*').is('.director-slider__slider')) {
        $('.director-slider__slider').slick({
            dots: true,
            infinite: false,
            prevArrow: '<button type = "button" class="slick-prev"><i class="fa fa-angle-left"></i></ button>',
            nextArrow: '<button type = "button" class="slick-next"><i class="fa fa-angle-right"></i></ button>'
        });
    }
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(66235159, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });


    //modal window
    $('#exampleModal').modal()


    //E-mail Ajax Send
    $("form").submit(function () { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function () {

            $('body').addClass('modal-open');
            setTimeout(function () {
                // Done Functions
                th.trigger("reset");

            }, 1000);
        });
        return false;
    });

    // open modal window
    $(function () {
        $('#form-btn-1').click(function () {
            var1 = $('#id_field1').val();
            var2 = $('#id_field2').val();
            if ((var1 === "") || (var2 === "")) {
                return;
            } else {
                $('#modal').modal('show');
            }
        });
    });

    $(function () {
        $('#form-btn-2').click(function () {
            var3 = $('#id_field3').val();
            var4 = $('#id_field4').val();
            if ((var3 === "") || (var4 === "")) {
                return;
            } else {
                $('#modal').modal('show');
            }
        });
    });

});

// accordion
const accItem = document.getElementsByClassName('services-list__item'),
    accHD = document.getElementsByClassName('services-list__content');
for (let i = 0; i < accHD.length; i++) {
    accHD[i].addEventListener('click', toggleItem, false);
}

function toggleItem() {
    const itemClass = this.parentNode.className;
    for (let i = 0; i < accItem.length; i++) {
        accItem[i].className = 'services-list__item closeAcc';
    }
    if (itemClass === 'services-list__item closeAcc') {
        this.parentNode.className = 'services-list__item openAcc';
    }
}


/*      переключение полной и мобильной версии сайта с запоминанием через куки на 30 дней       */
function mobile() {
    document.getElementById('vp').setAttribute('content', 'width=auto, initial-scale=1');
    document.getElementById('full-version').innerHTML = "Полная версия сайта";
    setTimeout("document.getElementById('full-version').href='javascript: desktop();';", 500);
    SetCookie("mobile=yes", "0");
}

function desktop() {
    document.getElementById('vp').setAttribute('content', 'width=1024, initial-scale=0.3');
    document.getElementById('full-version').innerHTML = "Мобильная версия сайта";
    setTimeout("document.getElementById('full-version').href='javascript: mobile();';", 500);
    SetCookie("mobile=no", "30");
}

//Функция автозапуска
if (document.cookie.indexOf("mobile=no") != -1) {
    desktop();
}

//Куки
function SetCookie(id, days) {
    var ws = new Date();
    ws.setDate((days - 0 + ws.getDate()));
    document.cookie = id + "; path=/; expires=" + ws.toGMTString();
}

//закрытие бургер меню при изменении ширины окна
window.addEventListener('resize', () => {

    screenWidthDetection()

});

function screenWidthDetection() {
    const menuBurger = document.querySelector('.menu-collapse');

    if (window.matchMedia('(max-width: 991.98px)').matches) {
        menuBurger.classList.remove('menu-collapse__list');

    }
}

// переключение отзывов на десктопе
document.addEventListener('click', e => {
    changeReview(e)
});

function changeReview(e) {

    const reviewsItems = document.querySelectorAll('.reviews-slider__item .reviews-slider__img'),
        textBlocks = document.querySelectorAll('.reviews-slider__text-block');

    const itemsTargetNum = [...reviewsItems].indexOf(e.target);

    if (itemsTargetNum === -1) {
        return;
    }

    document.querySelector('.reviews-slider__item_active').classList.remove('reviews-slider__item_active');
    document.querySelector('.reviews-slider__text_active').classList.remove('reviews-slider__text_active');

    e.target.classList.add('reviews-slider__item_active');
    textBlocks[itemsTargetNum].classList.add('reviews-slider__text_active');

}

// snow
// particlesJS("particles-js", {
//     "particles": {
//         "number": {
//             "value": 400,
//             "density": {
//                 "enable": true,
//                 "value_area": 800
//             }
//         },
//         "color": {
//             "value": "#ffffff"
//         },
//         "shape": {
//             "type": "image",
//             "stroke": {
//                 "width": 3,
//                 "color": "#fff"
//             },
//             "polygon": {
//                 "nb_sides": 5
//             },
//             "image": {
//                 "src": "wp-content/themes/goldcapital-back/assets/img/snowflake3.png)",
//                 "width": 100,
//                 "height": 100
//             }
//         },
//         "opacity": {
//             "value": 0.7,
//             "random": false,
//             "anim": {
//                 "enable": false,
//                 "speed": 1,
//                 "opacity_min": 0.1,
//                 "sync": false
//             }
//         },
//         "size": {
//             "value": 3,
//             "random": true,
//             "anim": {
//                 "enable": false,
//                 "speed": 20,
//                 "size_min": 0.1,
//                 "sync": false
//             }
//         },
//         "line_linked": {
//             "enable": false,
//             "distance": 50,
//             "color": "#ffffff",
//             "opacity": 0.6,
//             "width": 1
//         },
//         "move": {
//             "enable": true,
//             "speed": 3,
//             "direction": "bottom",
//             "random": true,
//             "straight": false,
//             "out_mode": "out",
//             "bounce": false,
//             "attract": {
//                 "enable": true,
//                 "rotateX": 300,
//                 "rotateY": 1200
//             }
//         }
//     },
//     "interactivity": {
//         "detect_on": "canvas",
//         "events": {
//             "onhover": {
//                 "enable": false,
//                 "mode":  "bubble"
//             },
//             "onclick": {
//                 "enable": true,
//                 "mode": "repulse"
//             },
//             "resize": true
//         },
//         "modes": {
//             "grab": {
//                 "distance": 150,
//                 "line_linked": {
//                     "opacity": 1
//                 }
//             },
//             "bubble": {
//                 "distance": 200,
//                 "size": 40,
//                 "duration": 2,
//                 "opacity": 8,
//                 "speed": 3
//             },
//             "repulse": {
//                 "distance": 200,
//                 "duration": 0.2
//             },
//             "push": {
//                 "particles_nb": 4
//             },
//             "remove": {
//                 "particles_nb": 2
//             }
//         }
//     },
//     "retina_detect": true
// });
