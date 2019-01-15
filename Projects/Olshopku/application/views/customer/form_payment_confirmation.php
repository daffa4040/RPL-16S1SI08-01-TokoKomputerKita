 <?php $this->load->view('front/header')?>
  <!-- catg header banner section -->
  <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                    <div><?=validation_errors()?></div>
                    <div><?=$this->session->flashdata('error')?></div>
                    <?=form_open('customer/payment_confirmation/', ['class'=>'form-horizontal'])?>

                      <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Invoice ID</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="invoice_id" value="<?=($invoice_id != 0?$invoice_id:'')?>">
                      </div>
                      </div>

                      <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Amount Transfered</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="amount">
                      </div>
                      </div>
                      <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Confirm My Payment</button>
                      </div>
                      </div>
                    </form>
                </div>
             </form>
             <!-- Cart Total view -->
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
<?php $this->load->view('front/footer')?>