
<div class="container">
    <div class="row mt-3">
        <div class="col col-8">
            <div class="row  mb-3">
                <div class="col-12">
                    <select class="form-select mb-3" id="alamat_select">
                        <?php foreach($alamat as $keya => $valuea){ ?>
                            <option 
                                value="<?=$valuea['counter']?>" 
                                data-provinsi ="<?=$valuea['provinsi']?>" 
                                data-kota ="<?=$valuea['kota']?>" 
                                data-head ="<b><?=$valuea['label_alamat']?></b> - <?=$valuea['nama_penerima']?> (<?=$alamat[0]['phone_number']?>)" 
                                data-body ="<?=$alamat[0]['alamat']?>, <?=$alamat[0]['city_name']?>, <?=$alamat[0]['province_name']?> <?=$alamat[0]['kode_pos']?>">
                                <?=$valuea['nama_penerima']?> (<?=$valuea['label_alamat']?>)
                            </option>
                            <?php } ?>
                    </select>
                    <div id="alamat_label">
                    <p class="h5 m-1"> <b><?=$valuea['label_alamat']?></b> - <?=$valuea['nama_penerima']?> (<?=$alamat[0]['phone_number']?>) </p>
                    <p class="m-1 text-muted"><small> <?=$alamat[0]['alamat']?>, <?=$alamat[0]['city_name']?>, <?=$alamat[0]['province_name']?> <?=$alamat[0]['kode_pos']?></small></p>
                </div>
                </div>
                
                <!-- <div class="col-4">
                    <select class="form-select form-select-lg mb-3" id="metode_pengiriman">
                        <option selected disabled>Metode Pengiriman</option>
                        <option value="1" data-harga="9000">Standar EntarAja</option>
                        <option value="2" data-harga="18000">Xpress EntarAja</option>
                        <option value="3" data-harga="10000">SiCefat GOKIL</option>
                        <option value="4" data-harga="20000">Bo-Jek Sameday</option>
                    </select>
                </div> -->
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <label class="form-label fw-bold">Pilih Pengiriman</label>
                    <input type="hidden" id="city_destination" value="<?=$alamat[0]['kota']?>">
                    <select class="form-select" name="pengiriman" id="pengiriman_select">
                        <option selected disabled> Pilih Pengiriman</option>
                        <option value="jne"> JNE </option>
                        <option value="pos"> POS INDONESIA </option>
                        <option value="tiki"> TIKI </option>
                    </select>
                </div>
                <div class="col-6">
                    <label class="form-label fw-bold">Pilih Kurir</label>
                    <select class="form-select" name="kurir" id="kurir_select" disabled>
                        <option selected disabled> Pilih Kurir</option>
                    </select>
                </div>
            </div>
            <hr class="mb-5">
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

                            <?php
                                $harga = 0;
                                $berat = 0;
                                $list_produk = "";
                                $list_jumlah = "";
                                // Array >>listitem
                                //     (
                                //         [0] >>key => Array >>inner
                                //             (
                                //                 [0] >>innerkey => Array
                                //                     ( >>value
                                //                         [counter] => 1
                                //                         [size] => L
                                //                         [price] => 79000
                                //                         [name] => WKTK Kanagawa T-Shirt
                                //                         [color] => hitam
                                //                         [image] => 94c81b0a-c43b-465b-8188-7a7f413f0bf1.jpg
                                //                         [jumlah] => 1
                                //                     )
                                //             )
                                //     )
                                foreach($list_item as $key => $inner){
                                    foreach($inner as $innerkey => $value){
                                    $list_produk .= $value['counter'].",";
                                    $list_jumlah .= $value['jumlah'].",";
                                    $harga += $value['jumlah']*$value['price'];
                                    $berat += $value['jumlah'];
                            ?>
                            <tr>
                                <td style="width: 20%;"><img src="<?=base_url()?>assets/img/produk/<?=$value['image']?>"
                                        style="width: 50%;" alt=""></td>
                                <td>
                                    <p class="mb-1"><?=$value['name']?></p>
                                    <p class="text-muted text-sm mb-1">Size <?=$value['size']?> </p>
                                </td>
                                <td>Rp. <?=number_format($value['price'],0,",",".") ?></td>
                                <td><?=$value['jumlah']?> Item</td>
                                <td class="fw-bold">Rp. <?=number_format($value['jumlah']*$value['price'],0,",",".") ?>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col col-4">
            <div class="card">
                <div class="card-body">
                    <form action="<?=base_url()?>home/bayar" method="POST">
                    <h5 class="card-title">Ringkasan Belanja</h5>
                    <h6 class="mt-3 mb-3">Total Belanja</h6>
                    <p class="text-body-secondary">Total Harga :Rp. <span
                            id="span_harga"><?=number_format($harga,0,",",".") ?></span></p>
                    <p class="text-body-secondary">Total Ongkir :Rp. <span id="span_ongkir"></span></p>
                    <h6 class="mt-2 mb-3">Total Tagihan</h6>
                    <p class="fw-bold h3" id="total_bayar_span"></p>

                    <input type="hidden" name="harga_barang" id="harga_barang" value="<?=$harga?>">
                    <input type="hidden" name="berat_barang" id="berat_barang" value="<?=$berat*200?>">
                    <input type="hidden" name="ekspedisi" id="ekspedisi">
                    <input type="hidden" name="harga_ongkir" id="harga_ongkir">
                    <input type="hidden" name="alamat" id="alamat" value="<?=$alamat[0]['counter']?>">
                    <input type="hidden" name="total_bayar" id="total_bayar">
                    <input type="hidden" name="list_produk" value="<?=substr_replace($list_produk ,"", -1)?>">
                    <input type="hidden" name="list_total" value="<?=substr_replace($list_jumlah ,"", -1)?>">
                    
                    <div class="form-floating mb-2">
                        <textarea class="form-control" id="floatingTextarea" name="note"></textarea>
                        <label for="floatingTextarea">Catatan:</label>
                    </div>
                    <button id="tombol_bayar" type="submit" class="btn btn-block w-100 btn-dark" disabled>Pay</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function addCommas(nStr) {
        nStr += '';
        x = nStr.split(',');
        x1 = x[0];
        x2 = x.length > 1 ? ',' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
        }
        return x1 + x2;
    }
    $("#kurir_select").change(function() {
        var ekspedisi_id = $(this).val();
        $("#ekspedisi").val(ekspedisi_id);

        const harga_kirim = $(this).find(':selected').data('harga');
        const berat = Math.ceil($("#berat_barang").val() / 1000);
        const total_ongkir = harga_kirim * berat;

        const harga_barang = $("#harga_barang").val();
        const total = +harga_barang + +total_ongkir;

        $("#span_ongkir").html(addCommas(total_ongkir));
        $("#harga_ongkir").val(total_ongkir);

        $("#total_bayar_span").html("Rp. " + addCommas(total));
        $("#total_bayar").val(total);

        $("#tombol_bayar").removeAttr("disabled");
    });

    $("#pengiriman_select").change(function() {
        var tujuan = $("#city_destination").val();
        var berat = $("#berat_barang").val();
        var kurir = $(this).val();

        console.log(tujuan);
        console.log(berat);
        console.log(kurir);

        $.ajax({
            url: "<?= base_url() ?>home/ajax_get_kurir",
            type: 'POST',
            data: {
                destiny : tujuan, 
                weight : berat,
                courier : kurir,
            },
            dataType: 'JSON',
            success: function(data) {
                // console.log(data.rajaongkir);
                // console.log(data.rajaongkir.results);
                // console.log(data.rajaongkir.results[0].costs);
                var opt_kurir = "<option selected disabled>Pilih Kurir</option>";
                $.each(data.rajaongkir.results[0].costs, function(key, value) {
                    opt_kurir += "<option value='"+data.rajaongkir.results[0].name+" - "+value.service+"' data-harga='"+value.cost[0].value+"'>"+value.service+" "+value.cost[0].etd+" hari</option>";
                });

                $("#kurir_select").html(opt_kurir);
                $("#kurir_select").removeAttr("disabled");

            }
        })
    });
    
    $("#alamat_select").change(function() {
        var id = $(this).val();
        var provinsi = $(this).find(':selected').attr('data-provinsi');
        var kota     = $(this).find(':selected').attr('data-kota');
        var head     = $(this).find(':selected').attr('data-head');
        var body     = $(this).find(':selected').attr('data-body');

        var alamats  = "<p class='h5 m-1'> "+head+" </p>\
                    <p class='m-1 text-muted'><small> "+body+" </small></p>";
        
        $("#alamat_label").html(alamats);
        $("#alamat").val(id);

        $("#city_destination").val(kota);
        // $("#pengiriman_select").change();
    });
</script>