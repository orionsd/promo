<?php
$title = 'Промо «Поколение NEXT»';
include_once($_SERVER['DOCUMENT_ROOT'] . '/layouts/head.php');
?>

<body>

<!--Modal form-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Заполните форму</h4>
            </div>

            <div class="modal-body">

                <form id="reg_form">
                    <div class="form-group">
                        <input class="form-control" id="surname" name="surname" aria-describedby="surname"
                               placeholder="Фамилия*" required/>
                    </div>

                    <div class="form-group">
                        <input class="form-control" id="name" name="name" aria-describedby="name" placeholder="Имя*"
                               required/>
                    </div>

                    <div class="form-group">
                        <input class="form-control" id="otch" name="otch" aria-describedby="otch"
                               placeholder="Отчество*" required/>
                    </div>

                    <div class="form-group">
                        <input class="form-control" id="snum" name="snum" aria-describedby="snum"
                               placeholder="Номер соглашения"/>
                        <small id="snum" class="form-text text-muted">если вы не являетесь партнером, оставьте поле
                            пустым.
                        </small>
                    </div>

                    <div class="form-group">
                        <input class="form-control" id="city" name="city" aria-describedby="city" placeholder="Город*"
                               required/>
                    </div>

                    <div class="form-group">
                        <input class="form-control" id="phone" name="phone" aria-describedby="phone"
                               placeholder="Телефон*" required/>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email"
                               placeholder="Email*" required/>
                    </div>
                    <input type="hidden" name="action" value="registration">

                    <div class="modal-submit-wrapper clearfix">
                        <button type="submit" class="btn btn-primary modal-submit">Зарегистрироваться</button>

                        <div class="lds-css ng-scope">
                            <div style="width:100%;height:100%" class="lds-rolling">
                                <div></div>
                            </div>
                        </div>

                    </div>

                    <div id="res_info"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Modal form end-->

<section class="section section-promotion">
    <div class="container">
        <div class="row">
            <div class="col-md-6 section-promotion-left">
                <h1 class="promotion-head">Promo

                <span class="promotion-head-crown" data-toggle="popover" data-placement="left" data-trigger="hover"
                      data-content="Партнеры (дистрибьютеры) корпорации &laquo;Ли Вест&raquo;">
                <img src="/assets/img/crown-icon.png" alt=""/>
                </span>
                    <span class="promotion-head-graduate" data-toggle="popover" data-placement="left"
                          data-trigger="hover"
                          data-content="Новые партнеры (дистрибьютеры) корпорации &laquo;Ли Вест&raquo;">
                <img src="/assets/img/graduated-icon.png" alt=""/>
                </span>
                </h1>

                <span class="promotion-slogan promotion-slogan_red">Построй бизнес-команду</span>

                <div class="clear"></div>
                <h1 class="promotion-slogan">за 6 месяцев и получи <br/>
                    двойной бонус!<span class="promotion-slogan promotion-slogan_red-text">*</span></h1>

                <div class="btn-wrapper btn-wrapper-promo">
                    <a class="take-part-btn" href="#" data-toggle="modal" data-target="#myModal">Я Участвую!</a>
                </div>
            </div>

            <div class="col-md-6 section-promotion-right">
                <div class="one">
                    <img src="assets/img/one-2.png" alt=""/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-conditions">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title">Условия</h1>
            </div>
        </div>
        <div class="row">

            <div class="column column-conditions">

                <div class="col-md-4">
                    <div class="column-item column-item-one">
                        <div class="column-img column-img-01">
                        </div>
                        <div class="column-info">
                            <p class="column-text">Выполняй Личный объём (ЛО) не менее <span class="column-text_red">75 баллов</span>
                                ежемесячно.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="column-item column-item-two">
                        <div class="column-img column-img-02">
                        </div>
                        <div class="column-info">
                            <p class="column-text"> Подпиши лично <span class="column-text_red">6-х партнеров</span>
                                (ежемесячно по 1 партнеру), с
                                ЛО более
                                <span class="column-text_red">100 баллов</span> (или выше) в месяц подписания.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="column-item">
                        <div class="column-img column-img-03">
                        </div>
                        <div class="column-info">
                            <p class="column-text"> Мотивируй новых партнеров <span class="column-text_red">сохранять активность</span>
                                в течение
                                промо с ЛО не менее <span class="column-text_red">50 баллов</span> и выложить фото с
                                продукцией в социальных сетях
                                (ВКонтакте,
                                Instagram, Facebook) c хэштегом <span class="column-text_red"><b>#ЯЛиВест.</b></span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">

            <div class="details col-md-12">

                <p class="details-text"><i>Начни с любого месяца в период с <b>1 Апреля по 31 августа 2018 г.</b></i>
                </p>

                <p class="details-text"><i>Длительность промоушна — 6 месяцев с момента старта</i></p>

                <p class="details-text"><i>В промо «1+1» НЕ могут принимать участие руководители, сотрудники ИСЦ, а
                        также их родственники.</i></p>

                <p class="details-text"><i>*Двойной бонус – премия за выполненные условия данного промо.</i></p>

            </div>
        </div>
    </div>
</section>


<section class="section section-graph">
    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="graph-image-container">
                    <img class="graph-image graph-image-01" src="assets/img/graph_bg-01-sm.png" alt=""/>
                    <img class="graph-image graph-image-02" src="assets/img/graph_bg-02-sm.png" alt=""/>
                    <img class="graph-image graph-image-03" src="assets/img/graph_bg-03-sm.png" alt=""/>
                    <img class="graph-image graph-image-04" src="assets/img/graph_bg-04-sm.png" alt=""/>
                    <img class="graph-image graph-image-05" src="assets/img/graph_bg-05-sm.png" alt=""/>
                    <img class="graph-image graph-image-06" src="assets/img/graph_bg-06-sm.png" alt=""/>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">

                <div class="graph-info">

                    <h1 class="title title_red">Выберите один из вариантов <br/> выполнения промоушна:</h1>

                    <p class="graph-text"><span class="graph-text_red">«1+1»</span> &#8212; подписывать каждый месяц по
                        одному
                        партнеру. </p>
                    <h5 class="graph-price">Премия 10 000 рублей</h5>

                    <p class="graph-text"><span class="graph-text_red">«1+2»</span> &#8212; подписывать каждый месяц по
                        два партнера.</p>
                    <h5 class="graph-price">Премия 20 000 рублей</h5>

                    <p class="graph-text"><span class="graph-text_red">«1+5»</span> &#8212; подписывать каждый месяц по
                        пять партнеров. </p>
                    <h5 class="graph-price graph-price-last">Премия 50 000 рублей</h5>

                    <p class="graph-text-02"><span class="graph-text-02_red">NB!</span> для одновременного участия в
                        двух промо <b>«1+1»</b> и <b>«23»</b>
                        условия по подписанию партнёров складываются </p>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="section section-success">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1 class="title title_success">Твой путь к успеху!</h1>
            </div>
        </div>

        <div class="row">
            <div class="column column-success">
                <div class="col-md-4">
                    <div class="column-item column-item-one">
                        <div class="column-img column-img-01">
                        </div>
                        <div class="column-info">
                            <p class="column-text">Сохраняй <br/>
                                активность
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="column-item column-item-two">
                        <div class="column-img column-img-02">
                        </div>
                        <div class="column-info">
                            <p class="column-text"> Обучай <br/>
                                новичков</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="column-item">
                        <div class="column-img column-img-03">
                        </div>
                        <div class="column-info">
                            <p class="column-text">Получи устойчивую <br/>
                                структуру</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="btn-wrapper btn-wrapper-success">
                    <a class="take-part-btn" href="#" data-toggle="modal" data-target="#myModal">Я Участвую!</a>
                </div>

            </div>
        </div>


    </div>
</section>


<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/layouts/footer.php'); ?>

</body>
</html>