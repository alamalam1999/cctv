@extends('dashboard.base')

@section('content')

          <div class="container-fluid">
            <div class="fade-in">
             
              <!-- /.row-->
              <!-- /.card-->
              <div class="row">
                <div class="col-sm-6 col-lg-4">
                  <div class="card">
                    <a href="cctv.jagakarsa">
                    <div class="card-header bg-facebook content-center">
                      <svg class="c-icon c-icon-3xl text-white my-4">        
                          <img src="{{URL::asset('/svg/camera-156730.svg')}}" alt="My Happy SVG" >              
                      </svg>
                      <div class="c-chart-wrapper">
                        <canvas id="social-box-chart-1" height="90"></canvas>
                      </div>
                    </div>
                  </a>
                    <div class="card-body row text-center">
                      <div class="col">
                        <div class="text-value-xl"> <a href="www.google.com">CCTV JAGAKARSA</a> </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-4">
                  <div class="card">
                    <a href="cctv.cinere">
                    <div class="card-header bg-facebook content-center">
                      <svg class="c-icon c-icon-3xl text-white my-4">
                        <img src="{{URL::asset('/svg/camera-156730.svg')}}" alt="My Happy SVG" >
                      </svg>
                      <div class="c-chart-wrapper">
                        <canvas id="social-box-chart-1" height="90"></canvas>
                      </div>
                    </div>
                  </a>
                    <div class="card-body row text-center">
                      <div class="col">
                        <div class="text-value-xl"><a href="">CCTV CINERE</a></div>      
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-4">
                  <div class="card">
                    <a href="cctv.pamulang">
                    <div class="card-header bg-facebook content-center">
                      <svg class="c-icon c-icon-3xl text-white my-4">
                        <img src="{{URL::asset('/svg/camera-156730.svg')}}" alt="My Happy SVG" >
                      </svg>
                      <div class="c-chart-wrapper">
                        <canvas id="social-box-chart-1" height="90"></canvas>
                      </div>
                    </div>
                    </a>
                    <div class="card-body row text-center">
                      <div class="col">
                        <div class="text-value-xl"><a href="">CCTV PAMULANG</a></div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
             
              <!-- /.row-->
            </div>
          </div>

@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
