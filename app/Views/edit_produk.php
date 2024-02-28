<div class="card card-info">
              <div class="card-header">
           
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_produk')?>" method="post">
        <input type="hidden" name="id" value="<?= $octa->id_produk?>">

        <div class="item form-group">
          <label class="control-label col-12" >Nama Produk<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="namapro" class="form-control col-12 "name="namapro" required="required" placeholder="Nama Produk" value="<?= $octa->namapro?>">
          </div>
        </div>

          <div class="item form-group">
          <label class="control-label col-12" >Harga <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="number" id="harga" class="form-control col-12 "name="harga" required="required" placeholder=" Harga" value="<?= $octa->harga?>">
          </div>
        </div>

     

          <div class="item form-group">
          <label class="control-label col-12" > Stok Barang <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="stok" name="stok" placeholder=" Stok Barang " required="required" class="form-control col-12 " value="<?= $octa->stok?>">
          </div>
        </div>

   

        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/produk" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
            </div>