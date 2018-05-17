@extends('layouts.client')

@push('css')
 <link href="{{URL::asset('assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" />
  <style>
#canvas{
width:100%;
}
circle.selected:hover {
          fill: #ff7f0e;
          stroke: #ff7f0e; }

#chartjs-tooltip {
     opacity: 0;
     position: absolute;
     background: rgba(181,224,179, .9);
     color: #fff;
     padding: 10px;
     border-radius: 8px;
     -webkit-transition: all .1s ease;
     transition: all .1s ease;
     pointer-events: none;
     -webkit-transform: translate(-50%, 0);
     transform: translate(-50%, 0);
 }
</style>
 @endpush
@section('content')
<?php $now =new DateTime(); ?>
 <section class="wrapperdash" id="container">
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="text-center round">
                              <a href="">
                                <img src="./images/logo/{{ $usr->logo }}" id="img" alt="">
                              </a>
                                
                              <h4 style="color: #41cac0;">{{$usr->name}}</h4>
                              <p>{{$usr->email}}</p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
    
                              <li></li>
                          </ul>

                      </section>
                       <div class="text-content logo">
                               
                         </div>
                  </aside>
                  <aside class="profile-info col-lg-9">
                     
                      <section class="panel">
                          <div class="bio-graph-heading">
                             A Penny Saved is A Penny Earned.
                          </div>
                          <div class="panel-body bio-graph-info">
                              
                              <div class="row">
                                  <div class="bio-row">
                                      <p><label>Company Name</label> : {{$usr->name}}</p>
                                  </div>
                                  
                                  <div class="bio-row">
                                      <p><label>Country </label> : India</p>
                                  </div>
                                 
                                  <div class="bio-row">
                                      <p><label>GST CODE </label> : {{$usr->gst}}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><label>Email </label> : {{$usr->email}}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><label>Mobile </label> : {{$usr->mobile}}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><label>Address </label> : {{$usr->address}}</p>
                                  </div>
                              </div>
                          </div>
                      </section>

           </aside>
 </div>
             <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                     <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-clipboard"></i>
                          </div>
                          <div class="value">
                              <h3 class="count">
                                 {{$totalinvoice}}
                              </h3>
                              <p>All Invoices</p>
                          </div>
                     <section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-group"></i>
                          </div>
                          <div class="value">
                              <h3 class=" count2">
                                  {{$totalcustomer}}
                              </h3>
                              <p>Total Customers</p>
                          </div>
                      <section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                          <div class="symbol yellow">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h3 class=" count3">
                                   {{$totalexpense}}
                              </h3>
                              <p>Total Expenses</p>
                          </div>
                     <section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-money"></i>
                          </div>
                          <div class="value">
                              <h3 class=" count4">
                                  {{$totalpayment}}
                              </h3>
                              <p>Total Payments</p>
                          </div>
                     <section>
                  </div>
              </div>

<div class="row">

<div class="col-md-6">
          <div class="panel terques-chart expchart">
                          <div class="panel-body ">
                              <div class="chart">
                                  <div class="heading">
                                      <span><?php echo date('l'); ?></span>
                                      <strong>Invoice : Rs. {{$todayinvoice->invoicesum}} | Payment : Rs. {{$todaypayment->paymentsum}}</strong>
                                  </div>
                                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff"><canvas id="canvas1" style="display: inline-block; width: 500px; height:300px; vertical-align: top;" width="500px" height="300px"></canvas></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">New Earning</span>
                              <!-- <span class="value">
                                  <a href="#" class="active">Market</a>
                                  |
                                  <a href="#">Referal</a>
                                  |
                                  <a href="#">Online</a>
                              </span> -->
                          </div>
                      </div>
       </div>
<div class="col-md-6">

<div class="panel terques-chart ipchart">
                          <div class="panel-body ">
                              <div class="chart">
                                  <div class="heading">
                                      <span><?php echo date('l'); ?></span>
                                      <strong>Expense : Rs. {{$todayexpense->expensesum}}</strong>
                                  </div>
                                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff"><canvas id="canvas2" style="display: inline-block; width: 500px; height:300px; vertical-align: top;" width="500px" height="300px"></canvas><div id="chartjs-tooltip"></div></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">New Earning</span>
                              <!-- <span class="value">
                                  <a href="#" class="active">Market</a>
                                  |
                                  <a href="#">Referal</a>
                                  |
                                  <a href="#">Online</a>
                              </span> -->
                          </div>
                      </div>
</div>
    
</div>
                 
      </section>
</section>
@endsection

@push('scripts')
    
    <script src="{{URL::asset('js/allfunctions.js')}}"></script>
    <!--common script for all pages-->
   
    <script src="{{URL::asset('assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('js/charts.min.js')}}"></script>
  
  
  
    
    <script type="text/javascript">
Chart.types.Line.extend({
    name: "LineAlt",
    initialize: function (data) {
        Chart.types.Line.prototype.initialize.apply(this, arguments);
        var xLabels = this.scale.xLabels
        var yLabels = this.scale.yLabels
        xLabels.forEach(function (label, i) {
            if (i % 2 == 1)
                xLabels[i] = '';
        })
        xLabels.forEach(function (label, i) {
            if (i % 2 == 1)
                xLabels[i] = '';
        })
    }
});

var ecv = $("#canvas2").get(0).getContext("2d");
var gradient = ecv.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(255,255,255,1)');   
    gradient.addColorStop(.5, 'rgba(181,224,179,0)');
    gradient.addColorStop(1, 'rgba(181,224,179,1)');


var cv = $("#canvas1").get(0).getContext("2d");
var gradientinv = cv.createLinearGradient(0, 0, 0, 400);
    gradientinv.addColorStop(0, 'rgba(255,255,255,1)');   
    gradientinv.addColorStop(.5, 'rgba(98,178,238,0)');
    gradientinv.addColorStop(1, 'rgba(98,178,238,.8)');  

var gradientpay = cv.createLinearGradient(0, 0, 0, 400);
    gradientpay.addColorStop(0, 'rgba(181,224,179,0)');   
    gradientpay.addColorStop(1, 'rgba(181,224,179,.7)');


$.get('/chartdata', function(data, status){
       var a = JSON.parse(data);
       var labels=[];
       var labeldates=[];
       var invoiceAmount=[];
       var paymentAmount=[];
       var expenseAmount=[];

       for (var i = 0; i < a.length; i++) {
            labeldates.push(a[i].date_field);
            labels.push(new Date(a[i].date_field).getDate());
            invoiceAmount.push(a[i].InvoiceTotal);
            paymentAmount.push(a[i].PaymentTotal);
            expenseAmount.push(a[i].ExpenseTotal);
       } 
    
  var data2 ={
  labels :labels,
  datasets: [
        {
            label: "Expense Amount",
             fillColor: gradient,
            strokeColor: "rgba(161,209,165,1)",
            pointColor: "rgba(181,224,179 ,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#b5e0b3",
            pointHoverRadius: 10,
            pointHighlightStroke: "rgba(181,224,179 ,1)",
            pointRadius: 3,
            data: expenseAmount
          
        }
      ]
}; 
      
    var data1 = {
    labels: labels,
    datasets: [
        {
            label: "Invoice Amount",
            fillColor: gradientinv,

            strokeColor: "rgba(98,178,238 ,1)",
            pointColor: "rgba(98,178,238,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#4a8bc2",
            pointHighlightStroke: "rgba(98,178,238 ,1)",
            data: invoiceAmount
        },
        {
            label: "Payment Amount",
            
            fillColor: gradientpay, 
            strokeColor: "rgba(181,224,179,1)",
            pointColor: "rgba(181,224,179,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#b5e0b3",
            pointHighlightStroke: "rgba(181,224,179,1)",
            data: paymentAmount

        }
    ]
};



var cv = $("#canvas1").get(0).getContext("2d");
var mychart1= new Chart(cv).Line(data1,{
    
     // scaleShowVerticalLines: false,
     // scaleShowHorizontalLines: false,
     // tooltipFontFamily: "'FontAwesome'",
     // tooltipFillColor: "rgba(255,250,250,0.8)",
      
     // responsive: true ,
     //     scaleShowLabels: false  
     scaleShowVerticalLines: true,
     scaleShowHorizontalLines: false,
    tooltipyLabel:labeldates,
     tooltipFontFamily: "'FontAwesome'",
     tooltipFillColor: "rgba(98,178,238 ,0.8)",
     tooltipFontColor:"#fff",
     scaleFontSize: 14,
     scaleFontColor: "#4a8bc2",
     animationEasing: "easeOutQuart",
     responsive: true ,
     scaleShowLabels: false 
                
});

var ecv = $("#canvas2").get(0).getContext("2d");

var mychart2 = new Chart(ecv).LineAlt(data2,{
       scaleShowVerticalLines: false,
        scaleShowHorizontalLines: false,
       responsive: true,
       xLabel: labeldates,
       tooltipFontFamily: "'FontAwesome'",
        customTooltips: function (tooltip) {
        var tooltipEl = $('#chartjs-tooltip');

        if (!tooltip) {
            tooltipEl.css({
                opacity: 0
            });
            return;
        }

        tooltipEl.removeClass('above below');
        tooltipEl.addClass(tooltip.yAlign);

        var parts = tooltip.text.split(":");
        var innerHtml = '<span>' + parts[0].trim() + '</span> : <span><b>' + parts[1].trim() + '</b></span>';
        tooltipEl.html(innerHtml);

        tooltipEl.css({
            opacity: 1,
            left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
            top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
            fontFamily: tooltip.fontFamily,
            fontSize: tooltip.fontSize,
            fontStyle: tooltip.fontStyle,
        });
    },
    scaleShowLabels: false  ,
    
       });
    }); 
    @if (notify()->ready())
      swal({
        title : "{{ notify()->message() }}", 
        type: "{{notify()->type()}}",
        timer : 2000,
        showConfirmButton: false,
        animation: "slide-from-top",


      });
      @endif

    </script>
@endpush

