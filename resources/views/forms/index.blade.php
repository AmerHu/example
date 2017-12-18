@extends ('layouts.master')
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th, td {
        padding: 5px;
        text-align: left;
    }
</style>

@section('content')
    <table>
        <tr>
            <th>رقم البطاقه</th>
            <th> اسم المشترك</th>
            <th>الجهة المتعاقدة</th>
            <th>تاريخ الولاده</th>
            <th>تاريخ نهاية التأمين</th>
            <th>درجة التأمين</th>
            <th>خارج المستشفى</th>
            <th>داخل المستشفى</th>
            <th>حذف</th>
            <th>تعديل</th>
            <th>طباعة</th>
        </tr>

            @foreach($forms as $form)
                @include('forms.form')
            @endforeach
    </table>
@endsection