<div class="container mt-5">

    <div class="row">
        <div class="col-md-12 mx-auto text-center">
            <input type="radio" class="btn-check" name="options" id="option-all" autocomplete="off" checked="">
            <label class="btn btn-outline-dark" for="option-all">Semua</label>
            <input type="radio" class="btn-check btn-check-cat" name="options" data-cat="card-0" id="option-unpaid"
                autocomplete="off">
            <label class="btn btn-outline-dark" for="option-unpaid">Belum Bayar</label>
            <input type="radio" class="btn-check btn-check-cat" name="options" data-cat="card-1"
                id="option-verification" autocomplete="off">
            <label class="btn btn-outline-dark" for="option-verification">Verifikasi</label>
            <input type="radio" class="btn-check btn-check-cat" name="options" data-cat="card-2" id="option-paid"
                autocomplete="off">
            <label class="btn btn-outline-dark" for="option-paid">Berhasil</label>
            <input type="radio" class="btn-check btn-check-cat" name="options" data-cat="card-3" id="option-cancel"
                autocomplete="off">
            <label class="btn btn-outline-dark" for="option-cancel">Cancelled</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php foreach($data as $key => $value){?>
            <div class="card my-3 card-trans card-<?=$value['status']?>">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <small><?=date("d M Y, H:i",strtotime($value['tgl_pembelian']))?></small>
                        </div>
                        <div class="col-md-2">
                            <?php
                                    if($value['status']==0){
                                        echo '<span class="badge text-bg-info">Belum Bayar</span>';
                                    }elseif($value['status']==1){
                                        echo '<span class="badge text-bg-warning">Menunggu Verifikasi</span>';
                                    }elseif($value['status']==2){
                                        echo '<span class="badge text-bg-success">Sudah Bayar</span>';
                                    }elseif($value['status']==3){
                                        echo '<span class="badge text-bg-danger">Cancel</span>';
                                    }
                                ?>
                        </div>
                        <div class="col-md-4"><small class="text-muted"><?=$value['no_invoice']?></small></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">All Item</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Success</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Cancelled</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <div class="row mt-5">
                <div class="col col-6">
                    <div class="row mb-3">
                        <div class="col col-4">
                            Belanja
                        </div>
                        <div class="col col-4">
                            11-12-2023
                        </div>
                        <div class="col col-4">
                            Selesai
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-2">
                    <img src="<?=base_url()?>assets/img/produk/3226194c-e21c-4908-bdaf-7228d29f0e26.jpg"
                        class="img-thumbnail" style="width: 50%;" alt="...">
                </div>
                <div class="col col-6">
                    <div class="row">
                        <p> WKTK Kanagawa T-Shirt | hitam | Size L </p>
                    </div>
                    <div class="row">
                        <p> 1 x 100.000 </p>
                    </div>
                </div>
                <div class="col col-2">
                    <div class="row">
                        <p>Total Bayar</p>
                    </div>
                    <div class="row">
                        <p>Rp. 110.000</p>
                    </div>
                </div>
                <div class="col col-2">
                    <button type="button" class="btn btn-success">Beli Lagi</button>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div class="row mt-5">
                <div class="col col-6">
                    <div class="row mb-3">
                        <div class="col col-4">
                            Belanja
                        </div>
                        <div class="col col-4">
                            11-12-2023
                        </div>
                        <div class="col col-4">
                            Selesai
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-2">
                    <img src="<?=base_url()?>assets/img/produk/3226194c-e21c-4908-bdaf-7228d29f0e26.jpg"
                        class="img-thumbnail" style="width: 50%;" alt="...">
                </div>
                <div class="col col-6">
                    <div class="row">
                        <p> WKTK Kanagawa T-Shirt | hitam | Size L </p>
                    </div>
                    <div class="row">
                        <p> 1 x 100.000 </p>
                    </div>
                </div>
                <div class="col col-2">
                    <div class="row">
                        <p>Total Bayar</p>
                    </div>
                    <div class="row">
                        <p>Rp. 110.000</p>
                    </div>
                </div>
                <div class="col col-2">
                    <button type="button" class="btn btn-success">Beli Lagi</button>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <div class="row mt-5">
                <div class="col col-6">
                    <div class="row mb-3">
                        <div class="col col-4">
                            Belanja
                        </div>
                        <div class="col col-4">
                            11-12-2023
                        </div>
                        <div class="col col-4">
                            Batal
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-2">
                    <img src="<?=base_url()?>assets/img/produk/3226194c-e21c-4908-bdaf-7228d29f0e26.jpg"
                        class="img-thumbnail" style="width: 50%;" alt="...">
                </div>
                <div class="col col-6">
                    <div class="row">
                        <p> WKTK Kanagawa T-Shirt | hitam | Size L </p>
                    </div>
                    <div class="row">
                        <p> 1 x 100.000 </p>
                    </div>
                </div>
                <div class="col col-2">
                    <div class="row">
                        <p>Total Bayar</p>
                    </div>
                    <div class="row">
                        <p>Rp. 110.000</p>
                    </div>
                </div>
                <div class="col col-2">
                    <button type="button" class="btn btn-success">Beli Lagi</button>
                </div>
            </div>
        </div>
    </div> -->
</div>

<script>
$('#option-all').change(function() {
    $('.card-trans').show();
});
$('.btn-check-cat').change(function() {
    $('.card-trans').hide();
    $('.' + $(this).attr("data-cat")).show();
});
</script>