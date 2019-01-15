<?php $this->load->view('back/header')?>
<?php
  $id       = $product->id;
if($this->input->post('is_submitted')){
  $name     = set_value('name');
  $description  = set_value('description');
  $price      = set_value('price');
  $stock      = set_value('stock');
} else {
  $name     = $product->name;
  $description  = $product->description;
  $price      = $product->price;
  $stock      = $product->stock;
}
?>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <!-- /.row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Tambah Produk</strong></div>
                  <div><?= validation_errors() ?></div>
                  <?= form_open_multipart('admin/products/update/' . $id, ['class'=>'form-horizontal']) ?>
                  <div class="card-body">
                    
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Nama Produk</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="name" placeholder="Text" value="<?= $name ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email-input">Deskripsi Produk</label>
                        <div class="col-md-9">
                       <textarea class="form-control" name="description"><?= $description ?></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="password-input">Harga</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="price" placeholder="" value="<?= $price ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date-input">Stok</label>
                        <div class="col-md-9">
                          <input class="form-control" id="text-input" type="text" name="stock" placeholder="" value="<?= $stock ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-multiple-input">Gambar</label>
                        <div class="col-md-9">
                        <input type="file" class="form-control" name="userfile" >
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