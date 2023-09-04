$(document).ready(() => {
    if ($(".btn").attr("data-name")) {
        $(".btn").click((e) => {
            if (e.target.getAttribute("data-name") !== null) {
                $("#mainModalLabel").text(e.target.getAttribute("data-name"))
            }


        })
    }

    function imgZum(selector) {
        $(selector).click((e) => {
            if ($('.imageZum').length === 0) {
                $('body').append('<div class = "closeImg" title = "Закрыть"><svg width="4em"  viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d = "M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" /></svg ></div>');
                $('body').append('<div class = "fonImg"></div>');
                $('body').append('<img class = "imageZum" src = "' + e.target.src + '">');
                $('body').append('<div class = "arrowLeft"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg></div>');
                $('body').append('<div class = "arrowRight"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/></svg></div>');
                let x = document.querySelector('.imageZum').x;
                let y = document.querySelector('.imageZum').y;
                //console.log(x)

            }

            $('.imageZum').css({
                height: '0px',
                padding: '0px',
                border: 'solid 0px #ffffff',
                borderRadius: '20px',
                transition: '1s'
            });
            setTimeout(() => {
                console.log(window.innerWidth)
                let styles = {}
                if (window.innerWidth < 500) {
                    styles = {
                        width: '90%',
                        height: 'auto',
                        padding: '1px',
                        border: 'solid 15px #ffffff',
                        borderRadius: '20px',
                        transition: '1s'
                    }
                } else {
                    styles = {
                        height: '90%',
                        padding: '1px',
                        border: 'solid 15px #ffffff',
                        borderRadius: '20px',
                        transition: '1s'
                    }
                }

                $('.imageZum').css(styles);
            }, 20)

            $('.closeImg svg').mouseover(() => {
                $('.closeImg svg').css({
                    transform: 'rotate(180deg)', transition: '1s'
                })
            });
            $('.closeImg svg').mouseout(() => {
                $('.closeImg svg').css({
                    transform: 'rotate(0deg)', transition: '1s'
                })
            });
            $('.closeImg svg').click(() => {
                $('.fonImg').remove();
                $('.imageZum').css({
                    height: '0px',
                    padding: '0px',
                    border: 'solid 0px #ffffff',
                    borderRadius: '20px',
                    transition: '1s'
                });

                $('.arrowLeft').remove();
                $('.arrowRight').remove();
                $('.closeImg').remove();
                setTimeout(() => {
                    $('.imageZum').remove();

                }, 1000)

            })
        })
    }

    imgZum('.imagesContainer img');
    // Удалить пустые блоки в меню
    Array.from(document.querySelectorAll(".nav-item")).map((el) => {
        if (el.children.length === 0) {
            el.remove();
        }
    });
    // На странице рассрочка поднять вверх при скроле "рассрочка 0%"
    if(document.querySelector(".credit-percent")){
        document.addEventListener("scroll",(e)=>{
            if(window.scrollY > 0){
                document.querySelector(".credit-percent").setAttribute("style","margin-top:-120px;")
            }else {
                document.querySelector(".credit-percent").setAttribute("style","margin-top:0px;")
            }

        })
    }


})
