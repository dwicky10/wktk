<div class="container">
  <div class="row mt-3">
    <div class="col col-8">
      <div class="row">
        <div class="col col-8">
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>PILIH ALAMAT</option>
            <option value="1">DEPOK</option>
            <option value="2">BOGOR</option>
            <option value="3">JAKARTA</option>
          </select>
        </div>
        <div class="col-4">
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Metode Pengiriman</option>
            <option value="1">COD</option>
            <option value="2">JNE</option>
            <option value="3">J&T</option>
          </select>
        </div>
        <div class="col-12">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">CATATAN</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Gambar</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="width: 20%;"><img src="<?=base_url()?>assets/img/41.jpg" style="width: 50%;" alt=""></td>
                <td>Kanagawa</td>
                <td>Rp. 99.000</td>
                <td>2</td>
                <td>Rp. 198.000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col col-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Ringkasan Belanja</h5>
          <h6 class="mt-3 mb-3">Total Belanja</h6>
          <p class="text-body-secondary">Total Harga :Rp. 150.000</p>
          <p class="text-body-secondary">Total Ongkir :Rp. 10.000</p>
          <h6 class="mt-2 mb-3">Total Tagihan</h6>
          <p class="text-body-secondary">Rp. 160.000</p>
          <button>BELI</button>
        </div>
      </div>
    </div>
  </div>
</div>