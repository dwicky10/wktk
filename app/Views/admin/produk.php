
<!-- 
    [id_produk] => 3
    [name] => wktk
    [code] => asfasf
    [color] => asdas
    [code_variant] => asf
    [category] => asd
    [sub_category] => asd
    [price] => 123
    [image] => 1678801289_6d3906334ddd7da2f31d.jpg
    [gallery] => 1678801289_6d3906334ddd7da2f31d.jpg,94c81b0a-c43b-465b-8188-7a7f413f0bf1.jpg94c81b0a-c43b-465b-8188-7a7f413f0bf1.jpg,1678801289_6d3906334ddd7da2f31d.jpg
    [description] => asd
    [fl_avail] => 1
 -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Wakuteka</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Produk</h5>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#tambahModal">
                            <i class="bi bi-file-earmark-plus">Tambah</i>
                        </button>
                        <!-- Table with stripped rows -->
                        <div class="row">
                            <div class="col-12">
                                <table id="myTable" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama | Varian </th>
                                            <th scope="col">Warna | Ukuran</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Kategori | Sub</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Aktif</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php  $i=0; foreach ($products as $item ) : ?>
                                        <tr>
                                            <td><?= $item['id_produk'] ?></td>
                                            <td><?= $item['name'] ?> <br> 
                                                <?= $item['code'] ?> - <?= $item['code_variant'] ?>
                                                </td>
                                            <td><?= $item['color'] ?> <br> <?= $item['size'] ?></td>
                                            <td>
                                                <?= $item['stock'] ?>
                                                <a href="#"
                                                id="updatestok-<?=$item['id_produk'] ?>"
                                                data-productid="<?=$item['id_produk'] ?>"
                                                data-counter="<?=$item['counter'] ?>"
                                                data-stock="<?=$item['stock'] ?>"
                                                data-bs-toggle="modal" data-bs-target="#updatestokModal">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            </td>
                                            <td><?= $item['category'] ?> <br> 
                                                <?= $item['sub_category'] ?></td>
                                            <td><?= $item['price'] ?></td>
                                            <td>
                                                <a href="#"
                                                id="updateonoff-<?=$item['id_produk'] ?>"
                                                data-idproduk="<?= $item['id_produk'] ?>"
                                                data-flavail="<?= $item['fl_avail'] ?>"
                                                >
                                                    <?= $item['fl_avail']==1 ? 'On' : 'Off' ?>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#"
                                                id="preview-<?=$item['id_produk'] ?>" 
                                                data-bs-toggle="modal" data-bs-target="#previewModal"
                                                data-img="<?= $item['image']?>" >
                                                    <i class="bi bi-card-image"></i>
                                                </a>
                                                <a href="<?= base_url('admin/editproduk/'.$item['id_produk']) ?>"
                                                    class=""><i class="bi bi-pencil-square"></i> </a>
                                                <a href="#">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                                <a href="#"
                                                id="tambahstok-<?=$item['id_produk'] ?>"
                                                data-productid="<?=$item['id_produk'] ?>"
                                                data-bs-toggle="modal" data-bs-target="#tambahstokModal">
                                                    <i class="bi bi-plus"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Modal ADD Produk -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="<?= base_url('ActionAdmin/tambah_produks') ?>">
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">Code</label>
                            <input type="text" class="form-control" id="code_product" name="code_product">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">Code Variant</label>
                            <input type="text" class="form-control" id="code_variant" name="code_variant">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="category" name="category">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">Sub</label>
                            <input type="text" class="form-control" id="subcategory" name="subcategory">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">Main Image</label>
                            <input type="file" class="form-control" id="mainimage" name="mainimage">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">Gallery</label>
                            <input type="file" class="form-control" id="galleryimage" name="galleryimage[]" multiple>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-2">
                            <label for="name" class="form-label">Deskripsi</label>
                            <textarea name="description" id="descriptiontiny"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal preview Produk -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">preview Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Deskripsi</label><br>
                        <p id="preview_deskripsi"></p>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Gambar</label><br>
                        <img id="preview_img" src="" alt="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahstokModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Stok</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="<?= base_url('ActionAdmin/tambah_stok') ?>">
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">product_id</label>
                            <input type="text" class="form-control" id="product_id_tambahstok" name="product_id">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">size</label>
                            <input type="text" class="form-control" id="size" name="size">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">stock</label>
                            <input type="text" class="form-control" id="product_id" name="stock">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">price</label>
                            <input type="text" class="form-control" id="size" name="price">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="updatestokModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Stok</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="<?= base_url('ActionAdmin/update_stok') ?>">
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">counter</label>
                            <input type="text" class="form-control" id="counter_updatestock" name="counter">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">stock</label>
                            <input type="text" class="form-control" id="stock_updatestock" name="stock">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });

    $("a[id^='preview-']").click(function () {
        var img = $(this).attr('data-img');
        var description = $(this).attr('data-deskripsi');
        $('#preview_img').attr('src', '/wakuteka-web/public/assets/img/produk/' + img);
        $('#preview_deskripsi').html(description);
    });

    $("a[id^='tambahstok-']").click(function () {
        var produk_id = $(this).attr('data-productid');
        $('#product_id_tambahstok').val(produk_id);
    });

    $("a[id^='updatestok-']").click(function () {
        var counter = $(this).attr('data-counter');
        var stock = $(this).attr('data-stock');
        $('#counter_updatestock').val(counter);
        $('#stock_updatestock').val(stock);
    });

    $("a[id^='updateonoff-']").click(function () {
        // $.ajax({
        //     type: "POST",
        //     url: "submit.php",
        //     data: { name: name, email: email, message: message },
        //     success: function(response){
        //         $("#successMessage").text(response);
        //     },
        //     error: function(){
        //         $("#errorMessage").text("There was an error submitting the form.");
        //     }
        // });
    });
</script>