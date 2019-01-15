<?php $this->load->view('back/header')?>
<?php
  $id       = $user->id;
if($this->input->post('is_submitted')){
  $username     = set_value('username');
  $password     = set_value('password');
  $groups       = set_value('groups');
} else {
  $username     = $user->username;
  $password     = $user->password;
  $groups       = $user->groups;
}
?>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <!-- /.row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Tambah User</strong></div>
                  <div><?= validation_errors() ?></div>
                  <?= form_open_multipart('admin/users/update/' . $id, ['class'=>'form-horizontal']) ?>
                  <div class="card-body">
                    
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Username</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="username" placeholder="Text" value="<?= $username ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="password-input">Password</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="password" placeholder="" value="<?= $password ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date-input">Usertype</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="groups" placeholder="" value="<?= $groups ?>">
                        </div>
                      </div>

                  </div>
                      <div class="form-actions card-footer">
                        <button class="btn btn-primary" type="submit">Save changes</button>
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