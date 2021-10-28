<div class="container-fluid footer-section">
    <div class="row">
        <div class="col-md-1 col-2 logo-footer footer-no-padding pb-3">
            <img src="assets/images/logo/Logotipo.jpg" class=" img-pin " alt="">
        </div>
        <div class=" col-md-7">
            <div class="row">
                <div class="col-md-1 col-1  footer-no-padding d-flex justify-content-end align-items-center">
                    <i class="fas fa-map-marker-alt fa-lg"></i>
                </div>
                <div class="col-md-11 col-11">
                    <p class="">Rua Polux, Jardim Paraiso, 374, Joinville - SC</p>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-1 col-1 footer-no-padding d-flex justify-content-end align-items-start pt-2">
                    <i class="fal fa-clock fa-lg"></i>
                </div>
                <div class="col-md-11 col-11">
                    <p class="">Segunda a Sexta: <b>7:00 às 20:00</b><br>
                        Sábado: <b>08:30 às 18:00</b></p>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-1 col-1 footer-no-padding d-flex justify-content-end align-items-center">
                    <i class="fal fa-envelope fa-lg"></i>
                </div>
                <div class="col-md-11 col-11">
                    <p>contato@cuidadoratianani.com.br</p>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-1 col-1 footer-no-padding d-flex justify-content-end align-items-center">
                    <i class="fab fa-whatsapp fa-lg"></i>
                </div>
                <div class="col-md-3 col-11">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=5551981706343&amp;text=Olá, estou entrando em contato através do site. ">
                        <p>47 9773.6783</p>
                    </a>
                </div>
                <div class="col-md-1 col-1 footer-no-padding d-flex justify-content-end align-items-center some-mobile">
                    <i class="fas fa-phone-alt fa-lg some-mobile"></i>
                </div>
                <div class="col-md-5 col-11 some-mobile">
                    <p>47 9773.6783</p>
                </div>
                <div class="col-md-1 col-1 pt-2 footer-no-padding d-flex justify-content-end align-items-center some-pc">
                    <i class="fas fa-phone-alt fa-lg some-pc"></i>
                </div>
                <div class="col-md-5 col-11 pt-2 some-pc">
                    <p>48 3548.0190</p>
                </div>
            </div>

        </div>
        <div class="col-md-4 seta-cima d-flex justify-content-end align-items-end" style="width: 30.333333%;">
            <a id="arrow-up" href="#"><i class="far fa-arrow-up "></i></a>
        </div>
    </div>
</div>
<div class="btn-fixed">
    <a class="whatsFixed" href="https://api.whatsapp.com/send?phone=5551998905894&text=Olá, estou entrando em contato através do site. " target="_blank"><i class="fab fa-whatsapp fa-lg " style="color: #fff;"></i> Entre em contato </a>
</div>

<script>
    $('#mouse-roll').on('click', function(event) {
        $("#sobre-btn").addClass('active');
        $("#home-id").removeClass('active');
        $("#plano-id").removeClass('active');
        $("#contato-id").removeClass('active');

        $("#home-id-mobile").removeClass('active');
        $("#sobre-btn-mobile").addClass('active');
        $("#plano-id-mobile").removeClass('active');
        $("#contato-id-mobile").removeClass('active');
    });

    $('#arrow-up').on('click', function(event) {
        $("#sobre-btn").removeClass('active');
        $("#home-id").addClass('active');
        $("#plano-id").removeClass('active');
        $("#contato-id").removeClass('active');

        $("#home-id-mobile").addClass('active');
        $("#sobre-btn-mobile").removeClass('active');
        $("#plano-id-mobile").removeClass('active');
        $("#contato-id-mobile").removeClass('active');
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

<script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>

<script src="<?= $actual_link ?>/assets/js/lightslider.js"></script>