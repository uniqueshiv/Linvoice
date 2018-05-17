var app = new Vue({
  el: '#invoice',
  data: {
    isProcessing: false,
    form: {},
    errors: {}
  },
  created: function () {
    Vue.set(this.$data, 'form', _form);
  },
  methods: {
    addLine: function() {
      this.form.products.push({hsn_code:'', package: '', unit: '', name: '', price: 0, qty: 1});
    },
    remove: function(product) {
      this.form.products.$remove(product);
    },
    
    create: function() {
   
        $("#loader-wrapper").show();
  this.form.numinwords=this.inwords;
this.form.taxinwords=this.taxwords;
    
      this.isProcessing = true;
      
      this.$http.post('/invoices', this.form)
        .then(function(response) { 
          if(response.data.created) {
             $("#loader-wrapper").hide();
          window.location.href = '/invoices';
          } 
          
        })
        .catch(function(response) {
          $("#loader-wrapper").hide();
          this.isProcessing = false;
          Vue.set(this.$data, 'errors', response.data);
          
        })
    },
    update: function() {
        $("#loader-wrapper").show();
      this.isProcessing = true;

  this.form.numinwords=this.inwords;
this.form.taxinwords=this.taxwords;
      this.$http.put('/invoices/' + this.form.invoice_id, this.form)
        .then(function(response) {
          window.location.href = '/invoices';
                          
          })

        .catch(function(response) {
           $("#loader-wrapper").hide();
          this.isProcessing = false;
          Vue.set(this.$data, 'errors', response.data);

        })
    }
  }
  ,
  computed: {
    subTotalofproduct: function() {
      return this.form.products.reduce(function(carry, product) {
          return Math.round(carry + (parseFloat(product.qty) * parseFloat(product.price)));
      }, 0);
    },
    subTotal: function() { 
          return Math.ceil(this.subTotalofproduct  + parseFloat(this.form.other) + parseFloat(this.form.insurcharges) + parseFloat(this.form.fcharges) + parseFloat(this.form.lpcharges));
    },
    grandTotal: function(){
	if(this.form.tax){
	     var total=  this.subTotal + parseFloat(18.00)*this.subTotal/100 ;
	     
	}
	else{
	 var total=  this.subTotal;
	}
	   return Math.round(total);
   },
   inwords: function(){
   num= this.grandTotal;
   //console.log(subTotal);

var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];

    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
  return str;
},
 taxwords: function(){

  var num= Math.round(parseFloat(18.00)*this.subTotal/100) ;

var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];

    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
  return str;
},
totaltax: function(){
     if(this.form.tax){
         return Math.round(parseFloat(18.00)*this.subTotal/100)
     }
}
  }
})

