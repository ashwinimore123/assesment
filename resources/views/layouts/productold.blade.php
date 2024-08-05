@section('product')
<div class="row" > 
 @foreach ($products as $product)
    <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
          <div class="card overflow-hidden">
            <div class="card-body pb-0 px-4 pt-4">
              <div class="row">
                <div class="col">
                  <span class="text-success">{{$product->product_name}}</span>
                </div>
              </div>
            </div>
            <div class="chart-wrapper">
              <canvas id="areaChart_2" class="chartjs-render-monitor" height="90"></canvas>
            </div>
          </div>
        </div>
@endforeach 
</div>
@endsection