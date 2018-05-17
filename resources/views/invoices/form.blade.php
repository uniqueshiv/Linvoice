 <div id="loader-wrapper" style="display:none;">
        <div id="loader"></div>
         <div class="loader-section section-left"></div>
</div> 
<div class="row">
    <div class="col-sm-4">

        <div class="form-group col-sm-4">

            <label>Client Name</label>
           </div>
           <div class="form-group col-sm-8">
            <select id="customer_id" class="form-control" v-model="form.client_id" placeholder="Select Client">
            @if($contents=="")
                <?php
                    foreach ($customers as $r) 
                    {
                            ?>
                            <option value="<?= $r->customer_id ?>"  email="<?= $r->customer_email ?>"  number="<?= $r->mobile_no ?>"  company="<?= $r->description ?>"  cname="<?= $r->customer_name ?>" caddress="<?= $r->customer_address ?>"><?= $r->customer_name ?></option>
                            <?php           
                    }

                ?>
                @endif
                @if($contents!="")
              <?php
               
                    foreach ($customers as $r) 
                    {
                            ?>
                             
                            <option value="<?= $r->customer_id ?>" {{ $r->customer_id==$contents->customer_id ? 'selected="selected"' : '' }}  email="<?= $r->customer_email ?>"  number="<?= $r->mobile_no ?>"  company="<?= $r->description ?>"  cname="<?= $r->customer_name ?>" caddress="<?= $r->customer_address ?>"><?= $r->customer_name ?></option>
                            <?php           
                    }

               ?>
                  @endif
            </select>
            <p v-if="errors.client_id" class="error">@{{errors.client_id[0]}}</p>
            </div>

            <div id="details" class="form-group">
              
            </div>

       
        </div>

    <div class="col-sm-4" >


 
 @if($contents!="")
 <div id="chek" ><strong>Do you want change Shipping Address </strong><input type="checkbox" name="check" id="clinttoggle" onchange="valueChanged()"></div>
 @else 
 <div id="chek"  style="display:none"><strong>Do you want change Shipping Address </strong><input type="checkbox" name="check" id="clinttoggle"  onchange="valueChanged()"></div>
 @endif
     <div  id="clientdetails2" style="display:none"  padding-left: 10px;">
           
              <p> Name:</p> <input type="text" class="form-control"  v-model="form.client.shipname">
                  
              <p> Address :</p> <textarea style="height: auto;" class="form-control"  v-model="form.client.shipaddress"></textarea>
                     
             <p> Phone :</p> <input type="text" class="form-control" v-model="form.client.shipcontact">
             <p> GST Number :</p> <input type="text" class="form-control" v-model="form.client.gst">                      
              
      </div>

</div>
  

    <div class="col-sm-4">

        <div class="row" >
            <div class="col-sm-3 form-group">
                <label>Invoice Date :</label>
            </div>
                   <div  data-date-format="yyyy-mm-dd hh:ii:ss"  class=" form-group col-sm-7">
                     <input size="16" type="datetime"  readonly="" v-model="form.invoice_date" class="form_datetime  form-control">
                     <span class="input-group-btn add-on">
                        <button class="btn btn-info btn-xs" type="button"><i class="fa fa-calendar"></i></button>
                 </span>
                <!-- <input type="date" class="form-control whiteonly" readonly v-model="form.invoice_date"  size="16"> -->
     
                <p v-if="errors.invoice_date" class="error">@{{errors.invoice_date[0]}}</p>
           </div>
             <div class="col-sm-2"></div>
          </div>   
          
 
    </div>
</div>
<div class="row" style="padding-top: 15px;">
            <div class="col-md-3">
        <div class=" form-group">
            <label>Transportation Mode</label>
        </div>
        <div class=" form-group">
          {!! Form::text('search_text1', null, array('class' => 'pr form-control search_text1 ', 'v-model'=> 'form.transmode',  'onfocus'=>'searchtransport()'))!!}
         
        </div>
    </div>
          <div class="col-md-3">
                <div class="form-group">
                
                    <label>Veh. No:</label>
                </div>
                <div class=" form-group">
                 {!! Form::text('search_text2', null, array('class' => 'pr form-control search_text2', 'v-model'=> 'form.veh_no',  'onfocus'=>'searchv()'))!!}
                 </div>  
        </div>
          <div class="col-md-3">
                <div class="form-group">
                    <label>Place of supply</label>
                </div>
                <div class=" form-group">
                 {!! Form::text('search_text3', null, array('class' => 'pr form-control search_text3', 'v-model'=> 'form.p_of_sup',  'onfocus'=>'searchpos()'))!!}
              
                </div>
        </div>
        <div class="col-md-3">
                <div class=" form-group">
                    <label>Date and time of Supply</label>
                </div>
                <div class=" form-group">
                   <div data-date-format="yyyy-mm-dd hh:ii:ss"  >
                     <input size="16" type="datetime"  readonly="" v-model="form.date_of_sup" class="form_datetime form-control">
                <!-- <input type="date" class="form-control whiteonly" readonly v-model="form.invoice_date"  size="16"> -->
     
                <p v-if="errors.date_of_sup" class="error">@{{errors.date_of_sup[0]}}</p>
           </div>
                </div>
        </div>
</div>

<div v-if="errors.products_empty">
    <p class="alert alert-danger">@{{errors.products_empty[0]}}</p>
    <hr>
</div>

<table class="table table-striped invoicetable">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>HSN Code</th>
            <th>No. of Packages</th>
            <th>Unit</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="(index ,product) in form.products">

             <td id="@{{index}}" class=" table-name" :class="{'table-error': errors['products.' + $index + '.name']}">
                {!! Form::text('search_text', null, array('placeholder' => 'Product','class' => 'pr table-control search_text ', 'v-model'=> 'product.name'  , 'onfocus'=>'search()')) !!}
            </td>
            <td class="table-price" :class="{'table-error': errors['products.' + $index + '.hsn_code']}">
              <select id="@{{index}}hsn"  class="table-control" v-model="product.hsn_code" placeholder="000000">
               <?php
                                            foreach ($product as $index => $pr) 
                                            {
                                                    ?>
                                                    <option value="<?= $pr->hsn_code ?>" > <?= $pr->hsn_code?> (<?= $pr->name?>) </option>
                                                    <?php
                                                                 
                                            }
                ?>
              </select>
               
            </td>
             <td class="table-price" :class="{'table-error': errors['products.' + $index + '.package']}">
       
          <input type="text" class="table-control"  v-model="product.package">
            </td>
            <td class="table-price" :class="{'table-error': errors['products.' + $index + '.unit']}">
                <input type="text" class="table-control"  v-model="product.unit">
            </td>
            <td class="table-price" :class="{'table-error': errors['products.' + $index + '.price']}">
                <input type="text" class="table-control"  v-model="product.price">
            </td>
            <td class="table-qty" :class="{'table-error': errors['products.' + $index + '.qty']}">
                <input type="text" class="table-control" v-model="product.qty">
            </td>


            <td class="table-total">
                <span class="table-text">@{{((product.qty * product.price).toFixed(2))}}</span>
            </td>
            <td class="table-remove text-center">
                   <a class="btn btn-danger btn-xs" @click="remove(product)" ><i class="fa fa-trash-o"></i></a>
          </td>
        </tr>
    </tbody>
    </table>
    <div>
        <div class="row">
            <div class="col-md-6">
            <a @click="addLine" class="btn btn-success btn-xs" id="pulsate-once"><i class="fa fa-plus"></i> Line</a>
            <div class="clsterms">
                <strong>OUR TERMS AND CONDITIONS OF SALE</strong></br>
                <textarea type="text" class="form-control"  name="terms" v-model="form.title">Goods once sold will not be taken back or exchanged. All disputes are subject to Ghaziabad Jurisdiction.</textarea>
               <!--  <textarea type="text" rows="4" cols="50" name="terms"> -->
 <h4 >Grand Total (In Words) :</h4>  Rs. @{{inwords}}
<input type="text" class="form-control"  v-model="form.numinwords" value=@{{inwords}} style="visibility:hidden;">
            </div>
            </div>
            <div class="col-md-5 invoice-block pull-right">
             <ul class="unstyled amount">
                
             </ul>
            <div class="row">
                <div class="col-md-6">
                    <ul class="unstyled amountx">
                        
                        <li><strong>Freight Charges</strong></li>
                       
                        <li><strong>Insurance Charges</strong></li>
                        <li><strong>Other Changes</strong></li>
                        <li><strong>Taxable Value: </strong></li>
                        <li><strong>Tax1</strong></li> 
                        <li  class="tax2"  style="display:none;"><strong>Tax2</strong></li> 
<li><strong>Total Tax</strong></li> 
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="unstyled amountt">
                   
                        <li><input type="text" class="form-control" v-model="form.fcharges"></li>
                      
                        <li><input type="text" class="form-control" v-model="form.insurcharges" ></li>
                        <li><input type="text" class="form-control" v-model="form.other" ></li>
                        <li style=" border-radius:0px;"><strong> Rs.@{{subTotal}}</strong></li>
     <li style="border-top: 1px solid black; border-radius:0px;">  
                                <select id ="tax1" class="form-control" v-model="form.tax">
                                        <?php
                                            foreach ($taxes as $index => $t) 
                                            {
                                                    ?>
                                                    <option id= {{$index}} value="<?= $t->tax ?>" ><?= $t->name?> <?= $t->tax?>%</option>
                                                    <?php
                                                                 
                                            }
                                          ?>
                                </select>
 <p v-if="errors.tax" class="error">@{{errors.tax[0]}}</p>
                        </li>
                         <li class="tax2" style="display:none;">  
                           <select class="form-control" v-model="form.tax_other">
                             <option id= "gst" value="" selected></option>
                            
                                                 
                                </select>

                                
                        </li>
        <li style="" ><strong> Rs.@{{totaltax}}.00</strong></li>
                       
                    </ul>
                </div>
                
            </div>
                                  <ul style="border-top: 1px solid black; border-bottom: 1px solid black; border-radius:0px;" class="unstyled amount">
                             
                                    <li ><strong>Grand Total :</strong> Rs.@{{grandTotal}}</li> 
                                  </ul>
             </div>
         </div>

        
    </div>
