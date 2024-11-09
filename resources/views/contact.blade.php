@extends('app')
@section('content')
<!-- header-start -->
<x-header />
<!-- header-end -->

<!-- bradcam_area_start  -->
<div class="bradcam_area">
    <div class="bradcam_inner bradcam_bg_2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>İletişime Geç</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->

<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="d-none  d-sm-block mb-5 pb-4">
            <div class="row ">
                <iframe width="600" height="450"
                    src="https://www.openstreetmap.org/export/embed.html?bbox=40.22866129875183%2C37.91812917692371%2C40.23314058780671%2C37.919970045179134&amp;layer=mapnik&amp;marker=37.91904961681081%2C40.230900943279266"
                    style="border: 1px solid black" class="col flex-grow-2"></iframe>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d3147.525507062938!2d40.230773576355105!3d37.9181520538872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d37.918014299999996!2d40.2336068!4m3!3m2!1d37.9180154!2d40.2336108!5e0!3m2!1sen!2str!4v1718051535528!5m2!1sen!2str"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="col flex-grow-2"></iframe>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">İletişime Geçin</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mesaj yaz'"
                                    placeholder=" Name"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adını yaz'"
                                    placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mail Adresini yaz'"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Konu yaz'"
                                    placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Gönder</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Eski galerianın arkasındasındaki oryıl plaza, b blok kat 2 no 2 Yenişehir/Diyarbakır</h3> | 
                        <p>YENİŞEHİR MAH. ELAZIĞ BULVARI AKTAŞ 2 APT. 6/19 YENİŞEHİR / DİYARBAKIR</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3> +90 536 676 16 03 </h3>
                        <p>Pazartesi'den Cuma'ya sabah 9'dan akşam 6'ya kadar</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>tansub10@gmail.com</h3>
                        <p>Sorgunuzu istediğiniz zaman bize gönderin!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

<!-- footer_start -->
<x-footer/>
<!-- footer_end -->

<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>

<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>

</body>

</html>
@endsection