/* 
 * Copyright 2014 ПапаГот.
 *
 *  e-mail: papagot@w-services.eu
 *  mob. tel. +371 253-411-23
 *  skype: live:papagot_2
 *  My CV http://cv.w-services.eu/ 
 *  My Secondory Project http://vk.w-services.eu/
 */

var navbarli = $('#nav li');
var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
if (scrollTop == 0) {
    $("#nav li").first().addClass("active");
}



$('.tracked').waypoint(function () {




    var hash = $(this).attr('id');
    navbarli.removeClass('active');

    $.each(navbarli, function () {
        if ($(this).children('a').attr('href').slice(1) == hash) {
            $(this).addClass('active');
//                     $.waypoints('refresh');
        }
    });

    $(".nav li a").click(function () {
        var hash = $(this).attr('id');

        $.each(navbarli, function () {
            if ($(this).children('a').attr('href').slice(1) == hash) {
                $(this).addClass('active');
                $.waypoints('refresh');
            }
        });

    });
    offset: '80%';
});


//плавность прокрутки добовляем с верхнего меню
$("#navbar li a").click(function () {
    var selected = $(this).attr('href');
    $.scrollTo(selected, 800);
    return false;
});

//плавность прокрутки добовляем с футера в самый вверх
$(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
        $('.back_top').fadeIn();
    } else {
        $('.back_top').fadeOut();
    }
});
$('.back_top a').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 800);
    return false;
});



//Отправка формы и обработка формы в хедере блок banner
$(".response").hide("slow");
$(".header_send").click(function () {
    var name = $(this).parents(".header_form").find(".name");
    var email = $(this).parents(".header_form").find(".email");
    var messages = $(this).parents(".header_form").find(".messages");
    
    $(this).val("Обработка...");
    $.ajax({
        type: 'POST',
        url: 'ajax/header_form_conttroler_ajax.php',
        data: {
            'name': name.val(),
            'email': email.val(),
            'messages': messages.val()
        },
        dataType: 'json',
        success: $.proxy(function (data) {

            if (data.error === false) {
                $(".header_form_div small").remove()
                $(".header_form").replaceWith("<div class='alert message alert-info' id='response' role='alert'>" + data.response + "</div>");

                //$(".response").removeClass("alert-danger").addClass("alert-info").html(data.response);

                // name.val('');
                // email.val('');
                // messages.val('');
                // check.removeAttr("checked")
            } else {
                $(".response").removeClass("alert-info").addClass("alert-danger").show('slow').html(data.response);
            }

        }, this)
    });
    $(this).val("Отправка");

});

//Отправка формы и обработка формы в хедере блок banner
$(".response_footer").hide("slow");
$(".footer_send").click(function () {
    var name = $(this).parents(".footer_form").find(".name");
    var email = $(this).parents(".footer_form").find(".email");
    var messages = $(this).parents(".footer_form").find(".messages");
    var razmer = $(this).parents(".footer_form").find(".razmer");
    var color = $(this).parents(".footer_form").find(".color");

    $(this).val("Обработка...");
    $.ajax({
        type: 'POST',
        url: 'ajax/footer_form_conttroler_ajax.php',
        data: {
            'name': name.val(),
            'email': email.val(),
            'messages': messages.val(),
            'razmer': razmer.val(),
            'color': color.val()
            //'check': check.val()
        },
        dataType: 'json',
        success: $.proxy(function (data) {
            if (data.error === false) {
                $(".footer_form_div small").remove()
                $(".footer_form").replaceWith("<div class='alert message alert-info' id='response' role='alert'>" + data.response + "</div>");

                //$(".response").removeClass("alert-danger").addClass("alert-info").html(data.response);

                // name.val('');
                // email.val('');
                // messages.val('');
                // check.removeAttr("checked")
            } else {
                $(".response_footer").removeClass("alert-info").addClass("alert-danger").show('slow').html(data.response);
            }

        }, this)
    });
    $(this).val("Отправка");

});
 