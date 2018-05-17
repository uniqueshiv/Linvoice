<?php $__env->startPush('css'); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/jquery.steps.css')); ?>" />
 

    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/app.css')); ?>">


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div id="customer">
     <notifications></notifications>
        <div class="container">
            <div class="row padtop">
                <div class="col-md-8">
                    <div class="panel panel-default" v-cloak>
                        <div class="panel-heading">
                            <div class="clearfix">
                                <span class="panel-title">Add Customer</span>
                                <a href="<?php echo e(route('customers.index')); ?>" class="btn btn-default pull-right">Back</a>
                            </div>
                        </div>
                     
          <section class="wrapper site-min-height">
          
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-body">
                           <?php echo $__env->make('customers.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <fieldset title="Step 3" class="step" id="default-step-2" >
                                      <legend> </legend>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Full Name</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">{{form.customer_name}}</p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Email Address</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">{{form.customer_email}}</p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Company</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">{{form.description}}</p>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Phone</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">{{form.mobile_no}}</p>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Address</label>
                                          <div class="col-lg-10">
                                              <p class="form-control-static">
                                                 {{form.customer_address}}</p>
                                          </div>
                                      </div>
                                  </fieldset>
                                  <input  class="finish btn btn-danger" @click="create" :disabled="isProcessing" value="Finish"/>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>


      </section>
                           
                           
                        </div>
                       
                    </div>
                </div>
            </div>
         </div>
   

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  
  <!--Form Wizard-->
  <script src="<?php echo e(URL::asset('assets/js/jquery.steps.min.js')); ?>" type="text/javascript"></script>
  

    <!--script for this page-->
    <script src="<?php echo e(URL::asset('assets/js/jquery.stepy.js')); ?>"></script>

    <!--common script for all pages-->
    
    <script src="<?php echo e(URL::asset('js/vue.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/vue-resource.min.js')); ?>"></script>
    <script type="text/javascript">
        Vue.http.headers.common['X-CSRF-TOKEN'] = '<?php echo e(csrf_token()); ?>';

        window._form = {
            customer_name: '',
            customer_address: '',
            customer_ship_add: '',
            customer_email: '',
            description: '',
            mobile_no: ''
           
        };


    </script>


     <script>

    jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[ a-z]+$/i.test(value);
}, "Letters only please"); 
      
   

      //step wizard
     
      $(document).ready(function () {


          
          $('#profileForm').stepy({
              backLabel: 'Previous',
              block: true,
              nextLabel: 'Next',
              titleClick: true,
              titleTarget: '.stepy-tab',
              transition: 'slide',
              validate: true,
             

          });

               // Toastr
     
        
      });
  </script>



    <script src="<?php echo e(URL::asset('js/custapp.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.client', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>