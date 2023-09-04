import './bootstrap';
import Alpine from 'alpinejs';
import axios from 'axios';

window.Alpine = Alpine;

Alpine.start();
//menu



class App {
    mouseX = 0;
    mouseY = 0;
    namesLength = 0;
    telLength = 0;
    textLengtn = 0;

    menuActive() {
        let test = "test"
        let menu = $("#menu .active");
        if (menu.length > 0) {

            if (menu.parent().parent().parent().get(0).tagName == "UL") {
               menu.parent().parent().find("ul").parent().addClass("active");
            } else {
                // menu.parent().find("li").eq(0).addClass("active")
            }
        }
        return false;
    }

    reviews() {
        var tab = $('#tabs .tabs-items > div');
        tab.hide().filter(':first').show();

        // Клики по вкладкам.

        console.log( $('#tabs .a'))
        $('#tabs .nav-link').eq(0)
        $('#tabs .tabs-nav a').click(function() {
            tab.hide();
            tab.filter(this.hash).show();
            $('#tabs .tabs-nav a').removeClass('active');
            $(this).addClass('active');
            return false;
        }).filter(':first').click();

        return false;
    }


    invalid(name, f) {
        if (f > 0) {
            $("#" + name).addClass("is-valid");
            $("#" + name).removeClass("is-invalid");
        } else {
            $("#" + name).removeClass("is-valid");
        }
    }

    noinvalid(name, tel) {
        if (this.namesLength == 0) {
            $("#" + name).addClass("is-invalid");

        } else if (this.telLength == 0) {
            $("#" + tel).addClass("is-invalid");
        }
    }


    mousemove() {
        $(document).mousemove((e) => {
            this.mouseX = e.clientX;
            this.mouseY = e.clientY;
        })
    }

    keyupPress(name, tel) {
        $("#" + name).keyup((e) => {
            this.namesLength = e.target.value.length
            this.invalid(name, e.target.value.length);
        })
        $("#" + tel).keyup((e) => {
            this.telLength = e.target.value.length
            this.invalid(tel, e.target.value.length);
        })
    }


    isMessage() {
        if (this.mouseX > 0 && this.mouseY > 0 && this.namesLength > 0 && this.telLength > 0) {
            return true;
        } else {
            return false;
        }
    }

    mainMessage(name, tel, submit) {
        this.keyupPress(name, tel)
        $("#" + submit).click(() => {
            let message = false;
            if (this.isMessage()) {
                axios.post('/application', {
                        name: $("#" + name).val(),
                        tel: $("#" + tel).val(),
                    })
                    .then(function(response) {
                        if (response.data.name) {

                            $(".form-modal-n").css({ display: "none" });
                            $(".form-modal-p").css({ display: "block" });
                            $("#" + name).val("")
                            $("#" + tel).val("")
                        } else {
                            //console.log(response)

                        }

                    })
                    .catch(function(error) {
                        //console.log(error)
                    });
            }

            this.noinvalid(name, tel);

        })

    }




    reviewsAdd(name, text, submit) {
        this.keyupPress(name, text);

        $('#' + submit).click(() => {
            if (this.isMessage()) {
                axios.post('/otzivi', {
                    name: $('#' + name).val(),
                    text: $('#' + text).val()
                }).then((response) => {
                    console.log(response.data.length)
                    if (response.data.length === 2) {

                        $('#' + name).val('');
                        $('#' + text).val('');
                        $('#reviews_form').css({ display: 'none' });
                        $('#reviews_shipped').css({ display: 'block' });
                    }
                }).catch((err) => {
                    console.log(err)
                })
            } else {
                this.noinvalid(name, text);
            }
        })
    }


    slider() {
        //slider
        $('#sertifikati').sliderPro({
            width: 500,
            height: 400,
            autoplay: false,
            visibleSize: '100%',
            autoSlideSize: true,
            slideDistance: 40,
            arrows: true
        });



        // instantiate fancybox when a link is clicked
        $(".slider-pro").each(function() {
            var slider = $(this);

            slider.find(".sp-image").parent("a").on("click", function(event) {
                event.preventDefault();

                if (slider.hasClass("sp-swiping") === false) {
                    var sliderInstance = slider.data("sliderPro"),
                        isAutoplay = sliderInstance.settings.autoplay;

                    $.fancybox.open(slider.find(".sp-image").parent("a"), {
                        index: $(this).parents(".sp-slide").index(),
                        afterShow: function() {
                            if (isAutoplay === true) {
                                sliderInstance.settings.autoplay = false;
                                sliderInstance.stopAutoplay();
                            }
                        },
                        afterClose: function() {
                            if (isAutoplay === true) {
                                sliderInstance.settings.autoplay = true;
                                sliderInstance.startAutoplay();
                            }
                        }

                    });
                }
            });
        });


    }



    map() {
        ymaps.ready(init);
        var myMap;
        var myMap2;

        function init() {

            myMap = new ymaps.Map("map", {
                center: [46.829457, 29.483857], // Координаты центра карты
                zoom: 17 // Маштаб карты
            });
            myMap2 = new ymaps.Map("map2", {
                center: [46.851210, 29.466364], // Координаты центра карты
                zoom: 17 // Маштаб карты
            });

            myMap.controls.add(
                new ymaps.control.ZoomControl() // Добавление элемента управления картой
            );
            myMap2.controls.add(
                new ymaps.control.ZoomControl() // Добавление элемента управления картой
            );

            let myPlacemark = new ymaps.Placemark([46.829457, 29.483857], { // Координаты метки объекта
                balloonContent: "<div class='ya_map'>ООО Сандани<br>Наш офис<br>0 (552) 2-46-49 </div>" // Подсказка метки
            }, {
                preset: "twirl#redDotIcon" // Тип метки
            });
            let myPlacemark2 = new ymaps.Placemark([46.851210, 29.466364], { // Координаты метки объекта
                balloonContent: "<div class='ya_map'>ООО Сандани<br>Производство<br>0 (777) 2-94-10 </div>" // Подсказка метки
            }, {
                preset: "twirl#redDotIcon" // Тип метки
            });

            myMap.geoObjects.add(myPlacemark); // Добавление метки
            myPlacemark.balloon.open(); // Открытие подсказки метки
            myMap2.geoObjects.add(myPlacemark2); // Добавление метки
            myPlacemark2.balloon.open(); // Открытие подсказки метки

        };

    }

    topControl() {

        $(window).scroll(function(e) {

            if (window.scrollY > 0) {
                $("header #navbar").addClass("fixed-top");
                if (window.scrollY > 900) {
                    $("#scroll-top").addClass("vid");
                    $("#scroll-top").removeClass("noVid");
                } else {
                    $("#scroll-top").addClass("noVid");
                    $("#scroll-top").removeClass("vid");
                }
            } else {
                $("header #navbar").removeClass("fixed-top");

            }
        });



            $('#scroll-top').click(function() {
                $('html, body').animate({ scrollTop: 0 }, 600);
                return false;
            });

    }

    footerMenu() {
        $('footer .nav-item a').each(function(indexInArray, valueOfElement) {

            let href = valueOfElement.href;

            if (href === document.baseURI) {
                $('footer .nav-item a').eq(indexInArray).addClass("active");
            } else {
                $('footer .nav-item a').eq(indexInArray).removeClass("active")
            }
        });
    }




    display() {
        this.mousemove();
        this.menuActive();
        this.reviews();
        this.mainMessage("username", "usertel", "submitd");

        this.reviewsAdd('reviews_name', 'reviews_text', 'reviews_save');
        this.slider();
        if (document.baseURI.split("/").filter((f) => f === 'admin').length === 0) {
            this.map();
        }
        this.topControl();
        this.footerMenu();

    }
}
const app = new App();
$(document).ready(()=>{
    app.display();
})

