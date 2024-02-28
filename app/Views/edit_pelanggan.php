<div class="card card-info">
              <div class="card-header">
           
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_pelanggan')?>" method="post">
        <input type="hidden" name="id" value="<?= $octa->id_pelanggan?>">

        <div class="item form-group">
          <label class="control-label col-12" >Nama Pelanggan<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_pelanggan" class="form-control col-12 "name="nama_pelanggan" required="required" placeholder="Nama Pelanggan" value="<?= $octa->nama_pelanggan?>">
          </div>
        </div>

          <div class="item form-group">
          <label class="control-label col-12" >Alamat <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="alamat" class="form-control col-12 "name="alamat" required="required" placeholder=" Alamat" value="<?= $octa->alamat?>">
          </div>
        </div>

     

          <div class="item form-group">
          <label class="control-label col-12" >No Telepon <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="no_tlp" name="no_tlp" placeholder="No Telepon " required="required" class="form-control col-12 " value="<?= $octa->no_tlp?>">
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