@section('PAID_ITEMS') 
 <h1>PAID</h1>
@foreach ($paid_transactions as $transaction) 
  <div class="form-group">
  <input type="text" class="textfield_split_paid" style="cursor: default;" value="{{$currency_data->currency_symbol}}{{$transaction->transaction_amount}}.00">
  <button type="submit" class="btn btn-primary btn_chekcout_paid" style="opacity:.2;cursor: default;">CASH</button>
  </div>                      
@endforeach
@endsection
