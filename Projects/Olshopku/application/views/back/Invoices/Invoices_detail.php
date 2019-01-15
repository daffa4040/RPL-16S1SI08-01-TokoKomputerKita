<?php $this->load->view('back/header')?>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
              <!-- /.col-->
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Produk</div>
                  <div class="card-body">
                      <h3>Items Ordered in Invoice #<?=$invoice->id?></h3>
                          <table id="myTable" class="table table-striped table-bordered table-hover">
                            <thead>
                               <tr>
                                  <th>Product ID</th>
                                  <th>Product Name</th>
                                  <th>Quantity</th>
                                  <th>Price</th>
                                  <th>Subtotal</th>
                                </tr>
                            </thead>
		                        <tbody>
                                  <?php 
                                   $total = 0;
                                   foreach($orders as $order) : 
                                   $subtotal = $order->qty * $order->price;
                                   $total += $subtotal;
                                  ?>
                                    <tr>
                                      <td><?=$order->product_id?></td>
                                      <td><?=$order->product_name?></td>
                                      <td><?=$order->qty?></td>
                                      <td><?=$order->price?></td>
                                      <td><?=$subtotal?></td>
                                    </tr>
                                    <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" align="right">Total</td>
                                    <td><?=$total?></td>
                                </tr>
                            </tfoot>
                          </table>                    

                              <script>
                              $(document).ready(function(){
                                $('#myTable').DataTable();
                              });
                            </script>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
          </div>
        </div>
      </main>	
<?php $this->load->view('back/footer')?>
