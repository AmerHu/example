@extends ('layouts.master')

@section ('content')

    <form method="post" action="/forms" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="pull-right">اسم المشترك</label>
            <input type="text" name="name" class="form-control" id="name">
            @include('layouts.errors')
        </div>

        <div class="form-group">
            <label class="pull-right">رقم البطاقة </label>
            <input type="text" class="form-control" name="credit_id" id="credit_id">
            @include('layouts.errors')
        </div>
        <div class="form-group">
            <label class="pull-right">الجهة المتعاقدة </label>
            <input type="text" class="form-control" name="contract" id="contract">
            @include('layouts.errors')
        </div>
        <div class="form-group">
            <label  class="pull-right">تاريخ الولاده </label>
            <input type="date" name="berth" class="form-control" id="berth">
            @include('layouts.errors')
        </div>

        <div class="form-group">
            <label  class="pull-right">درجة التأمين </label>
            <input type="text" class="form-control" name="level" id="level">
            @include('layouts.errors')
        </div>
        <div class="form-group">
            <label class="pull-right">تاريخ نهاية التأمين </label>
            <input type="date" name="expire" class="form-control" id="expire">
            @include('layouts.errors')
        </div>

        <div class="form-group">
            <label class="pull-right">نسبة التأمين داخل المستشفى </label>
            <input type="text" class="form-control" name="percentage_in" id="percentage_in">
            @include('layouts.errors')
        </div>
        <div class="form-group">
            <label  class="pull-right">نسبة التأمين خارج المستشفى </label>
            <input type="text" name="percentage_out" class="form-control" id="percentage_out	">
            @include('layouts.errors')
        </div>


        <button type="submit" class="btn btn-default">حفظ </button>
    </form>
@endsection

