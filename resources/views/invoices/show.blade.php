@extends('layouts.client')
@push('css')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/override.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">
    <link rel=alternate media=print href="{{route('printToPDF', $invoice->invoice_id)}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/assets/toastr-master/toastr.css ')}}" >
     <link href="{{URL::asset('assets/css/invoice-print.css')}}" rel="stylesheet" media="print">
     <style type="text/css">
      
thead{
 background: #bdbcbc !important;
border-bottom: 1px solid black;
}
.invoiceline{
     margin: 0px 5px;
    padding: 15px;
    background: #bdbcbc !important;
}
.invoice-btn{
        margin-top: 10px;
}
ul.amounts li{
         margin-bottom:0px; 
     padding: 0px; 
}
.table {
    /*border: 1px solid black;*/
    border-bottom: none;
   
}
.tblamount td{
  padding:10px;
     width: 800px !important;
}
/*.panel-body{
  border: 1px solid black;
}*/
.tbltop tr td{
  width: 33%;
}
h1{
  text-decoration: 1px underline black;
  color:black;
}
table.table{
   margin-bottom: 0px !important;
}
     </style>
@endpush

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <div class="col-md-4"><a href="{{route('invoices.index')}}" class="btn btn-default">Back</a> </div>
                <div class="panel-title text-center col-md-4">Invoice</div>
                <div class=" col-md-4 text-right">
                
                   @if($invoice->invoice_no==$invoicelast) 
                          <form class="form-inline" method="post"
                            action="{{route('invoices.destroy', $invoice->invoice_id)}}"
                            onsubmit="return confirm('Are you sure?')">
                       
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="submit" value="Delete"  class="btn btn-danger pull-right">Delete</button>
                         </form>
                   @endif

                    
                </div>
            </div>
        </div>
        <div class="panel-body">
                
                    
                <!--       <div class="col-md-4">
                          <h1><ul>Invoice</ul></h1>
                          <h4>{{$user->name}}</h4>
                          <p>{{$user->address}}</p>
                      </div>
                       <div class="col-md-4 text-right">
                          <p>{{$user->mobile}}</p>
                          <p>{{$user->email}}</p>
                          <p>{{$user->cin}}</p>
                      </div> -->
                   
                      <!-- <div class="row invoice-list"> style="display:none;" -->
                            <div  class="printtable" style="display:none;">
                              <table class=" tbltop" cellspacing="0" cellpadding="0">
                              <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                  <tr class="trtop">
                                        <td colspan="2" class="toptd1">
                                           <img src="../images/logo/{{$user->logo}}" alt="">
                                        </td>
                                        <td colspan="3" class="toptd2">
                                          <h1><strong><ul>Invoice</ul></strong></h1>
                                          <p>{{$user->name}}<br>
                                          {{$user->address}}</p>
                                        </td>
                                        <td colspan="3" class="toptd3">
                                        <p>Original-Copy</p>
                                           <p>Phone. No. :{{$user->mobile}}<br>
                                            Email:{{$user->email}}<br>
                                            CIN: {{$user->cin}}</p>
                                        </td>
                                  </tr>
                                  <tr class="trtop">
                                    <td colspan="3" class="top2td top21">
                                      <p>Commissionarate:{{$user->commissionerate}}<br>
                                      GST Number: {{$user->commissionerate}} <br>
                                      Tax is payable on reverse charges:yes/No<br>
                                      Invoice No.:{{$invoice->invoice_no}}<br>
                                      Invoice Date: <?php echo (date('d-m-Y ' ,strtotime($invoice->invoice_date))); ?></p>
                                    </td>
                                    <td colspan="5" class="top2td">
                                       <p>Trasportation Mode:{{$invoice->transmode}}<br>
                                      Vehicle No.: {{$invoice->veh_no}} <br>
                                      Date/Time Of Supply: {{$invoice->date_of_sup}}<br>
                                      Place of Supply:{{$invoice->p_of_sup}}</p>
                                    </td>
                                  </tr>
                                        <tr class="trtop">
                                    <td colspan="3" class="top2td top21">
                                     <h4><b>Detail Of Receiver(Billed to)</b></h4>
                                  <p>
                                      Name: {{$cust->customer_name}} <br>
                                      Address: {{$cust->customer_address}} <br>
                                      Gst No.: {{$cust->gst}}
                                     
                                  </p>
                                    </td>
                                    <td colspan="5" class="top2td">
                                    <h4><b>Detail Of Consignee(Shipped to)</b></h4>
                                       <p>
                                       Name: {{$cust->shipname}} <br>
                                      Address: {{$cust->shipaddress}} <br>
                                      
                                       </p>
                                    </td>
                                  </tr>
                              </table>
                         </div>
                         <div class="nonpritablediv">
                          <div class="row">
                            <div class=" col-md-12 text-center corporate-id">
                                  <img src="../images/logo/{{$user->logo}}" alt="">
                              </div> 
                            </div>
                            <div class="col-lg-4 col-sm-4 customerclass">
                                  <h4><b>BILLING ADDRESS</b></h4>
                                  <p>
                                     <strong>Name: </strong> {{$cust->customer_name}} <br>
                                       <strong>Address: </strong>{{$cust->customer_address}} <br>
                                       <strong>Company: </strong>{{$cust->description}}<br>
                                       <strong>Phone No.: </strong>{{$cust->mobile_no}}
                                  </p>
                              </div>
                              <div class="col-lg-4 col-sm-4 userclass">
                                 <h4><b>FROM</b></h4>
                                  <p>
                                       <strong>Name: </strong>{{$user->name}} <br>
                                       <strong>Address: </strong>{{$user->address}} <br>
                                       <strong>Email: </strong>{{$user->email}} <br>
                                       <strong>Phone No.: </strong>{{$user->mobile}}
                                  </p>
                              </div>
                              <div class="col-lg-4 col-sm-4 invoiceclass">
                                  <h4><b>INVOICE INFO</b></h4>
                                  <ul class="unstyled">
                                      <li><strong>Invoice Number</strong>        : {{$invoice->invoice_no}}</li>
                                      <li><strong>Invoice Date</strong>      : <?php echo (date('d-m-Y H:i:s' ,strtotime($invoice->invoice_date))); ?></li>
                                      <li><strong>Amount</strong>          : Rs.{{$invoice->sub_total}}</li>
                                      
                                  </ul>
                              </div>
                         </div>
                            
                         
           
            
             <table class="table" cellspacing="0" cellpadding="0">
                <thead>
                    <tr class="border-bottom">
                    <th class="border-right">S.no.</th>
                        <th class="border-right">Product Name</th>
                        <th class="border-right">HSN Code</th>
                        <th class="border-right">No.of Packages</th>
                        <th class="border-right">Unit</th>
                        <th class="border-right">Price</th>
                        <th class="border-right">Qty</th>
                        <th class="text-right">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($invoice->products as $index=>$product)
                        <tr>
                            <td class=" border-right table-qty">{{$index+1}}</td>
                            <td class=" border-right table-name">{{$product->name}}</td>
                            <td class=" border-right table-qty">{{$product->hsn_code}}</td>
                            <td class=" border-right table-qty">{{$product->package}}</td>
                            <td class=" border-right table-qty">{{$product->unit}}</td>
                            <td class=" border-right table-price">{{$product->price}}</td>
                            <td class=" border-right table-qty">{{$product->qty}}</td>
                
                            <td class="table-total text-right">{{$product->total}}</td>
                        </tr>
                    @endforeach
                </tbody>
   
            </table>
          <div class="bordercontent border-top">
            <table cellspacing="0" cellpadding="0">
              <tr class="tblamount ">
                <td style="padding-left:20px;">Grand Total (In Words) : Rs. <strong> {{$invoice->numinwords}}</strong><br>Total Tax (In Words) : Rs. <strong> {{$invoice->taxinwords}}</strong></td>
             
         <td class="text-right">
           <p>        
               <strong>Freight charges : </strong> Rs.{{$invoice->fcharges}}<br><strong>Insurance Charges : </strong> Rs.{{$invoice->insurcharges}}<br>
               <strong>Other Changes : </strong>{{$invoice->other}}<br></p>
               <p>
                  <span style="border-bottom: 1px solid black; border-radius:0px;"><strong>Taxable Value : </strong> Rs.{{$invoice->sub_total}}<br> 
                </span></p>
               @if($invoice->tax==18.00)
                   <p><span style="padding-top:5px;"> <strong>IGST {{$invoice->tax}}% : </strong> {{$igst}}</span><br>
               @elseif($invoice->tax!=18.00)
                   <p><span style="padding-top:5px;"><strong>CGST {{$invoice->tax}}% : </strong> {{$gst}} </span><br>
                    <strong>SGST {{$invoice->tax}}% : </strong> {{$gst}} <br>
               @endif
              <strong>Total Tax : </strong>Rs.{{$rgst}}.00<br>

                  </p>
                </td>
              </tr>
              <tr class="text-right tblamount">
<td></td>
                <td  style="border-top: 1px solid black; border-bottom: 1px solid black; border-radius:0px;"><strong> Invoice Total: </strong><span id="totallval">{{$invoice->grand_total}}</span></td>
              </tr>
              <tr class="text-right tblamount border-bottom">
                <td colspan="2"> <p><strong> Amount Of Tax Subject to Reverse Charge: </strong>0</p></td>
              </tr >
             
            </table>
            <table cellspacing="0" cellpadding="0">
               <tr class="signspace tblamount" style="display: none;">
                <td class="border-right" >
                    <div>
                  <h4><strong><u>Terms and Condition</u></strong> </h4>
                  <p>{{$invoice->title}}</p>
                  </div>
                  <div>
                     <strong>Payment </strong> can also be made ONLINE through Net Banking to the following accounts: <br> <strong>ICICI Bank </strong><br> <strong>A/c No. :</strong>125405000432 <br><strong>For RTGS IFSC Code: </strong> ICIC0001254
                  </div></td>
                <td class="">
                    <h4 class="text-right"><strong>FOR: {{$user->name}} </strong> </h4>
                    <h4 class="sign text-right"><strong>Authorised Signature</strong> </h4>
                </td>
              </tr>
            </table>

        </div>

            <div class="text-center invoice-btn">
                <!--<a class="btn btn-info" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print </a>-->
                <a href="{{route('printToPDF', $invoice->invoice_id)}}" class="btn btn-primary "><i class="fa fa-arrow-down"></i>Download</a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')


<script type="text/javascript">
      
        
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
 <script src="{{URL::asset('js/allfunctions.js')}}"></script>
@endpush
