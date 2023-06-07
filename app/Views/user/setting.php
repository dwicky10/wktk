<!-- <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="true">Alamat</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <h5 class="mt-5 text-center">Ubah Profile</h5>
            <div class="row mt-5">
                <div class="col col-4">
                    <div class="row text-center">
                        <div class="col">
                            <img src="<?=base_url()?>assets/img/produk/11.jpg" class="img-thumbnail" style="width: 50%;"
                                alt="...">
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <button type="button" class="btn btn-primary mt-4 " data-bs-toggle="modal"
                                data-bs-target="#foto">
                                Pilih Profile
                            </button>

                            <div class="modal fade" id="foto" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Foto Profile</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping">
                                                    <i class="bi bi-person"></i>
                                                </span>
                                                <input type="file" class="form-control" placeholder="New Photo"
                                                    aria-label="Upload Image" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-4">

                    <div class="row mt-4">
                        <div class="col col-6">
                            Username
                        </div>
                        <div class="col col-6">
                            Usernamenya
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col col-6">
                            Name
                        </div>
                        <div class="col col-6">
                            Namanya
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col col-6">
                            Tanggal Lahir
                        </div>
                        <div class="col col-6">
                            Tanggalnya
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col col-6">
                            E-Mail
                        </div>
                        <div class="col col-6">
                            Emailnya
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col col-6">
                            No.Telepon
                        </div>
                        <div class="col col-6">
                            0123456789
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <div class="d-grid ">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#password">
                                    Change Password
                                </button>
                            </div>
                            <div class="modal fade" id="password" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Change Password</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping"><i
                                                        class="bi bi-key-fill"></i></span>
                                                <input type="password" class="form-control" placeholder="New Password"
                                                    aria-label="New Password" aria-describedby="addon-wrapping">
                                            </div>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping"><i
                                                        class="bi bi-key-fill"></i></span>
                                                <input type="password" class="form-control"
                                                    placeholder="Confirm New Password" aria-label="Confirm New Password"
                                                    aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <h5 class="mt-5 text-center"> ALAMAT </h5>
        <div class="row">
            <div class="col text-end">
                <button type="button" class="btn btn-primary mt-4 " data-bs-toggle="modal" data-bs-target="#addalamat">
                    <i class="bi bi-plus"></i>Alamat
                </button>

                <div class="modal fade" id="addalamat" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Alamat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <i class="bi bi-house-add-fill"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Nama Alamat"
                                        aria-label="Upload Image" aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <i class="bi bi-house-add-fill"></i>
                                    </span>
                                    <input type="textarea" class="form-control" placeholder="Masukan Alamat"
                                        aria-label="Upload Image" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Add Address</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-10">
                <div class="row">
                    <div class="col col-3">
                        RUMAH 01
                    </div>
                    <div class="col col-9">
                        Jl Blablabla Rt 1 rw 2 bla bla bla
                    </div>
                </div>
            </div>
            <div class="col col-2">
                <a href=""><i class="bi bi-pencil-square"></i></a>
                <a href=""><i class="bi bi-trash3-fill"></i></a>

            </div>
        </div>
    </div>
</div>
</div> -->


<!-- <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Alamat</button>
        </li>

    </ul>
</div>
<div class="container">
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <h4 class="mt-4 mb-4">Edit Profile</h4>
            <div class="row">
                <div class="col col-8">
                    <div class="row">
                        <div class="col col-4">
                            <img src="<?=base_url()?>assets/img/produk/11.jpg" class="img-thumbnail" alt="...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-4">
                            <div class="col col-4">
                                <button type="button" class="btn btn-primary mt-4 " data-bs-toggle="modal"
                                    data-bs-target="#foto">
                                    Pilih Profile
                                </button>

                                <div class="modal fade" id="foto" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Foto Profile</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="input-group flex-nowrap">
                                                    <span class="input-group-text" id="addon-wrapping">
                                                        <i class="bi bi-person"></i>
                                                    </span>
                                                    <input type="file" class="form-control" placeholder="New Photo"
                                                        aria-label="Upload Image" aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col col-4">
                            <p>Nama :</p>
                        </div>
                        <div class="col col-4">
                            <p>Udin Selep</p>
                        </div>
                        <div class="col col-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nama">
                                Edit
                            </button>

                            <div class="modal fade" id="nama" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Change Name</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping">
                                                    <i class="bi bi-pen"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Masukan Nama"
                                                    aria-label="Change Name" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col col-4">
                            <p>Alamat :</p>
                        </div>
                        <div class="col col-4">
                            <p>Tasik Mangkubumi</p>
                        </div>
                        <div class="col col-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#alamat">
                                Edit
                            </button>

                            <div class="modal fade" id="alamat" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Change Address</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping">
                                                    <i class="bi bi-pencil-square"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Masukan Alamat"
                                                    aria-label="Change Address" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col col-4">
                            <p>Phone :</p>
                        </div>
                        <div class="col col-4">
                            <p>0123456789</p>
                        </div>
                        <div class="col col-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#phone">
                                Edit
                            </button>

                            <div class="modal fade" id="phone" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Change Phone Number</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping">
                                                    <i class="bi bi-telephone-plus"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Masukan No.Tpln"
                                                    aria-label="Change Phone Number" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <h4 class="mt-4 mb-4">Address</h4>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#password">
                Change Password
            </button>
            <div class="modal fade" id="password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Change Password</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-key-fill"></i></span>
                                <input type="password" class="form-control" placeholder="New Password"
                                    aria-label="New Password" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-key-fill"></i></span>
                                <input type="password" class="form-control" placeholder="Confirm New Password"
                                    aria-label="Confirm New Password" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="row my-5">
        <div class="col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link link-dark active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Profil</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link link-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Alamat</button>
                </li>
                
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="row  my-3 mx-auto">
                        <div class="col-5 text-end">
                            <img src="<?=base_url()?>assets/img/profile/<?=$data[0]['foto_profile']?>" class="" style="width: 250px;height: 250px;" alt="..."><br>
                            <button class="btn btn-dark mt-2" style="width:250px;"> Ubah Foto Profil </button>
                        </div>
                        <div class="col-5">
                            <div class="row text-start">
                                <div class="col-12 h5">
                                    <div class="row mb-3">
                                        <div class="col-12 fw-bold border-bottom">Biodata Diri</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4">Nama</div>
                                        <div class="col-8"><?=$data[0]['name']?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4">Tanggal Lahir</div>
                                        <div class="col-8"><?=date("d M Y",strtotime($data[0]['tanggal_lahir']))?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4">Jenis Kelamin</div>
                                        <div class="col-8"><?= ($data[0]['gender'] == 1) ? "Pria" : "Wanita"; ?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 fw-bold border-bottom">Kontak</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4">Email</div>
                                        <div class="col-8"><?=$data[0]['email']?></div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4">Nomor HP</div>
                                        <div class="col-8"><?=$data[0]['phone']?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="row my-3">
                        <div class="col-8">
                            <?php if(empty($alamat)){ ?>
                                
                                <p class="text-center text-muted mt-5"> Silahkan tambah alamat </p>
                            <?php }else{ foreach($alamat as $keya => $valuea){ ?>
                                <h2><u>Daftar Alamat:</u></h2>
                                <div class="row m-3 border">
                                    <div class="col-12 m-2">
                                        <p class="h4 fw-bold"> <?=$valuea['label_alamat']?> </p>
                                        <p class="h5 m-1"> <?=$valuea['nama_penerima']?> </p>
                                        <p class="h6 m-1"> <?=$valuea['alamat']?> </p>
                                        <p class="h6 m-1"> <?=$valuea['city_name']?>, <?=$valuea['province_name']?> <?=$valuea['kode_pos']?> </p>
                                        <p class="h6 m-1"> <?=$valuea['phone_number']?> </p>
                                        <a href="<?=base_url()?>home/delete_alamat/<?=$valuea['counter']?>" class="link-danger"><i class="bi bi-trash"></i></a>
                                    </div>
                                </div>
                            <?php } } ?>
                        </div>
                        <div class="col-4 border">
                            <form method="POST" action="<?=base_url()?>home/tambah_alamat" >
                                <div class="my-3">
                                    <label class="form-label">Label Alamat</label>
                                    <input type="text" class="form-control" placeholder="Ex: Rumah, Kantor" name="label_alamat">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Penerima</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Provinsi</label>
                                    <select class="form-select" name="provinsi" id="provinsi_select">
                                        <option selected disabled>Pilih Provinsi</option>
                                        <?php foreach($provinsi as $keyp => $valuep){ ?>
                                            <option value="<?=$valuep['province_id']?>"><?=$valuep['province_name']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kota</label>
                                    <select class="form-select" name="kota" id="kota_select" disabled>
                                        <option selected disabled>Pilih Kota</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kode Pos</label>
                                    <input type="text" class="form-control" name="kodepos" id="kodepos" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Detail Alamat</label>
                                    <input type="text" class="form-control" name="detail_alamat">
                                </div>
                                <input type="hidden" class="form-control" name="id_konsumen" value="<?=$data[0]['id_konsumen']?>">
                                <button class="btn btn-dark w-100 mb-3" type="submit"> Tambah Alamat </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#provinsi_select").change(function() {
        var val = $(this).val();
        $.ajax({
            url: "<?= base_url() ?>/home/ajax_get_kota",
            type: 'POST',
            data: {
                id: val
            },
            dataType: 'JSON',
            success: function(data) {
                var opt_kota = "<option selected disabled>Pilih Kota</option>";
                $.each(data.data, function(key, value) {
                    opt_kota += "<option value='"+value.city_id+"' data-kodepos='"+value.postal_code+"'>"+value.city_name+"</option>";
                });
                $("#kota_select").html(opt_kota);
                $("#kota_select").removeAttr("disabled");
            }
        })
    });

    // $("#kota_select").change(function() {
    //     var kodepos = $(this).find(':selected').attr('data-kodepos');
    //     $("#kodepos").val(kodepos);
    // });
</script>