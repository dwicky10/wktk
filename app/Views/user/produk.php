<style>
    .bordershadow{
        border-radius: 3px;
        transition: all 300ms ease-out;
    }
    .bordershadow:hover {
        box-shadow: 0 0 19px paleturquoise;
    }
</style>
<div class="container">
    <div class="row py-2 text-center">
        <h3 class="fw-bold"> NEW ARRIVAL </h3>
    </div>
    <div class="row mt-3">

        <?php foreach($products as $key => $item){ ?>
        <div class="col-6 col-md-4 col-lg-3 text-center mb-2">
            <div class="container bordershadow">
                <div class="row" id="image<?=$key?>">
                    <img src="../../public/assets/img/produk/<?=$item['image']?>" class="w-100">
                </div>
                <div class="row">
                    <p class="fw-bold  mb-1" ><?=$item['name']?></p>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6 mx-auto">
                        Rp. <?=number_format($item['price'],0,",",".") ?>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-md-6 mx-auto">
                        <a href="" class="link-dark"><i class="bi bi-cart"></i></a>
                        <a href="#" class="link-dark"><i id="wishlist-icon<?=$key?>" class="bi bi-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<!--    [id_produk] => 1
        [name] => baju baju
        [code] => Ad
        [code_variant] => b
        [color] => asd
        [size] => 4
        [stock] => 12
        [category] => 2
        [sub_category] => pentek 2
        [price] => 100000
        [image] => -
        [description] => asadedsadasd
        [avail] => 1 -->
<script>
    $("i[id^='wishlist-icon']").hover(function(){
        $(this).attr("class", "bi bi-heart-fill");
        $(this).parent().attr("class", "link-danger");
    }, function(){
        $(this).attr("class", "bi bi-heart");
        $(this).parent().attr("class", "link-dark");
    });


</script>