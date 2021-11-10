<!-- Costumername Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CostumerName', 'Costumername:') !!}
    {!! Form::text('CostumerName', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Costumeraddress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CostumerAddress', 'Costumeraddress:') !!}
    {!! Form::text('CostumerAddress', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Costumerorder Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CostumerOrder', 'Costumerorder:') !!}
    {!! Form::text('CostumerOrder', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Totalamount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TotalAmount', 'Totalamount:') !!}
    {!! Form::number('TotalAmount', null, ['class' => 'form-control']) !!}
</div>

<!-- Amountpaid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AmountPaid', 'Amountpaid:') !!}
    {!! Form::number('AmountPaid', null, ['class' => 'form-control']) !!}
</div>