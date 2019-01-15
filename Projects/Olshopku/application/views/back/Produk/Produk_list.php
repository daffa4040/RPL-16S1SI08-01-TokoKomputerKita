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
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>
                                  <?=anchor(  'admin/products/create',
                                        'Add Product', 
                                        ['class'=>'btn btn-primary btn-sm'])
                                  ?>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($products as $product) : ?>
                              <tr>
                                <td><?=$product->id?></td>
                                <td><?=$product->name?></td>
                                <td><?php
                                  $product_image = [  'src' => 'uploads/' . $product->image,
                                            'height'  => '50'
                                            ];
                                  echo img($product_image)
                                ?></td>
                                <td><?=$product->price?></td>
                                <td><?=$product->stock?></td>
                                <td>
                                  <?=anchor(  'admin/products/update/' . $product->id, 
                                        'Edit',
                                        ['class'=>'btn btn-default btn-sm'])
                                  ?> 
                                  <?=anchor(  'admin/products/delete/' . $product->id, 
                                        'Delete',
                                        ['class'=>'btn btn-danger btn-sm',
                                         'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
                                        ])
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