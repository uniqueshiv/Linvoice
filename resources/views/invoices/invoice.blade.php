<!DOCTYPE html>
<html>
   <head>
      <title>Invoice Management</title>
        <style type="text/css">
    .page-break {
      page-break-after: always;
    }

    u {
      color: black;
    }

    .panel-body {
      width: 100%;
      padding: 0px !important;
    }

    thead {
      background: #bdbcbc !important;
      border-bottom: 1px solid black;
    }

    .invoiceline {
      background: #bdbcbc !important;
    }


    table.table {
      margin-bottom: 0px !important;
    }

    .invoice-btn {
      margin-top: 10px;
    }

    .border-right {
      border-right: 1px solid black;
    }

    .border-left {
      border-left: 1px solid black;
    }

    .border-bottom {
      border-bottom: 1px solid black !important;
    }

    .border-top {
      border-top: 1px solid black;
    }

    .table>thead>tr>th {
      border-bottom: 1px solid black !important;
      ;
    }
    /*ul.amounts li{
         margin-bottom:0px; 
         padding: 0px; 
         }*/

    .panel-body {
      min-height: 100%;
      border: 1px solid black;
    }

    h1 {
      padding: 4px !important;
      margin: 0px !important;
      color: black;
    }

    h4 {
      padding: 4px !important;
      margin: 0px !important;
      color: black;
    }

    .customerclass {
      width: 50px !important;
    }

    .nonpritablediv {
      display: none !important;
    }

    .printtable {
      width: 100%;
      display: block !important;
    }
    /*.signspace td{
         padding: 10px;
         }*/

    .tableji {
      margin-left: 20px;
      margin-right: 20px;
    }
    /*.marginleft{
         width: 1000px !important;
         }*/

    .signcls {
      width: 800px !important;
    }

    .toptd1 {
      padding: 10px;
      border-right: 1px solid black;
    }

    .toptd2 {
      padding: 10px;
    }

    .toptd3 {
      text-align: right;
    }

    .top2td {
      padding: 10px;
    }

    p {
      margin: 0 !important;
    }

    @page {
      size: A4;
    }

    html {
      font-family: sans-serif;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table {

      border: none;
      background-color: transparent;
    }

    .table>thead>tr>th,
    .table>tbody>tr>th,
    .table>tfoot>tr>th,
    {
      padding: 5px;
      line-height: 1.42857143;
      vertical-align: top;
      /*border-top: 1px solid #ddd;*/
    }

    .table>thead>tr>td,
    .table>tbody>tr>td,
    .table>tfoot>tr>td {
      padding: 5px;
      line-height: 1.42857143;
      vertical-align: middle;
    }

    .table-label {
      width: 100px;
    }

    .table-label1 {
      width: 106px;
    }
    /*tr{
         width: 100%;
         }*/

    .table-name {
      width: 30%;
    }

    .table-price {
      width: 15%;
    }

    .table-qty {
      width: 15%;
    }

    .table-total {
      width: 20%;
    }

    .table-amount {
      width: 90px;
      text-align: right;
    }

    .text-right {
      text-align: right;
    }

    .text-left {
      text-align: left;
    }

    .text-center {
      text-align: center;
    }

    .table-text {
      text-align: right;
      display: block;
      height: 44px;
      padding: 10px;
      background: #fff;
    }

    .index {
      width: 5%;
    }

    .tbltop {
      width: 100%;
    }
  </style>
   </head>
  @if($invoice->productcount==1)

<body style="font-size:15.6px; ">
  @elseif($invoice->productcount==2)

  <body style="font-size:15px;">
    @elseif($invoice->productcount==3)

    <body style="font-size:14.4px;">
      @elseif($invoice->productcount==4)

      <body style="font-size:13.8px;">
        @elseif($invoice->productcount==5)

        <body style="font-size:13px;">
          @elseif($invoice->productcount==6)

          <body style="font-size:12.6px;">
            @elseif($invoice->productcount==7)

            <body style="font-size:12px;">
              @elseif($invoice->productcount==8)

              <body style="font-size:11.6px;">
                @elseif($invoice->productcount==9)

                <body style="font-size:11.2px;">
                  @elseif($invoice->productcount==10)

                  <body style="font-size:10.9px;">
                    @elseif($invoice->productcount==11)

                    <body style="font-size:10.6px;">
                      @elseif($invoice->productcoun==12)

                      <body style="font-size:10.2px;">
                        @elseif($invoice->productcount>=13)

                        <body style="font-size:10px;">@endif
                          <div class="panel-body page1">
                            <div class="printtable">
                              <table class=" tbltop" cellspacing="0">

                                <tr>
                                  <td colspan="2" class="toptd1 border-bottom">
                                    <img src="../images/logo/{{$invoice->user->logo}}" alt="">
                                  </td>
                                  <td colspan="3" class="toptd2 border-bottom">
                                    <h1><strong><u>Invoice</u></strong></h1>
                                    <p>{{$invoice->user->name}}<br> {{$invoice->user->address}}
                                    </p>
                                  </td>
                                  <td colspan="3" class="toptd3 border-bottom" style="padding-right: 10px;">
                                    <p style="padding-bottom: 4px;">Original-Copy</p><br>
                                    <p>Phone. No. :{{$invoice->user->mobile}}<br> Email:{{$invoice->user->email}}
                                      <br> CIN: {{$invoice->user->cin}}
                                    </p>
                                  </td>
                                </tr>
                                <tr>
                       <td colspan="4" class="top2td border-right border-bottom">
                                    <p><strong>Commissionarate: </strong>{{$invoice->user->commissionerate}}<br>
                                      <strong>GST Number: </strong>{{$invoice->user->gst}} <br>
                                      <!--<strong>Tax is payable on reverse charges: </strong> Yes/No<br>-->
                                      <strong>Invoice No.: </strong>{{$invoice->invoice_no}}<br>
                                      <strong>Invoice Date: </strong>
                                      <?php echo (date('d-m-Y H:i:s' ,strtotime($invoice->invoice_date))); ?>
                                    </p>
                       </td>
                 <td colspan="4" class="top2td border-bottom">
                                    <p><strong>Trasportation Mode: </strong>{{$invoice->transmode}}<br>
                                      <strong>Vehicle No.: </strong> {{$invoice->veh_no}} <br>
                                      <strong>Date/Time Of Supply: </strong><?php echo (date('d-m-Y H:i:s' ,strtotime($invoice->date_of_sup))); ?><br>
                                      <strong> Place of Supply: </strong>{{$invoice->p_of_sup}}
                                    </p>
                                  </td>
                                </tr>
                                <tr>
                    <td colspan="4" class="top2td border-right border-bottom">
                                    <h4><b><u>Detail Of Receiver(Billed to)</u></b></h4>
                                    <p>
                                      <strong>Name: </strong>{{$invoice->customer->customer_name}} <br>
                                      <strong> Address:  </strong>{{$invoice->customer->customer_address}} <br>
                                      <strong> Gst No.:  </strong>{{$invoice->customer->gst}}
                                    </p>
                                  </td>
                                  <td colspan="4" class="top2td border-bottom">
                                    <h4><b><u>Detail Of Consignee(Shipped to)</u></b></h4>
                                    <p>
                                   <strong>Name: </strong>{{$invoice->shipname}}<br>
				   <strong>Address: </strong>{{$invoice->shipaddress}}<br>
                                   <strong>Gst Number: </strong>{{$invoice->shipgst}}



                                    </p>
                                  </td>
                                </tr>
                              </table>
                              </div>
        <table width="100%" class="table border-top border-bottom" cellspacing="0">
 
                              <thead>
                                <tr>
                                  <th class="border-right">S.no</th>
                                  <th class="border-right">Product Name</th>
                                  <th class="border-right">HSN Code</th>
                                  <th class="border-right">No. of Packages</th>
                                  <th class="border-right">Unit</th>
                                 
                                  <th class="border-right">Qty</th>
                                   <th class="border-right">Price (Rs.)</th>
                                  <th class="text-right">Total</th>
                                </tr>
                              </thead>
                              <tbody>

                                @foreach($invoice->products as $index=>$product)
                                <tr>
                                  <td class="border-right">{{$index+1}}</td>
                                  <td class="border-right">{{$product->name}}</td>
                                  <td class="border-right">{{$product->hsn_code}}</td>
                                  <td class=" border-right">{{$product->package}}</td>
                                  <td class="border-right">{{$product->unit}}</td>
                                  <td class=" border-right">{{$product->qty}}</td>
                                  <td class=" border-right">{{$product->price}}</td>
                                  <td class=" text-right">{{$product->total}}</td>
                                </tr>
                                @endforeach

                              </tbody>
                            </table>
        
                            <table width="100%" cellspacing="0" cellpadding="0">
                              <tr>
                                <td colspan="2" style="padding-left:20px;" class="border-top">
                                  <p><strong>Grand Total (In Words) : </strong>Rs. {{$invoice->numinwords}}</p>
                                  <p><strong>Total Tax(In Words) : </strong>Rs. {{$invoice->taxinwords}}</p>
                                </td>
                                <td colspan="2" style="padding:4px 10px 4px 0px; text-align:right;" class="border-top">
                                  <p>
                                    <strong>Freight charges :</strong><br>
                                    <strong>Insurance Charges :</strong><br>
                                    <strong>Other Changes :</strong><br>
                                    <strong>Taxable Value :</strong><br>
                                    @if($invoice->tax==18.00)
                                       <strong>IGST {{$invoice->tax}}% :</strong><br>
                                    @elseif($invoice->tax!=18.00)
                                       <strong>CGST  {{$invoice->tax}}% :</strong><br>
                                       <strong>SGST  {{$invoice->tax}}% :</strong><br> @endif
                                   
                                    <strong>Total Tax :</strong>
                                  </p>
                                </td>
                                <td style="padding:4px 10px 4px 0px;" class="text-right border-top">
                                  <p>
                                     Rs.{{$invoice->fcharges}}<br>
                                     Rs.{{$invoice->insurcharges}}<br>
                                     Rs.{{$invoice->other}}<br>
                                     Rs.{{$invoice->sub_total}}<br>
                                     @if($invoice->tax==18.00)
                                        Rs.{{$invoice->igst}}<br>
                                     @elseif($invoice->tax!=18.00)
                                        Rs.{{$invoice->gst}}<br>
                                        Rs.{{$invoice->gst}}<br>
                                     @endif
                                      <span style=" border-top:1px solid black;">Rs.{{$invoice->rgst}}.00<span><br>

                                  </p>
                                </td>
                              </tr>
            <tr class="tblamount invoiceline">
                                <td colspan="2">
                                  <h4><strong>Electronic Reference number</strong></h4>
                                </td>
                                <td colspan="3" class="text-right" style="padding:4px;">
                                  <strong> Invoice Total : </strong><span id="totallval"> Rs.{{$invoice->grand_total}}</span>
                                </td>
                              </tr>
           <tr class="text-right tblamount border-bottom ">
                                <td colspan="5" style="padding:4px;">
                                 <!-- <h4><strong> Amount Of Tax Subject to Reverse Charge: </strong>0</h4>-->
                                </td>
                              </tr>
            <tr class=" tblamount" >
              	<td colspan="3" class="border-right border-top" style="padding:15px;">
                                  <div>
                                    Payment can also be made ONLINE through Net Banking to the following accounts: <strong>ICICI Bank </strong><strong>A/c No. :</strong>125405000432 <strong>For RTGS IFSC Code: </strong> ICIC0001254
                                  </div>
                                  <div><br>
                                   <strong>Terms and Condition</strong>
                                    <p>{{$invoice->title}}</p>
                                  </div>
			</td>
              <td  colspan="2" class="border-top" style="padding:20px;">
                  <h6 style="padding-left:5px; height: 90px;"><strong>FOR: {{$invoice->user->name}} </strong> </h6>
                  <h6 class="text-right" style="padding-right: 12px;"><strong>Authorised Signature</strong> </h6>
               </td>
            </tr>
         </table>
      </div>
      <table style="border:none; " ><tr><td ><p style="font-size:9px; ">Certified that particular given above are true and correct and the amount indicated above represent the price actually charged and that is no flow of additional consideration directly or indirectly for the BUYER<p></td></tr></table>
                                 <div class="panel-body page2"  style="page-break-before: always; ">
                            <div class="printtable">
                              <table class=" tbltop" cellspacing="0">

                                <tr>
                                  <td colspan="2" class="toptd1 border-bottom">
                                    <img src="../images/logo/{{$invoice->user->logo}}" alt="">
                                  </td>
                                  <td colspan="3" class="toptd2 border-bottom">
                                    <h1><strong><u>Invoice</u></strong></h1>
                                    <p>{{$invoice->user->name}}<br> {{$invoice->user->address}}
                                    </p>
                                  </td>
                                  <td colspan="3" class="toptd3 border-bottom" style="padding-right: 10px;">
                                    <p style="padding-bottom: 4px;">Duplicate-Copy</p><br>
                                    <p>Phone. No. :{{$invoice->user->mobile}}<br> Email:{{$invoice->user->email}}
                                      <br> CIN: {{$invoice->user->cin}}
                                    </p>
                                  </td>
                                </tr>
                                <tr>
                       <td colspan="4" class="top2td border-right border-bottom">
                                    <p><strong>Commissionarate: </strong>{{$invoice->user->commissionerate}}<br>
                                      <strong>GST Number: </strong>{{$invoice->user->gst}} <br>
                                      <!--<strong>Tax is payable on reverse charges: </strong> Yes/No<br>-->
                                      <strong>Invoice No.: </strong>{{$invoice->invoice_no}}<br>
                                      <strong>Invoice Date: </strong>
                                      <?php echo (date('d-m-Y H:i:s' ,strtotime($invoice->invoice_date))); ?>
                                    </p>
                       </td>
                 <td colspan="4" class="top2td border-bottom">
                                    <p><strong>Trasportation Mode: </strong>{{$invoice->transmode}}<br>
                                      <strong>Vehicle No.: </strong> {{$invoice->veh_no}} <br>
                                      <strong>Date/Time Of Supply: </strong>  <?php echo (date('d-m-Y H:i:s' ,strtotime($invoice->date_of_sup))); ?><br>
                                      <strong> Place of Supply: </strong>{{$invoice->p_of_sup}}
                                    </p>
                                  </td>
                                </tr>
                                <tr>
                    <td colspan="4" class="top2td border-right border-bottom">
                                    <h4><b><u>Detail Of Receiver(Billed to)</u></b></h4>
                                    <p>
                                      <strong>Name: </strong>{{$invoice->customer->customer_name}} <br>
                                      <strong> Address:  </strong>{{$invoice->customer->customer_address}} <br>
                                      <strong> Gst No.:  </strong>{{$invoice->customer->gst}}
                                    </p>
                                  </td>
                                  <td colspan="4" class="top2td border-bottom">
                                    <h4><b><u>Detail Of Consignee(Shipped to)</u></b></h4>
                                    <p>
                                   <strong>Name: </strong>{{$invoice->shipname}}<br>
				   <strong>Address: </strong>{{$invoice->shipaddress}}<br>
                                   <strong>Gst Number: </strong>{{$invoice->shipgst}}

                                    </p>
                                  </td>
                                </tr>
                              </table>
                              </div>
        <table width="100%" class="table border-top border-bottom" cellspacing="0">
 
                              <thead>
                                <tr>
                                  <th class="border-right">S.no</th>
                                  <th class="border-right">Product Name</th>
                                  <th class="border-right">HSN Code</th>
                                  <th class="border-right">No. of Packages</th>
                                  <th class="border-right">Unit</th>
                                 
                                  <th class="border-right">Qty</th>
                                   <th class="border-right">Price (Rs.)</th>
                                  <th class="text-right">Total</th>
                                </tr>
                              </thead>
                              <tbody>

                                @foreach($invoice->products as $index=>$product)
                                <tr>
                                  <td class="border-right">{{$index+1}}</td>
                                  <td class="border-right">{{$product->name}}</td>
                                  <td class="border-right">{{$product->hsn_code}}</td>
                                  <td class=" border-right">{{$product->package}}</td>
                                  <td class="border-right">{{$product->unit}}</td>
                                 
                                  <td class=" border-right">{{$product->qty}}</td>
                                   <td class=" border-right">{{$product->price}}</td>
                                  <td class=" text-right">{{$product->total}}</td>
                                </tr>
                                @endforeach

                              </tbody>
                            </table>
        
                            <table width="100%" cellspacing="0" cellpadding="0">
                              <tr>
                                <td colspan="2" style="padding-left:20px;" class="border-top">
                                  <p><strong>Grand Total (In Words) : </strong>Rs. {{$invoice->numinwords}}</p>
                                  <p><strong>Total Tax(In Words) : </strong>Rs. {{$invoice->taxinwords}}</p>
                                </td>
                                <td colspan="2" style="padding:4px 10px 4px 0px; text-align:right;" class="border-top">
                                  <p>
                                    <strong>Freight charges :</strong><br>
                                    <strong>Insurance Charges :</strong><br>
                                    <strong>Other Changes :</strong><br>
                                    <strong>Taxable Value :</strong><br>
                                    @if($invoice->tax==18.00)
                                       <strong>IGST {{$invoice->tax}}% :</strong><br>
                                    @elseif($invoice->tax!=18.00)
                                       <strong>CGST  {{$invoice->tax}}% :</strong><br>
                                       <strong>SGST  {{$invoice->tax}}% :</strong><br> @endif
                                   
                                    <strong>Total Tax :</strong>
                                  </p>
                                </td>
                                <td style="padding:4px 10px 4px 0px;" class="text-right border-top">
                                  <p>
                                     Rs.{{$invoice->fcharges}}<br>
                                     Rs.{{$invoice->insurcharges}}<br>
                                     Rs.{{$invoice->other}}<br>
                                     Rs.{{$invoice->sub_total}}<br>
                                     @if($invoice->tax==18.00)
                                        Rs.{{$invoice->igst}}<br>
                                     @elseif($invoice->tax!=18.00)
                                        Rs.{{$invoice->gst}}<br>
                                        Rs.{{$invoice->gst}}<br>
                                     @endif
                                      <span style=" border-top:1px solid black;">Rs.{{$invoice->rgst}}.00<span><br>

                                  </p>
                                </td>
                              </tr>
            <tr class="tblamount invoiceline">
                                <td colspan="2">
                                  <h4><strong>Electronic Reference number</strong></h4>
                                </td>
                                <td colspan="3" class="text-right" style="padding:4px;">
                                  <strong> Invoice Total : </strong><span id="totallval"> Rs.{{$invoice->grand_total}}</span>
                                </td>
                              </tr>
           <tr class="text-right tblamount border-bottom ">
                                <td colspan="5" style="padding:4px;">
                                  <!--<h4><strong> Amount Of Tax Subject to Reverse Charge: </strong>0</h4>-->
                                </td>
                              </tr>
            <tr class=" tblamount" >
              	<td colspan="3" class="border-right border-top" style="padding:15px;">
                                  <div>
                                    Payment can also be made ONLINE through Net Banking to the following accounts: <strong>ICICI Bank </strong><strong>A/c No. :</strong>125405000432 <strong>For RTGS IFSC Code: </strong> ICIC0001254
                                  </div>
                                  <div><br>
                                   <strong>Terms and Condition</strong>
                                    <p>{{$invoice->title}}</p>
                                  </div>
			</td>
              <td  colspan="2" class="border-top" style="padding:20px;">
                  <h6 style="padding-left:5px; height: 90px;"><strong>FOR: {{$invoice->user->name}} </strong> </h6>
                  <h6 class="text-right" style="padding-right: 12px;"><strong>Authorised Signature</strong> </h6>
               </td>
            </tr>
         </table>
      </div>
      <table style="border:none; " ><tr><td ><p style="font-size:9px; ">Certified that particular given above are true and correct and the amount indicated above represent the price actually charged and that is no flow of additional consideration directly or indirectly for the BUYER<p></td></tr></table>
                                <div class="panel-body page3"  style="page-break-before: always; ">
                            <div class="printtable">
                              <table class=" tbltop" cellspacing="0">

                                <tr>
                                  <td colspan="2" class="toptd1 border-bottom">
                                    <img src="../images/logo/{{$invoice->user->logo}}" alt="">
                                  </td>
                                  <td colspan="3" class="toptd2 border-bottom">
                                    <h1><strong><u>Invoice</u></strong></h1>
                                    <p>{{$invoice->user->name}}<br> {{$invoice->user->address}}
                                    </p>
                                  </td>
                                  <td colspan="3" class="toptd3 border-bottom" style="padding-right: 10px;">
                                    <p style="padding-bottom: 4px;">Triplicate-Copy</p><br>
                                    <p>Phone. No. :{{$invoice->user->mobile}}<br> Email:{{$invoice->user->email}}
                                      <br> CIN: {{$invoice->user->cin}}
                                    </p>
                                  </td>
                                </tr>
                                <tr>
                       <td colspan="4" class="top2td border-right border-bottom">
                                    <p><strong>Commissionarate: </strong>{{$invoice->user->commissionerate}}<br>
                                      <strong>GST Number: </strong>{{$invoice->user->gst}} <br>
                                     <!-- <strong>Tax is payable on reverse charges: </strong> Yes/No<br>-->
                                      <strong>Invoice No.: </strong>{{$invoice->invoice_no}}<br>
                                      <strong>Invoice Date: </strong>
                                      <?php echo (date('d-m-Y H:i:s' ,strtotime($invoice->invoice_date))); ?>
                                    </p>
                       </td>
                 <td colspan="4" class="top2td border-bottom">
                                    <p><strong>Trasportation Mode: </strong>{{$invoice->transmode}}<br>
                                      <strong>Vehicle No.: </strong> {{$invoice->veh_no}} <br>
                                      <strong>Date/Time Of Supply: </strong><?php echo (date('d-m-Y H:i:s' ,strtotime($invoice->date_of_sup))); ?><br>
                                      <strong> Place of Supply: </strong>{{$invoice->p_of_sup}}
                                    </p>
                                  </td>
                                </tr>
                                <tr>
                    <td colspan="4" class="top2td border-right border-bottom">
                                    <h4><b><u>Detail Of Receiver(Billed to)</u></b></h4>
                                    <p>
                                      <strong>Name: </strong>{{$invoice->customer->customer_name}} <br>
                                      <strong> Address:  </strong>{{$invoice->customer->customer_address}} <br>
                                      <strong> Gst No.:  </strong>{{$invoice->customer->gst}}
                                    </p>
                                  </td>
                                  <td colspan="4" class="top2td border-bottom">
                                    <h4><b><u>Detail Of Consignee(Shipped to)</u></b></h4>
                                    <p>
                                   <strong>Name: </strong>{{$invoice->shipname}}<br>
				   <strong>Address: </strong>{{$invoice->shipaddress}}<br>
                                   <strong>Gst Number: </strong>{{$invoice->shipgst}}

                                    </p>
                                  </td>
                                </tr>
                              </table>
                              </div>
        <table width="100%" class="table border-top border-bottom" cellspacing="0">
 
                              <thead>
                                <tr>
                                  <th class="border-right">S.no</th>
                                  <th class="border-right">Product Name</th>
                                  <th class="border-right">HSN Code</th>
                                  <th class="border-right">No. of Packages</th>
                                  <th class="border-right">Unit</th>
                                 
                                  <th class="border-right">Qty</th>
                                   <th class="border-right">Price (Rs.)</th>
                                  <th class="text-right">Total</th>
                                </tr>
                              </thead>
                              <tbody>

                                @foreach($invoice->products as $index=>$product)
                                <tr>
                                  <td class="border-right">{{$index+1}}</td>
                                  <td class="border-right">{{$product->name}}</td>
                                  <td class="border-right">{{$product->hsn_code}}</td>
                                  <td class=" border-right">{{$product->package}}</td>
                                  <td class="border-right">{{$product->unit}}</td>
                                 
                                  <td class=" border-right">{{$product->qty}}</td>
                                   <td class=" border-right">{{$product->price}}</td>
                                  <td class=" text-right">{{$product->total}}</td>
                                </tr>
                                @endforeach

                              </tbody>
                            </table>
        
                            <table width="100%" cellspacing="0" cellpadding="0">
                              <tr>
                                <td colspan="2" style="padding-left:20px;" class="border-top">
                                  <p><strong>Grand Total (In Words) : </strong>Rs. {{$invoice->numinwords}}</p>
                                  <p><strong>Total Tax(In Words) : </strong>Rs. {{$invoice->taxinwords}}</p>
                                </td>
                                <td colspan="2" style="padding:4px 10px 4px 0px; text-align:right;" class="border-top">
                                  <p>
                                    <strong>Freight charges :</strong><br>
                                    <strong>Insurance Charges :</strong><br>
                                    <strong>Other Changes :</strong><br>
                                    <strong>Taxable Value :</strong><br>
                                    @if($invoice->tax==18.00)
                                       <strong>IGST {{$invoice->tax}}% :</strong><br>
                                    @elseif($invoice->tax!=18.00)
                                       <strong>CGST  {{$invoice->tax}}% :</strong><br>
                                       <strong>SGST  {{$invoice->tax}}% :</strong><br> @endif
                                   
                                    <strong>Total Tax :</strong>
                                  </p>
                                </td>
                                <td style="padding:4px 10px 4px 0px;" class="text-right border-top">
                                  <p>
                                     Rs.{{$invoice->fcharges}}<br>
                                     Rs.{{$invoice->insurcharges}}<br>
                                     Rs.{{$invoice->other}}<br>
                                     Rs.{{$invoice->sub_total}}<br>
                                     @if($invoice->tax==18.00)
                                        Rs.{{$invoice->igst}}<br>
                                     @elseif($invoice->tax!=18.00)
                                        Rs.{{$invoice->gst}}<br>
                                        Rs.{{$invoice->gst}}<br>
                                     @endif
                                      <span style=" border-top:1px solid black;">Rs.{{$invoice->rgst}}.00<span><br>

                                  </p>
                                </td>
                              </tr>
            <tr class="tblamount invoiceline">
                                <td colspan="2">
                                  <h4><strong>Electronic Reference number</strong></h4>
                                </td>
                                <td colspan="3" class="text-right" style="padding:4px;">
                                  <strong> Invoice Total : </strong><span id="totallval"> Rs.{{$invoice->grand_total}}</span>
                                </td>
                              </tr>
           <tr class="text-right tblamount border-bottom ">
                                <td colspan="5" style="padding:4px;">
                                  <!--<h4><strong> Amount Of Tax Subject to Reverse Charge: </strong>0</h4>-->
                                </td>
                              </tr>
            <tr class=" tblamount" >
              	<td colspan="3" class="border-right border-top" style="padding:15px;">
                                  <div>
                                    Payment can also be made ONLINE through Net Banking to the following accounts: <strong>ICICI Bank </strong><strong>A/c No. :</strong>125405000432 <strong>For RTGS IFSC Code: </strong> ICIC0001254
                                  </div>
                                  <div><br>

                                   <strong>Terms and Condition</strong>
                                    <p>{{$invoice->title}}</p>
                                  </div>
			</td>
              <td  colspan="2" class="border-top" style="padding:20px;">
                  <h6 style="padding-left:5px; height: 90px;"><strong>FOR: {{$invoice->user->name}} </strong> </h6>
                  <h6 class="text-right" style="padding-right: 12px;"><strong>Authorised Signature</strong> </h6>
               </td>
            </tr>
         </table>
      </div>
      <table style="border:none; " ><tr><td ><p style="font-size:9px; ">Certified that particular given above are true and correct and the amount indicated above represent the price actually charged and that is no flow of additional consideration directly or indirectly for the BUYER<p></td></tr></table>
   </body>
</html>
