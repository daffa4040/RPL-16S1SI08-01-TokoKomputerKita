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
                    <i class="fa fa-align-justify"></i> User</div>
                  <div class="card-body">
                          <table id="myTable" class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Usertype</th>
                                <th>
                                  <?=anchor(  'admin/users/create',
                                        'Add User', 
                                        ['class'=>'btn btn-primary btn-sm'])
                                  ?>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($users as $user) : ?>
                              <tr>
                                <td><?=$user->id?></td>
                                <td><?=$user->username?></td>
                                <td><?=$user->password?></td>
                                <td><?=$user->groups?></td>
                                <td>
                                  <?=anchor(  'admin/users/update/' . $user->id, 
                                        'Edit',
                                        ['class'=>'btn btn-default btn-sm'])
                                  ?> 
                                  <?=anchor(  'admin/users/delete/' . $user->id, 
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