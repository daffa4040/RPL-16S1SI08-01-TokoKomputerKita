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

                <?php if($history != false) : ?>
                  <?= $this->session->set_flashdata('massage')?>
                  <table class="table table-bordered table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Invoice ID #</th>
                        <th>Invoice Date</th>
                        <th>Due Date</th>
                        <th>Total Amout</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach ($history as $row) :
                      ?>
                      <tr>
                        <td><?= $row->id ?></td>
                        <td><?= $row->date  ?></td>
                        <td><?= $row->due_date  ?></td>
                        <td><?= $row->total ?></td>
                        <td>
                          <?= $row->status ?>
                          <?php
                            if($row->status == 'unpaid'){
                          anchor('customer/payment_confirmation/'.$row->id,'Confirm Payment',
                                      array('class'=>'btn btn-primary btn-xs')
                                    );
                                  }
                          ?>
                          </td>
                      </tr>
                      <?php endforeach; ?>
                      </tbody>
                  </table>
                  <?php else : ?>
                      <p align="center">There are no Shopping History For you... <?=anchor('/','Shop Now')?></p>
                  <?php endif ; ?>
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