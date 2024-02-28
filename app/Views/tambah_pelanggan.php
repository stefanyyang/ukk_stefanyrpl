<div class="card card-info">
              <div class="card-header">
               
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_pelanggan')?>" method="post">
                <h1></h1>
      
        <div class="item form-group">
          <label class="control-label col-12" >Nama Pelanggan<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_pelanggan" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama_pelanggan" required="required" placeholder="Nama Pelanggan">
          </div>
        </div>



          <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Alamat  <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="alamat" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="alamat" required="required" placeholder="Alamat ">
          </div>
        </div>


          <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >No Telepon <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="no_tlp" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="no_tlp" required="required" placeholder="No Telepon">
          </div>
        </div>

   


        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/pelanggan" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>