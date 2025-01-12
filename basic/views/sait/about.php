<?php
    $this->title="О конференции";
    use yii\helpers\Html;
?>
<div class="container">
    <div class="row text-center">
        <div class="col-md-6">
            <h3 class="section-heading text">Программа конференции</h3>
            <p class="text-left">Научная программа конференции охватывает следующие направления: уравнения с частными производными, уравнения математической физики, обыкновенные дифференциальные уравнения, динамические системы, теория операторов, спектральная теория, математическое моделирование.<br>Программа конференции предполагает доклады приглашенных ученых (30 минут), пленарные доклады (30 минут), краткие сообщения (15 минут) и стендовые доклады.
            </p>
            <h3 class="section-heading text">Основные секции конференции</h3>
            <ul>
                <li><p class="text-left">Неклассические задачи математической физики<br></li>
                <li><p class="text-left">Вырождающиеся уравнения и уравнения смешанного типа<br></li>
                <li><p class="text-left">Спектральная теория дифференциальных операторов<br></li>
                <li><p class="text-left">Динамические системы, оптимальные управления и теория дифференциальных игр<br></li>
                <li><p class="text-left">Математическое моделирование и вычислительная математика<br></li>
            </ul>
            <h3 class="section-heading text-center">Рабочие языки конференции</h3>
            <p class="text-left">Русский, Английский</p>
            <h3 class="section-heading text-left">Прием заявок и тезисов докладов</h3>
            <p class="text-left">
            Желающие принять участие в работе конференции представляют в Оргкомитет <span style="text-decoration:line-through">до 30 июня 2022 г.</span><strong>до 20 июля 2022 г.</strong> тезисы докладов и заявки в разделе <a class="text-warning" href="index.php?r=sait/registration">"Регистрация"</a>.<br> Публикация сборника тезисов не планируется. Доклады в полном объеме, рекомендованные Программным комитетом, будут опубликованы в рейтинговых журналах (Вестник БГУ, Вестник НГУ, Математические заметки СВФУ и др.)<br>
            Приглашения и дополнительная информация будут высланы после рассмотрения представленных тезисов данным комитетом.
            </p>
        </div>
        <div class="col-md-6">
            <h3 class="section-heading text-center">Место проведения конференции</h3>
            <p class="text-left">Основная работа и размещение участников  конференции планируется на берегу озера Байкал, с. Максимиха, пансионат "Байкал".
            </p>
            <h3 class="section-heading text-center">Регистрационный взнос и размещение</h3>
            <p class="text-left">
            Регистрационный взнос для участников конференции установлен ориентировочно в размере:<br>
            3000 р. – очное участие,<br>
            1000 р. – дистанционное участие.<br>
            Оплата производится после получения уведомления о включении доклада в программу.<br> Регистрационный взнос не включает проживание и питание участников во время конференции.
            </p>
            <p class="text-left">Размещение на берегу озера Байкал, в Баргузинском заливе находится база отдыха "Колос". Ближайший крупный населенный пункт - г. Улан-Удэ, расстояние - 234 километра.<br>Размещение базы отдыха предполагает проживание в деревянных 1 и 2-этажных коттеджах с частичными удобствами.<br>
            <?= Html::img('@web/img/kolos.jpg',['alt' => 'kolos', 'style' => 'width: 100%; height: 100%']); ?></p>
            <p class="text-left">Просим вас ознакомиться с документом для бронирования номеров:<br>
            <?= Html::a('Стоимость проживания в УРБ "Колос"',Yii::$app->request->BaseUrl.'/uploads/'.'price_list_kolos_ru.docx',['target'=>'_blank']);?></p>
            <p class="text-left">По поводу бронирования мест обращаться по телефону:<br>8 (908) 599-96-66 – Урбаханов Александр Валерьевич.<br>О порядке оплаты регистрационного взноса будет сообщено дополнительно.</p>
        </div>
    </div>
    <div class="col-md-12 col-xs-12">
        <h3 class="text-center">Основные даты</h3>
        <table width="70%" style="margin: 0 auto">
            <tr style="height: 40px;">
                <td style="padding-left: 20px">Регистрация участников</td><td style="padding: 0 0 20px 20px"><span style="text-decoration:line-through">до 30 июня 2022 г.</span><br><span style="font-weight: bold">до 15 июля 2022 г.</span></td>
            </tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">Представление тезисов докладов</td><td style="padding: 0 0 20px 20px"><span style="text-decoration:line-through">до 30 июня 2022 г.</span><br><span style="font-weight: bold">до 15 июля 2022 г.</span></td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">Уведомление о включении доклада в программу конференции</td><td style="padding: 0 0 20px 20px"><span style="text-decoration:line-through">до 10 июля 2022 г.</span><br><span style="font-weight: bold">до 20 июля 2022 г.</span></td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">Подтверждение участия</td><td style="padding: 0 0 20px 20px"><span style="text-decoration:line-through">до 15 июля 2022 г.</span><br><span style="font-weight: bold">до 20 июля 2022 г.</span></td style="padding: 20px 0"></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">Заезд участников</td><td style="padding: 0 0 20px 20px">21-22 августа 2022 г.</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">Открытие конференции</td><td style="padding: 0 0 20px 20px">22 августа  2022 г.</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">Закрытие конференции</td><td style="padding: 0 0 20px 20px">25 августа 2022 г.</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">Отъезд участников</td><td style="padding: 0 0 20px 20px">25-26 августа 2022 г.</td></tr>
        </table>
    </div>


    <div class="col-md-12 col-xs-12">
        <h3 class="text-center">Программа конференции</h3>
        <p class="text-center" style="font-size: 16px">Время работы конференции указано по Улан-Удэ (UTC+08:00)</p>
        <h4 class="text-center">22 августа</h4>
        <table style="margin: 0 auto; width: 600px">
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px; display: flex; align-items: flex-start">10:00-12:00</td><td style="padding: 0 0 20px 20px; width: 500px">Открытие конференции <br> (ауд. 1209, БГУ, ул. Ранжурова, 5, г. Улан-Удэ. Подключиться к конференции Zoom: <a href="https://us02web.zoom.us/j/9505638226?pwd=NXNGLzJ0YVdyRlZEcjhQZWxJK3pZUT09">https://us02web.zoom.us/j/9505638226?pwd=NXNGLzJ0YVdyRlZEcjhQZWxJK3pZUT09</a>.<br> Идентификатор конференции: 950 563 8226. Код доступа: 620620)</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">12:00-13:00</td><td style="padding: 0 0 20px 20px; width: 500px">Обед</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">13:30</td><td style="padding: 0 0 20px 20px; width: 500px">Отъезд на Байкал (от 1 корпуса БГУ, ул. Ранжурова, 5)</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">18:00-20:00</td><td style="padding: 0 0 20px 20px; width: 500px">Заселение и размещение на Байкале, ужин</td></tr>
        </table>
        <h4 class="text-center">23 августа</h4>
        <table style="margin: 0 auto; width: 600px">
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">09:00-10:00</td><td style="padding: 0 0 20px 20px; width: 500px">Завтрак</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px; display: flex; align-items: flex-start">10:00-13:00</td><td style="padding: 0 0 20px 20px; width: 500px">Работа по секциям<br> (Подключиться к конференции Zoom: <a href="https://us02web.zoom.us/j/82963227965?pwd=aElGQWNVZHo5T0syeU5xU1ZuSWg3QT09">https://us02web.zoom.us/j/82963227965?pwd=aElGQWNVZHo5T0syeU5xU1ZuSWg3QT09</a>.<br> Идентификатор конференции: 829 6322 7965. Код доступа: 620620)</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">13:00-14:00</td><td style="padding: 0 0 20px 20px; width: 500px">Обед</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px; display: flex; align-items: flex-start">14:00-18:00</td><td style="padding: 0 0 20px 20px; width: 500px">Работа по секциям<br> (Подключиться к конференции Zoom: <a href="https://us02web.zoom.us/j/82963227965?pwd=aElGQWNVZHo5T0syeU5xU1ZuSWg3QT09">https://us02web.zoom.us/j/82963227965?pwd=aElGQWNVZHo5T0syeU5xU1ZuSWg3QT09</a>.<br> Идентификатор конференции: 829 6322 7965. Код доступа: 620620)</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">20:00</td><td style="padding: 0 0 20px 20px; width: 500px">Ужин</td></tr>
        </table>
        <h4 class="text-center">24 августа</h4>
        <table style="margin: 0 auto; width: 600px">
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">09:00-10:00</td><td style="padding: 0 0 20px 20px; width: 500px">Завтрак</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px; display: flex; align-items: flex-start">10:00-13:00</td><td style="padding: 0 0 20px 20px; width: 500px">Работа по секциям<br> (Подключиться к конференции Zoom: <a href="https://us02web.zoom.us/j/82963227965?pwd=aElGQWNVZHo5T0syeU5xU1ZuSWg3QT09">https://us02web.zoom.us/j/82963227965?pwd=aElGQWNVZHo5T0syeU5xU1ZuSWg3QT09</a>.<br> Идентификатор конференции: 829 6322 7965. Код доступа: 620620)</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">13:00-14:00</td><td style="padding: 0 0 20px 20px; width: 500px">Обед</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px; display: flex; align-items: flex-start">14:00-18:00</td><td style="padding: 0 0 20px 20px; width: 500px">Работа по секциям<br> (Подключиться к конференции Zoom: <a href="https://us02web.zoom.us/j/82963227965?pwd=aElGQWNVZHo5T0syeU5xU1ZuSWg3QT09">https://us02web.zoom.us/j/82963227965?pwd=aElGQWNVZHo5T0syeU5xU1ZuSWg3QT09</a>.<br> Идентификатор конференции: 829 6322 7965. Код доступа: 620620)</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">20:00</td><td style="padding: 0 0 20px 20px; width: 500px">Товарищеский ужин</td></tr>
        </table>
        <h4 class="text-center">25 августа</h4>
        <table style="margin: 0 auto; width: 600px">
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">09:00-10:00</td><td style="padding: 0 0 20px 20px; width: 500px">Завтрак</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">10:00-12:00</td><td style="padding: 0 0 20px 20px; width: 500px">Круглый стол</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">12:00-13:00</td><td style="padding: 0 0 20px 20px; width: 500px">Обед</td></tr>
            <tr style=" height: 40px"><td style="padding: 0 0 20px 20px">13:30</td><td style="padding: 0 0 20px 20px; width: 500px">Отъезд в Улан-Удэ</td></tr>

        </table>

        <p class="text-center" style="margin-top: 20px">Чтобы ознакомиться с <span style="font-weight: bold; font-size: 15px">очередностью выступлений</span> просим вас загрузить данный <?= Html::a('документ.',Yii::$app->request->BaseUrl.'/uploads/'.'sections_work_DEMM_2022_update24082022.docx',['target'=>'_blank', 'class'=>'alert-link', 'style' => 'font-size: 15px']);?></p>

        <p class="text-center" style="margin-top: 20px"> <?= Html::a('Сборник тезисов',Yii::$app->request->BaseUrl.'/uploads/'.'DEMM2022_thesis.pdf',['target'=>'_blank', 'class'=>'alert-link', 'style' => 'font-size: 16px']);?></p>

        <p class="text-center"><?= Html::a('Отчет о конференции ДУММ-2022',Yii::$app->request->BaseUrl.'/uploads/'.'conference_report_DEMM2022.docx',['target'=>'_blank', 'class'=>'alert-link', 'style' => 'font-size: 16px']);?></p>
    </div>
</div>