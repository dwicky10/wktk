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
                                            <th scope="col">Nama | Varian | Warna | Ukuran</th>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Kategori | Sub</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Ketersediaan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php  $i=0; foreach ($products as $item ) : ?>
                                        <tr>
                                            <td><?= $item['id_produk'] ?></td>
                                            <td><?= $item['name'] ?> <br> 
                                                <?= $item['code_variant'] ?> <br>
                                                <?= $item['color'] ?> <br>
                                                <?= $item['size'] ?></td>
                                            <td><?= $item['code'] ?></td>
                                            <td><?= $item['stock'] ?></td>
                                            <td><?= $item['category'] ?> <br> 
                                                <?= $item['sub_category'] ?></td>
                                            <td><?= $item['price'] ?></td>
                                            <td><?= $item['avail'] ? 'Available' : 'Not Available' ?></td>
                                            <td>
                                                <a id="preview-<?=$item['id_produk'] ?>"
                                                    class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#previewModal" data-img="<?= $item['image']?>"
                                                    data-deskripsi="<?= $item['description'] ?>">
                                                    <i class="bi bi-pencil-square">preview</i>
                                                </a>
                                                <a href="<?= base_url('Admin/editproduk/'.$item['id_produk']) ?>"
                                                    class="bi bi-pencil-square">Edit </a>
                                                <button type="button" class="btn btn-danger rounded-pill btn-sm">
                                                    <i class="bi bi-trash">Hapus</i></button>
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
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="<?= base_url('ActionAdmin/store') ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="code" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="code" name="code" required>
                    </div>
                    <div class="mb-3">
                        <label for="code_variant" class="form-label">Kode Variant</label>
                        <input type="text" class="form-control" id="code_variant" name="code_variant" required>
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Warna</label>
                        <input type="text" class="form-control" id="color" name="color" required>
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Ukuran</label>
                        <select name="size" id="size" class="form-control">
                            <option value="4">S</option>
                            <option value="3">M</option>
                            <option value="2">L</option>
                            <option value="1">XL</option>
                            <option value="0">XXL</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stock" name="stock" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori</label>
                        <select name="category" id="category" class="form-control">
                            <option value="2">Atasan</option>
                            <option value="1">Outer</option>
                            <option value="0">Tas</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sub_category" class="form-label">Sub Kategoti</label>
                        <input type="text" class="form-control" id="sub_category" name="sub_category" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="avail" class="form-label">Ketersediaan</label>
                        <select name="avail" id="avail" class="form-control">
                            <option value="1">Tersedia</option>
                            <option value="0">Tidak Tersedia</option>
                        </select>
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

<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
    $("a[id^='preview-']").click(function () {
        var img = $(this).attr('data-img');
        var description = $(this).attr('data-deskripsi');
        console.log(description)
        $('#preview_img').attr('src', '/wakuteka-web/public/assets/img/produk/' + img);
        $('#preview_deskripsi').html(description);


    });
</script>