<div class="table-responsive">
    <table class="table" id="seafoodrestos-table">
        <thead>
            <tr>
                <th>Costumername</th>
        <th>Costumeraddress</th>
        <th>Costumerorder</th>
        <th>Totalamount</th>
        <th>Amountpaid</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($seafoodrestos as $seafoodresto)
            <tr>
                <td>{{ $seafoodresto->CostumerName }}</td>
            <td>{{ $seafoodresto->CostumerAddress }}</td>
            <td>{{ $seafoodresto->CostumerOrder }}</td>
            <td>{{ $seafoodresto->TotalAmount }}</td>
            <td>{{ $seafoodresto->AmountPaid }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['seafoodrestos.destroy', $seafoodresto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('seafoodrestos.show', [$seafoodresto->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('seafoodrestos.edit', [$seafoodresto->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
