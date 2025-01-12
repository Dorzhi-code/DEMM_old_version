<?php 
    $this->title="About";
    use yii\helpers\Html; 
?>
<div class="container">
<div class="row text-center">
        <div class="col-md-6">
            <h3 class="section-heading text">Program of the conference</h3>
            <p class="text-left">The conference will be dedicated to the following areas: partial differential equations, equations of mathematical physics, ordinary differential equations, dynamical systems, operator theory, spectral theory, mathematical modeling.</br>The conference program will include presentations by invited scientists (30 minutes), plenary presentations (30 minutes), brief presentations (15 minutes) and poster presentations.
            </p>
            <h3 class="section-heading text">Main sections of the conference</h3>
            <ul>
                <li><p class="text-left">Non-classical problems of mathematical physics<br></li>
                <li><p class="text-left">Degenerate equations and equations of mixed type<br></li>
                <li><p class="text-left">Spectral theory of differential operators<br></li>
                <li><p class="text-left">Dynamical systems, optimal controls and the theory of differential games.
                <br></li>
                <li><p class="text-left">Mathematical modeling and computational mathematics<br></li>
            </ul>
            <h3 class="section-heading text-center">Working languages of the conference</h3>
            <p class="text-center">Russian, English</p>
            <h3 class="section-heading text-left">Registration forms and abstracts</h3>
            <p class="text-left">
            Those colleagues who want to take part in the conference should send the abstracts of the report to the Organizing Committee by link: <a class="text-warning" href="index.php?r=sait/registration">"Registration"</a>. Abstracts are accepted in Russian and English. The volume of abstracts should be no more than 2 (two) pages.<br> The deadline for receiving abstracts is <span style="text-decoration: line-through;">June 30, 2022</span> <strong>July 15, 2022.</strong><br> Publication of the collection of abstracts is not planned. Full reports, recommended by the Program Committee, will be published in rating journals (Bulletin of BSU, Mathematical notes of NEFU, etc.).<br>
            Invitations and additional information will be sent after consideration of the submitted abstracts. 
            </p>
        </div>
        <div class="col-md-6">
            <h3 class="section-heading text-center">Location of the conference</h3>
            <p class="text-left">The main work and accommodation of the conference participants is planned on the shore of Lake Baikal, Maksimikha village, recreation center "Kolos".
            </p>
            <h3 class="section-heading text-center">Registration fee and accommodation</h3>
            <p class="text-left">
            The registration fee for the conference participants is approximately:<br>
            3000 rubles – in-person participation,<br>
            1000 rubles – online participation.<br>
            Fee is carried out after receiving notification of the inclusion of the report in the program.<br> The registration fee does not include accommodation and meals for the participants during the conference.</p>
            <p class="text-left">Accommodation on the shore of Lake Baikal (Barguzinsky Bay), in the village of Maksimikha there is a recreation center "Kolos". The nearest large settlement is Ulan-Ude, the distance is 234 kilometers.<br>Accommodation of the recreation center involves living in wooden 1 and 2-storey cottages with partial amenities.<br>
            <?= Html::img('@web/img/kolos.jpg',['alt' => 'kolos', 'style' => 'width: 100%; height: 100%']); ?></p>
            <p class="text-left">Please read the document for booking rooms:<br> 
            <?= Html::a('Cost of living in the URB "Kolos"',Yii::$app->request->BaseUrl.'/uploads/'.'price_list_kolos_en.docx',['target'=>'_blank']);?></p>
            <p class="text-left">To make a reservation, please call<br>  +7 (908) 599-96-66 – Aleksandr Valerievich Urbakhanov.<br>The procedure for paying the registration fee will be announced later.</p>
        </div>
    </div>
    <div class="col-md-12 col-xs-12">
        <h3 class="text-center">Important dates</h3>
        <table width="70%" style="margin: 0 auto">
            <tr style=" height: 40px"><td style="padding-left: 20px;">Registration of participants </td><td style="padding: 20px 20px 0"><span style="text-decoration:line-through">until June 30</span><br><span style="font-weight: bold">until July 15, 2022</span></td></tr>
            <tr style=" height: 40px"><td style="padding-left: 20px">Submission of abstracts</td><td style="padding: 20px 20px 0"><span style="text-decoration:line-through">until June 30</span><br><span style="font-weight: bold">until July 15, 2022</span></td></tr>
            <tr style=" height: 40px"><td style="padding-left: 20px">Report Inclusion Notification to the conference program</td><td style="padding: 20px 20px 0"><span style="text-decoration:line-through">until June 30</span><br><span style="font-weight: bold">until July 20, 2022</span></td></tr>
            <tr style=" height: 40px"><td style="padding-left: 20px">Confirmation of participation</td><td style="padding: 20px 20px 0"><span style="text-decoration:line-through">until June 30</span><br><span style="font-weight: bold">until July 20, 2022</span></td></tr>
            <tr style=" height: 40px"><td style="padding-left: 20px">Arrival of participants</td><td style="padding: 20px 20px 0">August 21 – 22, 2022</td></tr>
            <tr style=" height: 40px"><td style="padding-left: 20px">Conference opening</td><td style="padding: 20px 20px 0">August 22, 2022</td></tr>
            <tr style=" height: 40px"><td style="padding-left: 20px">Closing of the conference</td><td style="padding: 20px 20px 0">August 25, 2022</td></tr>
            <tr style=" height: 40px"><td style="padding-left: 20px">Departure of participants</td><td style="padding: 20px 20px 0">August 25 – 26, 2022</td></tr>
        </table>
    </div>
</div>