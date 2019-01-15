<?php $this->load->view('back/header')?>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <!-- /.row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Tambah Produk</strong></div>
                  <div><?= validation_errors() ?></div>
                    <?= form_open_multipart('admin/products/create', ['class'=>'form-horizontal']) ?>  
                  <div class="card-body">

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Nama Produk</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="name" placeholder="Name Product" value="<?= set_value('name') ?>">
                          <span class="help-block">This is a help text</span>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email-input">Deskripsi Produk</label>
                        <div class="col-md-9">
                        <textarea class="form-control" name="description"><?= set_value('description') ?></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="password-input">Harga</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="price" placeholder="Price" value="<?= set_value('price') ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date-input">Stok</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="stock" placeholder="Stock" value="<?= set_value('stock') ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-multiple-input">Gambar</label>
                        <div class="col-md-9">
                          <input class="form-control" type="file" name="userfile">
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