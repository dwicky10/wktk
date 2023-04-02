<div class="container mt-3">
    <div class="row">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="link-dark text-decoration-none" href="<?=base_url()?>collection">Collection</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="link-dark text-decoration-none"
                        href="<?=base_url()?>collection/<?=$products['0']['category']?>"><?=$products['0']['category']?></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?=$products['0']['name']?></li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="<?=base_url()?>assets/img/produk/<?=$products['0']['image']?>" class="d-block w-100"
                            alt="">
                    </div>
                    <?php
                        $imgArray = explode(',', $products['0']['gallery']);
                        foreach($imgArray as $keyimg => $itemimg){
                    ?>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?=base_url()?>assets/img/produk/<?=$itemimg?>" class="d-block w-100" alt="">
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="row mb-2">
                <div class="col-md-12">
                    <p class="h4 fw-bold "><?=$products['0']['name']?> | <?=$products['0']['color']?></p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <p class="h6 fw-bold ">Rp. <?=number_format($products['0']['price'],0,",",".") ?></p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <p class="mb-1"> Size </p>
                    <?php
                        foreach($stock as $keys => $items){
                            $disabled = "";
                            if($items['stock'] == 0){
                                $disabled = "disabled";
                            } 
                    ?>
                    <input type="radio" class="btn-check" name="options" id="size<?=$items['counter']?>"
                        data-stock="<?=$items['stock']?>" <?=$disabled?>>
                    <label class="btn btn-outline-dark me-2 mb-2"
                        for="size<?=$items['counter']?>"><?=$items['size']?></label>
                    <?php } ?>
                </div>
            </div>
            <form action="<?=base_url()?>checkout" method="POST">
                <div class="row mb-2">
                    <p class="mb-1"> Quantity <span class="text-danger" id="total_stock"></span> </p>
                    <div class="col-md-5 p-1 ">
                        <select class="form-select" name="select_stock" id="select_stock"></select>
                    </div>
                    <div class="col-md-3 p-1">
                        <a class="btn btn-outline-danger w-100" href="#"> <i class="bi bi-cart"></i> Cart </a>
                    </div>
                    <div class="col-md-4 p-1">
                        <input type="hidden" name="id_product" id="id_product">
                        <input type="hidden" name="id_product" id="id_product">
                        <button class="btn btn-primary w-100" type="submit"> <i class="bi bi-bag-check"></i> Checkout </button>
                    </div>
                </div>
            </form>

            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-controls="collapseOne">
                                    <strong>DESCRIPTION</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?=$products['0']['description']?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>WORK HOUR</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Senin - Jumat : 08:30 - 20:00<br>
                                    Sabtu - Minggu : 09:00 - 18:00<br>
                                    Pemesanan setelah jam 15.00 dikirim esok hari.<br>
                                    Hari Sabtu dan Minggu hanya melayani pemesanan saja, tidak ada pengiriman barang.
                                    <br><br>
                                    #wktk<br>
                                    #weebslookscools
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("input[id^='size']").click(function () {
            var i = $(this).attr("data-stock");
            var selectOptions = "";
            for (var j = 1; j <= i; j++) {
                selectOptions += '<option value="' + j + '">' + j + '</option>';
            }
            $("#select_stock").html(selectOptions);
            $("#total_stock").html("(Stock : "+i+")");
        });
    });
</script>