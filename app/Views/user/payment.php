
<div class="container mt-5 text-center" style="margin-bottom: 400px !important;">
    <div class="row" >
        <div class="col col-lg-6 border p-3">
            <p class="h5"> Selesaikan pembayaran dalam</p>
            <p class="h4 text-danger fw-bold mb-4" id="counter"></p>
            <p class="h5"> Batas akhir pembayaran </p>
            <p class="h4 fw-bold mb-4"> <?=date("d M Y, H:i",strtotime($data[0]['tgl_limit']))?> </p>
            <p class="text-muted mb-1"> Total Pembayaran </p>
            <p class="h2 fw-bold"> Rp. <?=number_format($data[0]['total_belanja'],0,",",".") ?> </p>
            <a href="#" class="link-success "> Lihat detail </a> <br><br>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Konfirmasi Pembayaran
            </button>
            <!-- <div class="alert alert-danger w-50 mx-auto mt-2" role="alert">
                Please transfer the exact amount including the transaction code. Failure to do so will delay the verification process.
            </div> -->
        </div>
        <div class="col col-lg-6">
            <h2 class="text-start"><u> Metode Pembayaran :</u></h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item border-bottom">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            QRIS
                        </button>
                    </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <img src="<?=base_url()?>assets/img/qris-wakuteka.png" class="w-100" />
                            </div>
                        </div>
                    </div>
                </div></div>
                <div class="accordion-item border-bottom">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Transfer Bank
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row mb-2 p-2 border ">
                                <div class="col-lg-6 my-auto">
                                    <img src="<?=base_url()?>assets/img/bca.png" class="w-50" /> <br>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mb-1"> Bank BCA </p>
                                    <p class="mb-1"> 1671 7222 86 </p>
                                    <p class="mb-1"> a/n ANGGA FARTITEUR SETIAWAN </p>
                                </div>
                            </div>
                            <div class="row mb-2 p-2 border ">
                                <div class="col-lg-6 my-auto">
                                    <img src="<?=base_url()?>assets/img/mandiri.png" class="w-50" /> <br>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mb-1"> Bank Mandiri </p>
                                    <p class="mb-1"> 127 000 984 939 7 </p>
                                    <p class="mb-1"> a/n ANGGA FARTITEUR SETI </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p class="h5"> Selesaikan pembayaran dalam</p>
            <p class="h4 text-danger fw-bold"> 23:04:10 </p>
            <p class="h5 text-muted"> Batas akhir pembayaran </p>
            <p class="h4 fw-bold"> Besok </p>
        </div>
    </div>
    <div class="row mt-3 ">
        <div class="text-center">
            <p class="text-muted mb-1"> Total Pembayaran </p>
            <p class="h2 fw-bold"> Rp. 69.000 </p>
            <a href="#" class="link-success"> Lihat detail </a> <br>
            <a href="#" class="btn btn-dark"> Konfirmasi Pembayaran </a> 
        </div>
    </div>
    <div class="row mt-3">
        <h2><u> Metode Pembayaran :</u></h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    QRIS
                    </button>
                </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Transfer Bank: BCA
                    </button>
                </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Transfer Bank: Mandiri
                    </button>
                </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Pembayaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        // Set the date we're counting down to
        var countDownDate = new Date("<?=$data[0]['tgl_limit']?>").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("counter").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
        clearInterval(x);
        document.getElementById("counter").innerHTML = "EXPIRED";
        }
        }, 1000);
    });
</script>