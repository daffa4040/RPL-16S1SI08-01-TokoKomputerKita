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
                  <table class="table table-bordered table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $i=0;
                        foreach ($this->cart->contents() as $items) : 
                        $i++;
                      ?>
                      <tr>
                        <td><?= $i ?></td>
                        <td><?= $items['name'] ?></td>
                        <td><?= $items['qty'] ?></td>
                        <td align="right"><?= number_format($items['price'],0,',','.') ?></td>
                        <td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
                      </tr>
                      <?php endforeach; ?>
                      </tbody>
                  </table>
                </div>
             </form>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <table class="aa-totals-table">
                 <tbody>
                    <tr>
                      <th align="right" colspan="4">Total</th>
                      <td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
                    </tr>
                 </tbody>
               </table>
                  <div align="center">
                    <?= anchor('welcome/clear_cart','Clear Cart',['class'=>'btn btn-danger']) ?> 
                    <?= anchor(base_url(),'Continue Shopping',['class'=>'btn btn-primary']) ?> 
                    <?= anchor('order','Check Out',['class'=>'btn btn-success']) ?>
                  </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
<?php $this->load->view('front/footer')?>