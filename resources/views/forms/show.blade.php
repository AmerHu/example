@extends ('layouts.master')

@section('assets')
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/mycss.css" rel="stylesheet">
@endsection

@section('content')

    <page size="A4" layout="portrait">

        <div style="padding-top: 100px">
            <div class="a4_page">
                <div class="row text-center padding">
                    <div class="col-md-5">
                        <img class=" img-responsive" src="/img/header_logo1.png">
                    </div>
                    <div class="col-md-2">
                        <img class=" img-responsive" src="/img/icon.png">
                    </div>
                    <div class="col-md-5">
                        <img src="/img/image1.png" class="img-responsive" style="padding-top: 12px"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img src="/img/icon.png" class="img-responsive img-rad"/>
                    </div>
                    <div class=" col-md-8 text-right">
                        <p class="right-padding-11"> رقم البطاقه : {{$form->credit_id}} </p>
                        <p class="right-padding-11">اسم المشترك : {{ $form->name }} </p>
                        <p class="right-padding-11">الجهة المتعاقدة : {{ $form->contract }} </p>
                        <p class="right-padding-11">تاريخ الولاده: {{ $form->berth }}</p>
                    </div>
                </div>
                <div class="row" style="font-size: 11px">
                    <div class="col-md-6">
                        <p class="left-padding">{{ $form->expire }} : تاريخ نهاية التأمين</p>
                        <br/>
                        <p class="left-padding"> {{ $form->percentage_out }}: %خارج المستشفى</p>
                    </div>
                    <div class="col-md-6">
                        <p class="right-padding"> {{ $form->level }} :درجة التأمين </p>
                        <p class="right-padding"> : نسبة التحمل </p>
                        <p class="right-padding">{{ $form->percentage_in}} : %داخل المستشفى </p>
                    </div>
                </div>
            </div>
        </div>
    </page>
@endsection
@section('assets2')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>
@endsection