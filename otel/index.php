<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="icon" href="https://volskaya11-book.otelms.com/images/hotel-styles/2084-ludmila/favicon.ico" type="image/x-icon">
    <!-- meta -->
    <meta http-equiv="content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" name="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="г.Саратов,ул.Вольскя,д.11-а, жильё, проживание, Отель, отелей, специальные предложения, пакеты услуг, специальные предложения, предложения на выходные со скидками, предложения в города со скидками, специальные предложения, эконом-класс, дешёвый, со скидкой, недорогой" />
    <meta name="description" content="Большие скидки на бронирование отелей. Ознакомьтесь с отзывами гостей и найдите отели на любой бюджет по гарантированно лучшей цене." />
    <meta name="copyright" content="" />
    <meta name="robots" content="all" />
    <meta property="og:image" content="http://img.guestbe.com/social/bellsmall.jpg" />
    <meta property="og:title" content="Guestbe.com.  Хостел День и Ночь. г.Саратов,ул.Вольскя,д.11-а ." />
    <meta property="og:description" content="Большие скидки на бронирование отелей." />

    <!-- css&fonts&links -->
    <link rel="stylesheet" type="text/css" href="https://volskaya11-book.otelms.com/css/styles.css" />

    <link href="https://volskaya11-book.otelms.com/css/idealforms/idealforms.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://volskaya11-book.otelms.com/css/z_konechnaiy_objav.css" />
    <!--<link href="/css/formstyels.css" rel="stylesheet" />-->
    <link rel="stylesheet" type="text/css" href="https://volskaya11-book.otelms.com/css/style-for-gallery.css" />
    <title> Хостел "День и Ночь". г.Саратов,ул.Вольскя,д.11-а . Забронировать отель. Guestbe.com.</title>





    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://volskaya11-book.otelms.com/js/picorner.js"></script>
    <script type="text/javascript" src="https://volskaya11-book.otelms.com/js/gallery.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.picorner').picorner();
        });
    </script>
    <script type="text/javascript" src="https://volskaya11-book.otelms.com/js/jquery.idealforms.js"></script>
    <script type="text/javascript" src="https://volskaya11-book.otelms.com/js/scripts.id.js"></script>

    <script type="text/javascript" src="https://volskaya11-book.otelms.com/js/tooltip.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("div#link_1").easyTooltip({
                useElement: "item_1"
            });

            $("div#link_2").easyTooltip({
                useElement: "item_2"
            });

            $("div#link_3").easyTooltip({
                useElement: "item_3"
            });


            $(".button2[type=submit]").click(function() {
                var sum = 0;
                $("select[cid] option:selected").each(function() {
                    sum += parseInt($(this).val());
                });

                if (sum == 0) {
                    $('#checkstatus').html("Выберите номер!");
                    return false;
                }

            });

        });
    </script>


    <link media="all" rel="stylesheet" href="https://volskaya11-book.otelms.com/css/jquery-ui-1.8.18.custom.css" type="text/css" />
    <script src="https://volskaya11-book.otelms.com/js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
    <script src="https://volskaya11-book.otelms.com/js/jquery-ui-i18n.js" type="text/javascript"></script>

    <script type="text/javascript" src="https://volskaya11-book.otelms.com/js/cal.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $.datepicker.setDefaults($.datepicker.regional["en"]);

            $('table tr:even').addClass('alternateRow');
            var i = 0;
            for (i = 0; i <= 3; i++) {
                if (document.getElementById("sarea" + i) != null) {
                    var selectContent = document.getElementById("sarea" + i).innerHTML;
                    document.getElementById("sarea" + i).innerHTML = "<a href='javascript:showOptions(" + i + ",false)'>" + selectContent + "</a>";
                }
            }
            $("#fr2").click(function() {
                $("img.ui-datepicker-trigger").trigger("click");

            });
            $("#fr3").click(function() {
                $("img.ui-datepicker-trigger").trigger("click");
            });



            //select all the a tag with name equal to modal
            $('a[name=modal]').click(function(e) {
                //Cancel the link behavior
                e.preventDefault();
                //Get the A tag
                var id = $(this).attr('href');

                //Get the screen height and width
                var maskHeight = $(document).height();
                var maskWidth = $(window).width();

                //Set heigth and width to mask to fill up the whole screen
                $('#mask').css({
                    'width': maskWidth,
                    'height': maskHeight
                });

                //transition effect


                $('#mask').fadeIn(0);
                $('#mask').fadeTo("slow", 0.8);

                //Get the window height and width
                var winH = $(window).height();
                var winW = $(window).width();

                //Set the popup window to center
                //$(id).css('top',  winH/2-$(id).height()/2);
                //$(id).css('top',  winH/2-$(id).height()/2+$(window).scrollTop());
                var top = winH / 2 - $(id).height() / 2 + $(window).scrollTop();
                top = top > 0 ? top : 0;
                top = 50;
                $(id).css('top', top);
                $(id).css('left', winW / 2 - $(id).width() / 2);

                //transition effect
                $(id).fadeIn(0);

            });

            //if close button is clicked
            $('.window .close').click(function(e) {
                //Cancel the link behavior
                e.preventDefault();
                $('#mask, .window').hide();
            });

            //if mask is clicked
            $('#mask').click(function() {
                $(this).hide();
                $('.window').hide();
            });


            $('select[name^=room]').on('change', function(e) {
                $('#checkstatus').html("");

                var sum = 0;
                $("select[cid=" + $(this).attr('cid') + "] option:selected").each(function() {
                    sum += parseInt($(this).val());
                });

                total = $(this).attr('places');
                free = total - sum;
                $('span[cid=' + $(this).attr('cid') + ']').html(free);
                $("select[cid=" + $(this).attr('cid') + "]").each(function() {
                    selected = $(this).val();
                    $(this).children('option').each(function() {
                        if ($(this).val() > parseInt(selected) + free) {
                            $(this).attr('disabled', 'disabled');
                        } else {
                            $(this).siblings().removeAttr('disabled');
                        }
                    });

                });




                /*
                $( "select[cid="+ $(this).attr('cid')+"] option:selected" ).each(function() {
                      $("#theSelect option:selected").attr('disabled','disabled')
                        .siblings().removeAttr('disabled');
                });*/
            });


        });
    </script>
    <link media="all" rel="stylesheet" href="https://volskaya11-book.otelms.com/css/formstyels.css" type="text/css">
    <script src="https://volskaya11-book.otelms.com/js/jquery-btn.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://volskaya11-book.otelms.com/js/mobile.js"></script>





</head>

<body onload="submit()">
    <!-- header -->
    <link href="https://volskaya11-book.otelms.com/themes/3304-style.css" type="text/css" rel="stylesheet">

    <script type="text/javascript">
        var myEventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
        var myEventListener = window[myEventMethod];
        var myEventMessage = myEventMethod == "attachEvent" ? "onmessage" : "message";
        myEventListener(myEventMessage, function(e) {
            if (e.data === parseInt(e.data)) {
                document.getElementById('my-iframe-id').height = e.data + "px";
                console.log(e.data);
            }
        }, false);
    </script>

    <?php date_default_timezone_set( 'Europe/Moscow');
		  $currentdate=date('d/m/Y');
		  $tomorrowdate=new DateTime( 'tomorrow'); ?>
    <span id="today"><?php echo $currentdate;?></span>
    <script type="text/javascript">
        function ascCall() {
            $.post(
                "/ajax/ascCall", {
                    myPhone: $('#myPhone').val(),
                    time4call: $('#time4call').val()
                },
                onAjaxSuccess
            );
            return false;
        }

        function onAjaxSuccess(data) {
            var x = $('#zaholovok').html();
            $('#zaholovok').html("Спасибо");
            $('#mask').hide();

            $('#dialog11').fadeOut(2500).delay(1000).queue(function(next) {
                $(this).hide();
                $("#zaholovok").html(x);
                next();
            });
        }


        $(document).ready(function() {
            $('#helpME').click(function() {
                //			    console.log($("#sh_button").css("display"));
                if ($("#sh_button").css("display") == 'block' || $("#sh_button").css("display") == 'inline-block') {
                    $("#sh_button").click();
                }
                return false;
            });



            $('table tr:even').addClass('alternateRow');
            var i = 0;
            for (i = 0; i <= 3; i++) {
                if (document.getElementById("sarea" + i) != null) {
                    var selectContent = document.getElementById("sarea" + i).innerHTML;
                    document.getElementById("sarea" + i).innerHTML = "<a href='javascript:showOptions(" + i + ",false)'>" + selectContent + "</a>";
                }
            }
            $("#fr2").click(function() {
                $("img.ui-datepicker-trigger").trigger("click");

            });
            $("#fr3").click(function() {
                $("img.ui-datepicker-trigger").trigger("click");
            });



            //select all the a tag with name equal to modal
            $('a[name=modal]').click(function(e) {
                //Cancel the link behavior
                e.preventDefault();
                //Get the A tag
                var id = $(this).attr('href');

                //Get the screen height and width
                var maskHeight = $(document).height();
                var maskWidth = $(window).width();

                //Set heigth and width to mask to fill up the whole screen
                $('#mask').css({
                    'width': maskWidth,
                    'height': maskHeight
                });

                //transition effect


                $('#mask').fadeIn(0);
                $('#mask').fadeTo("slow", 0.8);

                //Get the window height and width
                var winH = $(window).height();
                var winW = $(window).width();

                //Set the popup window to center
                //$(id).css('top',  winH/2-$(id).height()/2);
                //		$(id).css('top',  winH/2-$(id).height()/2+$(window).scrollTop());
                var top = winH / 2 - $(id).height() / 2 + $(window).scrollTop();
                top = top > 0 ? top : 0;
                top = 50;
                $(id).css('top', top);
                $(id).css('left', winW / 2 - $(id).width() / 2);

                //transition effect
                $(id).fadeIn(0);

            });

            //if close button is clicked
            $('.window .close2, .window .close').click(function(e) {
                //Cancel the link behavior
                e.preventDefault();
                $('#mask, .window').hide();
            });

            //if mask is clicked
            $('#mask').click(function() {
                $(this).hide();
                $('.window').hide();
            });


        });
    </script>





    <div id="boxes2">
        <div id="dialog11" class="window">
            <script type="text/javascript">
                $(function() {
                    var tabContainers = $('div.tabs > div');
                    tabContainers.hide().filter(':first').show();

                    $('div.tabs ul.tabNavigation a').click(function() {
                        tabContainers.hide();
                        tabContainers.filter(this.hash).show();
                        $('div.tabs ul.tabNavigation a').removeClass('selected');
                        $(this).addClass('selected');
                        return false;
                    }).filter(':first').click();
                });
            </script>
            <!------------------------------------------------------------------>



            <table id="madal-w" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td class="mw_left_design"></td>
                        <td id="mw_blue_zagolovok"><span id="zaholovok">Заказать
			звонок консультанта</span>
                        </td>
                        <td class="mw_right_design" align="right">
                            <div class="btn_x-2">
                                <a class="close2" href="#"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td class="mw_left"></td>
                        <td class="mw_bgcolorw">
                            <div id="select-result">
                                <form>
                                    <table class="content_style_sirij">
                                        <tr>
                                            <td class=" pad6_8">
                                                <label class="style-blue l">Номер телефона
                                                </label>
                                            </td>
                                            <td class=" pad6_8">
                                                <input type="text" id='myPhone' value="+ 38" size="20" class=" pad6_8" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" pad6_8">
                                                <label class="style-blue l">Время звонка
                                                </label>
                                            </td>
                                            <td class=" pad6_8">
                                                <select id='time4call'>
                                                    <option value="9:00">9:00</option>
                                                    <option value="9:30">9:30</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="10:30">10:30</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="11:30">11:30</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="12:30">12:30</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="13:30">13:30</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="14:30">14:30</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="15:30">15:30</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="16:30">16:30</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="17:30">17:30</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="18:30">18:30</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="19:30">19:30</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="20:30">20:30</option>
                                                    <option value="21:00">21:00</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="mw_footer-2">
                                        <button class="btn_forms_content" type="submit" onclick='ascCall();return false;'>Заказать</button>
                                        или <span class="mw_href_2"> <a class="close2"
				onclick="winClose()" href="#">Отмена</a> </span>
                                    </div>
                                </form>
                            </div>
                        </td>
                        <td class="mw_next3"></td>
                    </tr>
                    <tr>
                        <td class="mw_next4"></td>
                        <td class="mw_next5"></td>
                        <td class="mw_next6"></td>
                    </tr>
                </tbody>
            </table>
        </div>



    </div>

    <!-- Макска, которая затемняет весь экран -->
    <div id="mask"></div>

    <!-- end header -->

    <!-- content -->
    <div id="boxes">

        <div id="waypages">





            <table id="bigbox-c-rbox-2">
                <tr>
                    <td>


                        <table id="rightframe">
                            <tr>
                                <td class="width_5">
                                    <script type="text/javascript" src="https://volskaya11-book.otelms.com/js/hidden.js"></script>

                                    <div>
                                        <table id="rooms2">
                                            <tbody>
                                                <tr class="alternateRow">
                                                    <td class="width_9 pad15 bglight search-data-box">
                                                        <!--<img
								src="/images/icons-cal.png" align="left" />-->
                                                        <div class="marsp">
                                                            <form id="reservations_data" name="frmdata" class="none1" action="https://volskaya11-book.otelms.com/bookit/step1/3304?datein=<?php echo $currentdate;?>&dateout=<?php echo $tomorrowdate->format('d/m/Y');
?>&countplaces=0&discountpromocode=" method="get">

                                                                <div class="icons-cal"></div>
                                                                <div class="fltb">


                                                                    <div class="input"><span class="b">Дата заезда</span>
                                                                        <br />
                                                                        <input class="formm_style stwform" id="from" type="text" name="datein" value="<?php echo $currentdate;?>" />
                                                                    </div>
                                                                </div>
                                                                <div class="fltb">
                                                                    <div class="input"><span class="b">Дата отъезда</span>
                                                                        <br />
                                                                        <input class="formm_style stwform" id="to" type="text" name="dateout" value="<?php echo $tomorrowdate->format('d/m/Y');?>" />
                                                                    </div>
                                                                </div>

                                                                <input type="hidden" name="countplaces" value="0">
                                                                <div class="fltb">
                                                                    <div class="input"><span class="b">Промокод</span>
                                                                        <br />
                                                                        <input class="formm_style width_promo" id="discountpromocode" type="text" name="discountpromocode" value="" />
                                                                    </div>
                                                                </div>
                                                                <input class="button3 gr" type="submit" value="Проверить наличие мест" />





                                                            </form>

                                                            <script>
                                                                //document.getElementById('reservations_data').submit()
                                                            </script>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>


</body>

</html>