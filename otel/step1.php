<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="icon" href="/otel/images/hotel-styles/2084-ludmila/favicon.ico" type="image/x-icon">
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
    <link rel="stylesheet" type="text/css" href="/otel/css/styles.css" />

    <link href="/otel/css/idealforms/idealforms.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/otel/css/z_konechnaiy_objav.css" />
    <!--<link href="/css/formstyels.css" rel="stylesheet" />-->
    <link rel="stylesheet" type="text/css" href="/otel/css/style-for-gallery.css" />
    <title> Хостел "День и Ночь". г.Саратов,ул.Вольскя,д.11-а . Забронировать отель. Guestbe.com.</title>





    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="/otel/js/picorner.js"></script>
    <script type="text/javascript" src="/otel/js/gallery.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.picorner').picorner();
        });
    </script>
    <script type="text/javascript" src="/otel/js/jquery.idealforms.js"></script>
    <script type="text/javascript" src="/otel/js/scripts.id.js"></script>

    <script type="text/javascript" src="/otel/js/tooltip.js"></script>
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


    <link media="all" rel="stylesheet" href="/otel/css/jquery-ui-1.8.18.custom.css" type="text/css" />
    <script src="/otel/js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
    <script src="/otel/js/jquery-ui-i18n.js" type="text/javascript"></script>

    <script type="text/javascript" src="/otel/js/cal.js"></script>

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
    <link media="all" rel="stylesheet" href="/otel/css/formstyels.css" type="text/css">
    <script src="/otel/js/jquery-btn.js" type="text/javascript"></script>
    <script type="text/javascript" src="/otel/js/mobile.js"></script>





</head>

<body onload="submit()">
    <!-- header -->
    <link href="/otel/themes/3304-style.css" type="text/css" rel="stylesheet">

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

    <?php date_default_timezone_set( 'Europe/Moscow'); $currentdate=date( 'd/m/Y'); $tomorrowdate=new DateTime( 'tomorrow'); ?>
    
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
                                    <script type="text/javascript" src="/otel/js/hidden.js"></script>

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
                                                                document.getElementById('reservations_data').submit()
                                                            </script>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>



                                    <p class="st-red"></p>


                                    <main>


                                        <!-- <div id="number-of-places2">
                
					<a href="/bookit/step1/3304?datein=25/03/2016&dateout=25/03/2016&countplaces=0&discountpromocode=" class="palces_all select-palce"><span>...</span></a>
				
					<a href="/bookit/step1/3304?datein=25/03/2016&dateout=25/03/2016&countplaces=1&discountpromocode=" class="palces_number"><span>1</span></a>
				 -->
        </div>
        <form name="frmdata" action="/otel/bookit/step1_post/3304?datein=26%2F03%2F2016&dateout=27%2F03%2F2016&countplaces=0&discountpromocode=" method="post" class="none1" />
        <table id="rooms3">
            <tr class="bglight-2 alternateRow">
                <td class="pad6_8 br-w">Тип размещения</td>
                <td class="l pad6_8 w4 br-w">Условия</td>
                <td class="c pad6_8 w5 br-w" nowrap="nowrap">К-во гостей</td>
                <td class="r pad6_8 w3 br-w">Цена</td>
                <td class="c pad6_8 w4 br-w">Количество</td>
                <td class="c pad6_8 w2">Бронирование</td>
            </tr>

            <tr class="color-box td-left-st-t">
                <td rowspan="1" class="br-br pad6_8 w-img td-left-st td-left-st2-l">
                    <a title="" name='modal' href="#dialog3"><img <img alt="место в четырёхместном женском номере" title="место в четырёхместном женском номере" align="left" class="w-im sm-img" src="http://img.guestbe.com/himages/3304_3_1_100.jpg" />
                    </a>
                    <span class="rb">
				<acronym title="Просмотреть полностью" onclick="javascript:unhide('ctr3');">
				<img id="imgctr3" src="/otel/images/arrow_closed.png" style="vertical-align: middle"/>
				<a href="javascript:unhide('ctr3');" onclick="javascript:unhide('ctr3');">
				место в четырёхместном женском номере
				</a>
				</acronym>
				</span>
                    <input type="hidden" name="room[0][id]" value="3">
                    <br />
                    <p class="pdv20">
                        Цены указаны ЗА МЕСТО.
                    </p>
                </td>
                <td rowspan="1" class="l br-br  pad6_8 td-left-st">
                    <div class="spec-info">
                        <span class="sumbol-usl">&bull;</span>
                        <div id="link_1">
                            <span class="uslov-st">
                                БЕСПЛАТНАЯ отмена бронирования
                                </span>
                            <span class="c uslov-inf"><a href="" >?</a></span>
                        </div>
                    </div>
                    <div class="spec-info">
                        <span class="sumbol-usl">&bull;</span>
                        <div id="link_1">
                            <span class="uslov-st">
                                Без завтрака
                                </span>
                        </div>
                    </div>

                    <div id="item_1" style="display:none;">

                    </div>
                </td>


                <td class="c br-br  pad6_8 td-left-st">
                    <p class="numberofguests">
                        <div class="men-icon men-icon-1"></div>
                    </p>
                </td>
                <td class="price_room br-br pad6_8 td-left-st c" nowrap="nowrap">
                    <div>
                        <p class="textstyle_8b2"> 400.00 руб </p>
                        <input type="hidden" name="room[0][amount]" value="400">
                        <input type="hidden" name="room[0][add_places]" value="0">
                        <input type="hidden" name="room[0][category_id]" value="3" />
                        <input type="hidden" name="room[0][rate_id]" value="1" />
                        <input type="hidden" name="room[0][name]" value="место в четырёхместном женском номере" />
                        <input type="hidden" name="room[0][add_price]" value="0" />
                        <br/>
                    </div>
                </td>
                <td class="c pad6_8 td-left-st">
                    <select name='room[0][count]' class=" outtaHere" cid="3" places="3">
                        <option value='0'>Выбрать</option>
                        <option value='1'>1 (400.00 руб)</option>
                        <option value='2'>2 (800.00 руб)</option>
                        <option value='3'>3 (1200.00 руб)</option>
                    </select>
                    <input type="hidden" name="room[0][nonrefundable]" value="0">
                    <div>
                        <span class="ostalosnomerov">Осталось  <span cid="3">3</span></span>
                    </div>
                </td>
                <td class="c br-br pad6_8 sttd-btn_booking" rowspan="5">
                    <aside id="btn-fix">
                        <div class="wrapper-fix">
                            <input class="button2 green " type="submit" value="Забронировать">
                            <br>
                            <span id="checkstatus" style="font-size:14pt;color:red;"></span>
                        </div>
                    </aside>
                </td>
            </tr>





            <tr class="br-br5 alternateRow">
                <td class="hiden_content td-left-st td-left-st-l" colspan="5">
                    <div id="ctr3" class="hidden">
                        <div class="hiden-box">
                            <a class="close1 floatright" href="javascript:unhide('ctr3');" title="Закрыть"> <span></span>
                            </a> <img alt='место в четырёхместном женском номере, 1' title='место в четырёхместном женском номере, 1' class="sm-img" src="http://img.guestbe.com/himages/3304_3_1_100.jpg" />
                            <img alt='место в четырёхместном женском номере, 2' title='место в четырёхместном женском номере, 2' class="sm-img" src="http://img.guestbe.com/himages/3304_3_2_100.jpg" />
                            <img alt='место в четырёхместном женском номере, 3' title='место в четырёхместном женском номере, 3' class="sm-img" src="http://img.guestbe.com/himages/3304_3_3_100.jpg" />
                            <img alt='место в четырёхместном женском номере, 4' title='место в четырёхместном женском номере, 4' class="sm-img" src="http://img.guestbe.com/himages/3304_3_4_100.jpg" />


                            <p class="t-ooms">Две двухярусные кровати с ортопедическими матрасами, шкаф купе для одежды и индивидуальные шкафы ячейки с замками, зеркало, постельные принадлежности, полотенце,тапочки.журнальный столик,индивидуальные осветительные приборы.</p>
                        </div>
                    </div>
                </td>
            </tr>
            <div id="dialog3" class="window">
                <a href="#" class="close close1" /><span></span>
                </a>
                <div class="grid_5 alpha">
                    <div class="madia_gallery">
                        <div class="media_gallery">
                            <div class="screen">
                                <div class="mid_photos">

                                    <div class="img_wrap">
                                        <a class="group1" target="_blank" href="http://img.guestbe.com/himages/3304_3_1_500.jpg" onClick="return false">
                                            <img class="img_main" alt='' title='' src="http://img.guestbe.com/himages/3304_3_1_500.jpg" />
                                        </a>
                                    </div>

                                    <div class="img_wrap">
                                        <a class="group1" target="_blank" href="http://img.guestbe.com/himages/3304_3_2_500.jpg" onClick="return false">
                                            <img class="img_main" alt='' title='' src="http://img.guestbe.com/himages/3304_3_2_500.jpg" />
                                        </a>
                                    </div>

                                    <div class="img_wrap">
                                        <a class="group1" target="_blank" href="http://img.guestbe.com/himages/3304_3_3_500.jpg" onClick="return false">
                                            <img class="img_main" alt='' title='' src="http://img.guestbe.com/himages/3304_3_3_500.jpg" />
                                        </a>
                                    </div>

                                    <div class="img_wrap">
                                        <a class="group1" target="_blank" href="http://img.guestbe.com/himages/3304_3_4_500.jpg" onClick="return false">
                                            <img class="img_main" alt='' title='' src="http://img.guestbe.com/himages/3304_3_4_500.jpg" />
                                        </a>
                                    </div>

                                </div>
                                <div class="status_overlay"></div>
                                <div class="buttons">
                                    <div class="prev"></div>
                                    <div class="next"></div>
                                    <div class="showall">место в четырёхместном женском номере</div>
                                </div>
                            </div>
                            <div class="tape">
                                <div class="small_photos">

                                    <div class="img_wrap"><img alt='' title='' src="http://img.guestbe.com/himages/3304_3_1_500.jpg" />
                                    </div>

                                    <div class="img_wrap"><img alt='' title='' src="http://img.guestbe.com/himages/3304_3_2_500.jpg" />
                                    </div>

                                    <div class="img_wrap"><img alt='' title='' src="http://img.guestbe.com/himages/3304_3_3_500.jpg" />
                                    </div>

                                    <div class="img_wrap"><img alt='' title='' src="http://img.guestbe.com/himages/3304_3_4_500.jpg" />
                                    </div>

                                </div>
                                <div class="buttons">
                                    <div class="prev"></div>
                                    <div class="next"></div>
                                </div>
                            </div>
                            <!--<div class="foto_count">5</div>-->
                        </div>
                    </div>
                </div>
            </div>



            <tr class="color-box td-left-st-t">
                <td rowspan="1" class="br-br pad6_8 w-img td-left-st td-left-st2-l">
                    <a title="" name='modal' href="#dialog4"><img <img alt="место в шестиместном мужском" title="место в шестиместном мужском" align="left" class="w-im sm-img" src="http://img.guestbe.com/himages/3304_4_1_100.jpg" />
                    </a>
                    <span class="rb">
				<acronym title="Просмотреть полностью" onclick="javascript:unhide('ctr4');">
				<img id="imgctr4" src="/otel/images/arrow_closed.png" style="vertical-align: middle"/>
				<a href="javascript:unhide('ctr4');" onclick="javascript:unhide('ctr4');">
				место в шестиместном мужском
				</a>
				</acronym>
				</span>
                    <input type="hidden" name="room[1][id]" value="4">
                    <br />
                    <p class="pdv20">
                        Цены указаны ЗА МЕСТО.
                    </p>
                </td>
                <td rowspan="1" class="l br-br  pad6_8 td-left-st">
                    <div class="spec-info">
                        <span class="sumbol-usl">&bull;</span>
                        <div id="link_2">
                            <span class="uslov-st">
                                БЕСПЛАТНАЯ отмена бронирования
                                </span>
                            <span class="c uslov-inf"><a href="" >?</a></span>
                        </div>
                    </div>
                    <div class="spec-info">
                        <span class="sumbol-usl">&bull;</span>
                        <div id="link_2">
                            <span class="uslov-st">
                                Без завтрака
                                </span>
                        </div>
                    </div>

                    <div id="item_2" style="display:none;">

                    </div>
                </td>


                <td class="c br-br  pad6_8 td-left-st">
                    <p class="numberofguests">
                        <div class="men-icon men-icon-1"></div>
                    </p>
                </td>
                <td class="price_room br-br pad6_8 td-left-st c" nowrap="nowrap">
                    <div>
                        <p class="textstyle_8b2"> 400.00 руб </p>
                        <input type="hidden" name="room[1][amount]" value="400">
                        <input type="hidden" name="room[1][add_places]" value="0">
                        <input type="hidden" name="room[1][category_id]" value="4" />
                        <input type="hidden" name="room[1][rate_id]" value="1" />
                        <input type="hidden" name="room[1][name]" value="место в шестиместном мужском" />
                        <input type="hidden" name="room[1][add_price]" value="0" />
                        <br/>
                    </div>
                </td>
                <td class="c pad6_8 td-left-st">
                    <select name='room[1][count]' class=" outtaHere" cid="4" places="1">
                        <option value='0'>Выбрать</option>
                        <option value='1'>1 (400.00 руб)</option>
                    </select>
                    <input type="hidden" name="room[1][nonrefundable]" value="0">
                    <div>
                        <span class="ostalosnomerov">Осталось  <span cid="4">1</span></span>
                    </div>
                </td>

            </tr>





            <tr class="br-br5 alternateRow">
                <td class="hiden_content td-left-st td-left-st-l" colspan="5">
                    <div id="ctr4" class="hidden">
                        <div class="hiden-box">
                            <a class="close1 floatright" href="javascript:unhide('ctr4');" title="Закрыть"> <span></span>
                            </a> <img alt='место в шестиместном мужском, 1' title='место в шестиместном мужском, 1' class="sm-img" src="http://img.guestbe.com/himages/3304_4_1_100.jpg" />
                            <img alt='место в шестиместном мужском, 2' title='место в шестиместном мужском, 2' class="sm-img" src="http://img.guestbe.com/himages/3304_4_2_100.jpg" />
                            <img alt='место в шестиместном мужском, 3' title='место в шестиместном мужском, 3' class="sm-img" src="http://img.guestbe.com/himages/3304_4_3_100.jpg" />
                            <img alt='место в шестиместном мужском, 4' title='место в шестиместном мужском, 4' class="sm-img" src="http://img.guestbe.com/himages/3304_4_4_100.jpg" />


                            <p class="t-ooms">Три двухярусные кровати с ортопедическими матрасами, вешалка для одежды и индивидуальные шкафы ячейки с замками,журнальный стол,постельные принадлежности, полотенце тапочки,индивидуальные приборы освещения </p>
                        </div>
                    </div>
                </td>
            </tr>
            <div id="dialog4" class="window">
                <a href="#" class="close close1" /><span></span>
                </a>
                <div class="grid_5 alpha">
                    <div class="madia_gallery">
                        <div class="media_gallery">
                            <div class="screen">
                                <div class="mid_photos">

                                    <div class="img_wrap">
                                        <a class="group1" target="_blank" href="http://img.guestbe.com/himages/3304_4_1_500.jpg" onClick="return false">
                                            <img class="img_main" alt='' title='' src="http://img.guestbe.com/himages/3304_4_1_500.jpg" />
                                        </a>
                                    </div>

                                    <div class="img_wrap">
                                        <a class="group1" target="_blank" href="http://img.guestbe.com/himages/3304_4_2_500.jpg" onClick="return false">
                                            <img class="img_main" alt='' title='' src="http://img.guestbe.com/himages/3304_4_2_500.jpg" />
                                        </a>
                                    </div>

                                    <div class="img_wrap">
                                        <a class="group1" target="_blank" href="http://img.guestbe.com/himages/3304_4_3_500.jpg" onClick="return false">
                                            <img class="img_main" alt='' title='' src="http://img.guestbe.com/himages/3304_4_3_500.jpg" />
                                        </a>
                                    </div>

                                    <div class="img_wrap">
                                        <a class="group1" target="_blank" href="http://img.guestbe.com/himages/3304_4_4_500.jpg" onClick="return false">
                                            <img class="img_main" alt='' title='' src="http://img.guestbe.com/himages/3304_4_4_500.jpg" />
                                        </a>
                                    </div>

                                </div>
                                <div class="status_overlay"></div>
                                <div class="buttons">
                                    <div class="prev"></div>
                                    <div class="next"></div>
                                    <div class="showall">место в шестиместном мужском</div>
                                </div>
                            </div>
                            <div class="tape">
                                <div class="small_photos">

                                    <div class="img_wrap"><img alt='' title='' src="http://img.guestbe.com/himages/3304_4_1_500.jpg" />
                                    </div>

                                    <div class="img_wrap"><img alt='' title='' src="http://img.guestbe.com/himages/3304_4_2_500.jpg" />
                                    </div>

                                    <div class="img_wrap"><img alt='' title='' src="http://img.guestbe.com/himages/3304_4_3_500.jpg" />
                                    </div>

                                    <div class="img_wrap"><img alt='' title='' src="http://img.guestbe.com/himages/3304_4_4_500.jpg" />
                                    </div>

                                </div>
                                <div class="buttons">
                                    <div class="prev"></div>
                                    <div class="next"></div>
                                </div>
                            </div>
                            <!--<div class="foto_count">5</div>-->
                        </div>
                    </div>
                </div>
            </div>




        </table>

        </main>
        <footer></footer>
        <!-------------------- start fix btn -------------------->
        <style>
            .sticky {
                position: fixed;
                z-index: 101;
            }
            .stop {
                position: relative;
                z-index: 101;
            }
        </style>

        <script>
            (function() {
                var a = document.querySelector('#btn-fix'),
                    b = null,
                    P = 4; // если ноль заменить на число, то блок будет прилипать до того, как верхний край окна браузера дойдёт до верхнего края элемента. Может быть отрицательным числом
                window.addEventListener('scroll', Ascroll, false);
                document.body.addEventListener('scroll', Ascroll, false);

                function Ascroll() {
                    if (b == null) {
                        var Sa = getComputedStyle(a, ''),
                            s = '';
                        for (var i = 0; i < Sa.length; i++) {
                            if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
                                s += Sa[i] + ': ' + Sa.getPropertyValue(Sa[i]) + '; '
                            }
                        }
                        b = document.createElement('div');
                        b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
                        a.insertBefore(b, a.firstChild);
                        var l = a.childNodes.length;
                        for (var i = 1; i < l; i++) {
                            b.appendChild(a.childNodes[1]);
                        }
                        a.style.height = b.getBoundingClientRect().height + 'px';
                        a.style.padding = '0';
                        a.style.border = '0';
                    }
                    var Ra = a.getBoundingClientRect(),
                        R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('footer').getBoundingClientRect().top + 4); // селектор блока, при достижении верхнего края которого нужно открепить прилипающий элемент;  Math.round() только для IE; если ноль заменить на число, то блок будет прилипать до того, как нижний край элемента дойдёт до футера
                    if ((Ra.top - P) <= 0) {
                        if ((Ra.top - P) <= R) {
                            b.className = 'stop';
                            b.style.top = -R + 'px';
                        } else {
                            b.className = 'sticky';
                            b.style.top = P + 'px';
                        }
                    } else {
                        b.className = '';
                        b.style.top = '';
                    }
                    window.addEventListener('resize', function() {
                        a.children[0].style.width = getComputedStyle(a, '').width
                    }, false);
                }
            })()
        </script>
        <!-------------------- end fix btn -------------------->

        <table id="rooms2">
            <tbody>
                <tr class="alternateRow">
                    <td class="width_9 pad15 bglight search-data-box">

                        <div class="rooms-day">
                            <table class="desk-cal">
                                <tr class="title-rooms">

                                    <td>
                                        Пт
                                        <br><span>25</span>
                                        <br><span style="font-size:10px">Мар </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Сб
                                        <br><span>26</span>
                                        <br><span style="font-size:10px">Мар </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Во
                                        <br><span>27</span>
                                        <br><span style="font-size:10px">Мар </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Пн
                                        <br><span>28</span>
                                        <br><span style="font-size:10px">Мар </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Вт
                                        <br><span>29</span>
                                        <br><span style="font-size:10px">Мар </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Ср
                                        <br><span>30</span>
                                        <br><span style="font-size:10px">Мар </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Чт
                                        <br><span>31</span>
                                        <br><span style="font-size:10px">Мар </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Пт
                                        <br><span>01</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Сб
                                        <br><span>02</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Во
                                        <br><span>03</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Пн
                                        <br><span>04</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Вт
                                        <br><span>05</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Ср
                                        <br><span>06</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Чт
                                        <br><span>07</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Пт
                                        <br><span>08</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Сб
                                        <br><span>09</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Во
                                        <br><span>10</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Пн
                                        <br><span>11</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Вт
                                        <br><span>12</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Ср
                                        <br><span>13</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                    <td>
                                        Чт
                                        <br><span>14</span>
                                        <br><span style="font-size:10px">Апр </span>
                                        <!--(2016)-->
                                    </td>

                                </tr>

                                <tr class="deck-title-st">
                                    <td colspan="100">
                                        двухместный с 1 двухспальной кроватью
                                    </td>
                                </tr>
                                <tr>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="100" class="line-w">
                                        <div></div>
                                    </td>
                                </tr>

                                <tr class="deck-title-st">
                                    <td colspan="100">
                                        место в четырёхместном женском номере
                                    </td>
                                </tr>
                                <tr>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-close">
                                            <span>-</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="100" class="line-w">
                                        <div></div>
                                    </td>
                                </tr>

                                <tr class="deck-title-st">
                                    <td colspan="100">
                                        место в шестиместном мужском
                                    </td>
                                </tr>
                                <tr>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                    <td style="padding:0px!important;">
                                        <div class="rooms-open">
                                            <span>+</span>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="100" class="line-w">
                                        <div></div>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>





        </td>
        </tr>
        </table>

        </td>
        </tr>
        </table>

        <script type="text/javascript" src="/otel/js/resize_imgs.js"></script>
        <script type="text/javascript" src="/otel/js/media_gallery.js"></script>
        <div id="mask"></div>





    </div>
    <script src="/otel/js/ifr.js"></script>
    <!-- end content -->
    <!-- bookitter -->
    <script src="/otel/js/iframeResizer.contentWindow.min.js"></script>
    <script src="/otel/js/ifr.js"></script>
    <!-- end bookitter -->

</body>

</html>