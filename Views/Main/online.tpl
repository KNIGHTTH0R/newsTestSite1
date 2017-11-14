{extends file='../layout.tpl'}
{block name=body}
    <style>
        .onlineWidget,.panel{

            background-color:#F9F9F9;
            border:2px solid #FFFFFF;
            height:25px;
            padding:4px 8px;
            position:relative;
            width:130px;

            cursor:pointer;

            /* CSS3 правила для закругленных углов и теней: */

            -moz-border-radius:6px;
            -webkit-border-radius:6px;
            border-radius:6px;

            -moz-box-shadow:0 0 3px #CCCCCC;
            -webkit-box-shadow:0 0 3px #CCCCCC;
            box-shadow:0 0 3px #CCCCCC;

            text-shadow:0 2px 0 white;
        }

        .onlineWidget:hover{
            background-color:#fcfcfc;
        }

        .onlineWidget:hover .arrow{
            /* Меняем фоновое изображение для зеленой стрелки при наведении: */
            background-position:bottom center;
        }

        .count{
            /* Общее количество человек онлайн - div */

            color:#777777;
            float:left;
            font-size:26px;
            font-weight:bold;
            margin-top:-3px;
            text-align:center;
            width:30px;
        }

        .label{
            /* Ярлык - online */

            float:left;
            font-size:10px;
            padding:7px 0 0 7px;
            text-transform:uppercase;
        }
        .arrow{
            /* Зеленая стрелочка справа */

            background:url(img/arrow.png) no-repeat top center;
            position:absolute;
            right:6px;

            width:25px;
            height:25px;
        }

        .panel{
            /* Выезжающая панель */

            position:absolute;
            cursor:default;

            bottom:50px;
            left:0;
            height:auto;
            display:none;
            margin:-2px;
            z-index:1000;
        }

        .preloader{
            /* Вращающийся прелоадер gif */
            display:block;
            margin:10px auto;
        }

        .geoRow{
            /* div, который содержит каждую страну */

            height:16px;
            overflow:hidden;
            padding:2px 0;
        }

        .flag{
            float:left;
            margin:0 4px;
        }

        .country, .people{
            float:left;
            font-size:10px;
            padding:2px;
        }

        .country{
            width:85px;
            overflow:hidden;
        }

        .people{
            font-weight:bold;
        }
    </style>







    <div class="onlineWidget">

        <div class="panel">

            <!-- Спарсено с помощью AJAX: -->

            <div class="geoRow">
                <div class="flag"><img src="who-is-online/img/famfamfam-countryflags/us.gif" width="16" height="11"></div>
                <div class="country" title="UNITED STATES">UNITED STATES</div>
                <div class="people">2</div>
            </div>

            <div class="geoRow">
                <div class="flag"><img src="who-is-online/img/famfamfam-countryflags/uk.gif" width="16" height="11"></div>
                <div class="country" title="UNITED KINGDOM">UNITED KINGDOM</div>
                <div class="people">1</div>
            </div>

        </div>

        <div class="count">8</div>
        <div class="label">online</div>
        <div class="arrow"></div>
    </div>




{/block}