<div class="card card-info">
              <div class="card-header">
               
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_penjualan')?>" method="post">
                <h1></h1>
      
       <!--  <div class="item form-group">
          <label class="control-label col-12" >Tanggal Penjualan <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="tgl_penjualan" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="tgl_penjualan" required="required" placeholder=" Tanggal Penjualan">
          </div>
        </div>
 -->
 <div class="item form-group">
  <label class="control-label col-12">Tanggal Penjualan <span class="required"></span>
  </label>
  <div class="col-12">
    <input type="date" id="tgl_penjualan" class="form-control col-12" name="tgl_penjualan" required="required" placeholder="Tanggal Penjualan">
  </div>
</div>



          <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Total Harga  <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="ttlharga" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="ttlharga" required="required" placeholder="Total Harga ">
          </div>
        </div>

 <!-- <h1></h1>
<div class="item form-group">
  <label class="control-label col-12" >Harga  <span class="required"></span>
  </label>
  <div class="col-12">
    <input type="number" id="harga" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="harga" required="required" placeholder="Harga" >
  </div>
</div> -->


   


        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/produk" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>