<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="/favicon.ico">

    <title>Bootstrap</title>

    <!-- Bootstrap core CSS -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/mycss.css">

</head>
<body>

<page size="A4" layout="portrait">
    <div class="print" id="elem">
        <div style="padding-top: 50px;padding-bottom: 50px">
            <div class="a4_page">

                <div class="row">

                    <div class="col-md-5">
                        <img src="/img/image1.png" class="img-responsive pull-right"
                             style="padding-top: 15px;width: 133px;"/>
                    </div>
                    <div class="col-md-2">
                        <img class=" img-responsive pull-right" src="/img/icon.png" style="width:35px; margin-right: 50px">
                    </div>
                    <div class="col-md-5">
                        <img class=" img-responsive" src="/img/header_logo1.png" style="width: 133px;">
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-8 pull-right text-right right-padding">
                        <p> رقم البطاقه : {{ $form->credit_id }} </p>
                        <p>اسم المشترك : {{ $form->name }}</p>
                        <p>الجهة المتعاقدة : {{ $form->contract }}</p>
                        <p>تاريخ الولاده:{{ $form->berth }}</p>
                    </div>
                    <div class="col-md-3">
                        <img src="/img/icon.png" class="img-responsive img-rad" style="width: 70px"/>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-md-6 pull-right right-padding-11">
                        <p class="right-padding"> {{$form->level}} :درجة التأمين </p>
                        <p class="right-padding"> : نسبة التحمل </p>
                        <p class="right-padding"> % {{$form->percentage_in}} : داخل المستشفى </p>
                    </div>
                    <div class="col-md-6 ">
                        <p class="left-padding"> {{ $form->expire }} : تاريخ نهاية التأمين</p>
                        <br/>
                        <p class="left-padding"> % {{$form->percentage_out}}: خارج المستشفى</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" onclick="PrintElem('elem')">Print</button>

</page>

<script>
    function PrintElem(elem) {
        var printContents = document.getElementById(elem).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        document.body.style("<link rel=\"stylesheet\" href=\"/public/css/bootstrap.css\">");
        document.body.style("<link rel=\"stylesheet\" href=\"/public/css/mycss.css\">\n");
    }
</script>
</body>
</html>