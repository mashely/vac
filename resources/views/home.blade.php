@extends('layouts.main')


@push('script')
<script>
// alert($('.c3-chart-arcs').text())

    </script>
@endpush

@section('body')

@php
    
// dump($mme);

@endphp
<div class="row">
    {{-- jinsia --}}
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body d-flex flex-column">
            <h4 class="card-title">
              <i class="fas  fa-dot-circle"></i>
              Jinsia
            </h4>
            <div class="flex-grow-1 d-flex flex-column justify-content-between"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
              {{-- <canvas id="sales-status-chart" class="mt-3 chartjs-render-monitor" style="display: block; height: 107px; width: 214px;" width="267" height="133"></canvas> --}}
              <div class="pt-4">
                <div id="sales-status-chart-legend" class="sales-status-chart-legend">
                  <ul class="legend2">
                    <li><span class="legend-label" style="background-color:#392c70"></span>Mme<label class="badge badge-light badge-pill legend-percentage ml-auto">{{ $mme }}%</label></li>
                    <li><span class="legend-label" style="background-color:#04b76b"></span>Mke<label class="badge badge-light badge-pill legend-percentage ml-auto">{{ $mke }}%</label></li>
                    {{-- <li><span class="legend-label" style="background-color:#ff5e6d"></span>New visitors<label class="badge badge-light badge-pill legend-percentage ml-auto">15%</label></li>
                    <li><span class="legend-label" style="background-color:#eeeeee"></span>Others<label class="badge badge-light badge-pill legend-percentage ml-auto">10%</label></li>
                   --}}
                  </ul></div>
              </div>
            </div>
          </div>
        </div>
      </div>




      
{{-- umri --}}
<div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h4 class="card-title">
          <i class="fas far fa-user-circle "></i>
          Umri
        </h4>
        <div class="flex-grow-1 d-flex flex-column justify-content-between"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          {{-- <canvas id="sales-status-chart" class="mt-3 chartjs-render-monitor" style="display: block; height: 107px; width: 214px;" width="267" height="133"></canvas> --}}
          <div class="pt-4">
            <div id="sales-status-chart-legend" class="sales-status-chart-legend">
                <ul class="legend2">
                    <li><span class="legend-label" style="background-color:#392c70"></span>Zaidi ya 25<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$zaidiya25}}%</label></li>
                    <li><span class="legend-label" style="background-color:#04b76b"></span>18 hadi 24<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$katiya18na28}}%</label></li>
                    <li><span class="legend-label" style="background-color:#ff5e6d"></span>8 hadi 17<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$katiya8hadi17}}%</label></li> 
                <li><span class="legend-label" style="background-color:#eeeeee"></span>Chini ya 8<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$chiniya8}}%</label></li>
            
            </ul></div>
          </div>
        </div>
      </div>
    </div>
  </div>






  {{-- mahali --}}
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body d-flex flex-column">
        <h4 class="card-title">
          <i class="fas  fa-map-marker"></i>
          Mahali
        </h4>
        <div class="flex-grow-1 d-flex flex-column justify-content-between"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          {{-- <canvas id="sales-status-chart" class="mt-3 chartjs-render-monitor" style="display: block; height: 107px; width: 214px;" width="267" height="133"></canvas> --}}
          <div class="pt-4">
            <div id="sales-status-chart-legend" class="sales-status-chart-legend">
                <ul class="legend2">
                    <li><span class="legend-label" style="background-color:#392c70"></span>Kinondoni<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$Kinondoni}}}%</label></li>
                    <li><span class="legend-label" style="background-color:#889992"></span>Ilala<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$Ilala}}%</label></li>
                    <li><span class="legend-label" style="background-color:#ff5e6d"></span>Kigamboni<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$Kigamboni}}%</label></li> 
                    <li><span class="legend-label" style="background-color:#eeeeee"></span>Temeke<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$Temeke}}%</label></li>
                    <li><span class="legend-label" style="background-color:#889992"></span>Ubungo<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$Ubungo}}%</label></li>

            </ul></div>
          </div>
        </div>
      </div>
    </div>
  </div>







{{-- aina ya unyanyasaji --}}
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body d-flex flex-column">
      <h4 class="card-title">
        <i class="fas far fa-user-circle "></i>
        Aina ya Unyanyasaji
      </h4>
      <div class="flex-grow-1 d-flex flex-column justify-content-between"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        {{-- <canvas id="sales-status-chart" class="mt-3 chartjs-render-monitor" style="display: block; height: 107px; width: 214px;" width="267" height="133"></canvas> --}}
        <div class="pt-4">
          <div id="sales-status-chart-legend" class="sales-status-chart-legend">
              <ul class="legend2">
                  <li><span class="legend-label" style="background-color:#392c70"></span>kijinsia<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$Kijinsia}}%</label></li>
                  <li><span class="legend-label" style="background-color:#04b76b"></span>kimwili<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$Kimwili}}%</label></li>
                  <li><span class="legend-label" style="background-color:#ff5e6d"></span>kihisia<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$Kihisia}}%</label></li> 
          </ul></div>
        </div>
      </div>
    </div>
  </div>
</div>








{{-- muhusika --}}
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body d-flex flex-column">
      <h4 class="card-title">
        <i class="fas far fa-user-circle "></i>
        muhusika wa unyanyasaji
      </h4>
      <div class="flex-grow-1 d-flex flex-column justify-content-between"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        {{-- <canvas id="sales-status-chart" class="mt-3 chartjs-render-monitor" style="display: block; height: 107px; width: 214px;" width="267" height="133"></canvas> --}}
        <div class="pt-4">
          <div id="sales-status-chart-legend" class="sales-status-chart-legend">
              <ul class="legend2">
                  <li><span class="legend-label" style="background-color:#392c70"></span>mzazi<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$mzazi}}%</label></li>
                  <li><span class="legend-label" style="background-color:#04b76b"></span>mlezi<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$mlaezi}}%</label></li>
                  <li><span class="legend-label" style="background-color:#ff5e6d"></span>mtumwingine<label class="badge badge-light badge-pill legend-percentage ml-auto">{{$mtumwingine}}%</label></li> 
             
          
          </ul></div>
        </div>
      </div>
    </div>
  </div>
</div>


  </div>


@endsection
