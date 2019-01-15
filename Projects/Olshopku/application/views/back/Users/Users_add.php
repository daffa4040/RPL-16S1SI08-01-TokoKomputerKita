<?php $this->load->view('back/header')?>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <!-- /.row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Tambah User</strong></div>
                  <div><?= validation_errors() ?></div>
                    <?= form_open_multipart('admin/users/create', ['class'=>'form-horizontal']) ?>  
                  <div class="card-body">

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Username</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>">
                          <span class="help-block">This is a help text</span>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="password-input">Password</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="password" placeholder="Password" value="<?= set_value('password') ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date-input">Usertype</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="groups" placeholder="Usertype" value="<?= set_value('groups') ?>">
                        </div>
                      </div>

                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button class="btn btn-sm btn-danger" type="reset">
                      <i class="fa fa-ban"></i> Reset</button>
                  </div>
                <?= form_close() ?>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <!-- /.row-->
            <!-- /.row-->

            <!-- /.row-->
          </div>
        </div>
      </main>
<?php $this->load->view('back/footer')?>