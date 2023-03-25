<main id="main" class="main">

    <div class="pagetitle">
        <h1>Wakuteka</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit-Produk</h5>
                        <?php foreach ($products as $key => $item) : ?>
                        <form method="POST" action="<?= base_url('ActionAdmin/update') ?>">
                        <input type="hidden" name="id" value="<?= $item['id_produk'] ?>" />
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $item['name'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="code" class="form-label">Kode</label>
                                <input type="text" class="form-control" id="code" name="code" value="<?= $item['code'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="code_variant" class="form-label">Kode Variant</label>
                                <input type="text" class="form-control" id="code_variant" name="code_variant" value="<?= $item['code_variant'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="color" class="form-label">Warna</label>
                                <input type="text" class="form-control" id="color" name="color" value="<?= $item['color'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="size" class="form-label">Ukuran</label>
                                <select name="size" id="size" class="form-control" value="<?= $item['size'] ?>">
                                    <option value="4">S</option>
                                    <option value="3">M</option>
                                    <option value="2">L</option>
                                    <option value="1">XL</option>
                                    <option value="0">XXL</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="stock" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stock" name="stock" value="<?= $item['stock'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Kategori</label>
                                <select name="category" id="category" class="form-control" value="<?= $item['category'] ?>">
                                    <option value="2">Atasan</option>
                                    <option value="1">Outer</option>
                                    <option value="0">Tas</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="sub_category" class="form-label">Sub Kategoti</label>
                                <input type="text" class="form-control" id="sub_category" name="sub_category" value="<?= $item['sub_category'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="price" name="price" value="<?= $item['price'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="description" name="description" rows="3"><?= $item['description'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="avail" class="form-label">Ketersediaan</label>
                                <select name="avail" id="avail" class="form-control" value="<?= $item['avail'] ?>">
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >
                                            <a href="<?=base_url()?>/Admin/produk" class="bi bi-pencil-square" >Batal </a>
                                </button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                        <?php endforeach ?>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>