<tr>
    <td> {{ $form->credit_id }}</td>
    <td> {{ $form->name }}</td>
    <td>{{ $form->contract }}</td>
    <td> {{ $form->berth }}</td>
    <td>{{ $form->expire }}</td>
    <td>{{ $form->level }}</td>
    <td>{{$form->percentage_out}}</td>
    <td>{{$form->percentage_in}}</td>
    <td>
        <a href="forms/destroy/{{$form->id}}" class="btn btn-danger delete">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
        </a>
    </td>
    <td>
        <a href="forms/{{$form->id}}/edit" class="btn btn-warning"><i class="fa fa-pencil-square-o"
                                                                      aria-hidden="true"></i></a>
    </td>
    <td>
        <a href="forms/print/{{$form->id}}" class="btn btn-primary">
            <i class="fa fa-print"></i>
        </a>
    </td>
</tr>