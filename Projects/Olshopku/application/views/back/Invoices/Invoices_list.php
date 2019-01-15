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
                          <table id="myTable" class="table table-striped table-bordered table-hover">
                            <thead>
								<tr>
									<th>Invoice ID</th>
		                            <th>Date</th>
		                            <th>Due Date</th>
		                            <th>Status</th>
		                            <th>Actions</th>
								</tr>
                            </thead>
		                     <tbody>
								<?php foreach($invoices as $invoice) : ?>
								<tr>
									<td><?=$invoice->id?></td>
									<td><?=$invoice->date?></td>
									<td><?=$invoice->due_date?></td>
									<td><?=$invoice->status?></td>
		                            <td>
		                                <?=anchor(	'admin/invoices/detail/' . $invoice->id, 
													'Details',
													['class'=>'btn btn-default btn-sm'])
										?> 
		                            </td>
								</tr>
								<?php endforeach; ?>
							</tbody>
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
