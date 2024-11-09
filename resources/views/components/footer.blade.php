<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="index.html">

                                @php
                                $query = DB::table('site_settings')->get();
                                // $users = $query->addSelect('site_logo')->get();
                                // $users = $query->get();
                                    
                                @endphp
                                @if(isset($query[0]->site_logo))
                                <img src="storage/{{ $query[0]->site_logo }}" alt="" class="img-fluid" width="150">
                                @endif
                            </a>
                        </div>
                        <p class="footer_text">{{ $query[0]->site_address }}<br>
                            {{ $query[0]->site_phone }} <br>
                            <a class="domain" href="#">{{ $query[0]->site_email }}</a>
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="{{ $query[0]->site_facebook }}">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $query[0]->site_twitter }}">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $query[0]->site_instagram }}">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Faaliyet Alanlarımız
                        </h3>
                        <ul>
                            <li><a href="#">İş Hukuku
                                </a></li>
                            <li><a href="#">Finans hukuku</a></li>
                            <li><a href="#">Eğitim hukuku</a></li>
                            <li><a href="#">Aile hukuku</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Hızlı Erişim Bağlantılar
                        </h3>
                        <ul>
                            <li><a href="#">Hakkımızda</a></li>
                            <li><a href="#">Faaliyet Alanlarımız</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#"> İletişim</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center w-fit">
        <p class="text-white fs-5 fw-bold">Faydalı Bağlantılar</p>
        <br>
        <div class="row align-items-start">
            <div class="col-md-1 flex-grow-1"><a href="https://www.adalet.gov.tr" target="_blank" rel="nofollow"><img
                        src="https://www.diyarbakirbarosu.org.tr/public/uploads/post/1-1560177788.png"
                        alt="Türkiye Cumhuriyeti Adalet Bakanlığı">
                    <p class="fs-6 mx-auto">Türkiye Cumhuriyeti Adalet Bakanlığı</p>
                </a>
            </div>
            <div class="col-md-1 flex-grow-1"><a href="https://www.anayasa.gov.tr" target="_blank" rel="nofollow"><img
                        src="https://www.diyarbakirbarosu.org.tr/public/uploads/post/2-1560177865.png"
                        alt="Anayasa Mahkemesi">
                    <p class="fs-6 mx-auto">Anayasa Mahkemesi</p>
                </a></div>
            <div class="col-md-1 flex-grow-1"><a href="https://www.tccb.gov.tr" target="_blank" rel="nofollow"><img
                        src="https://www.diyarbakirbarosu.org.tr/public/uploads/post/3-1560177929.png"
                        alt="Türkiye Cumhuriyeti Başbakanlık">
                    <p>Türkiye Cumhuriyeti Başbakanlık</p>
                </a></div>
            <div class="col-md-1 flex-grow-1"><a href="https://www.danistay.gov.tr" target="_blank" rel="nofollow"><img
                        src="https://www.diyarbakirbarosu.org.tr/public/uploads/post/4-1560177964.png"
                        alt="T.C. Danıştay Başkanlığı">
                    <p>T.C. Danıştay Başkanlığı</p>
                </a></div>
            <div class="col-md-1 flex-grow-1"><a href="http://www.resmigazete.gov.tr/" target="_blank"
                    rel="nofollow"><img src="https://www.diyarbakirbarosu.org.tr/public/uploads/post/5-1560177987.png"
                        alt="Resmi Gazete">
                    <p>Resmi Gazete</p>
                </a></div>
            <div class="col-md-1 flex-grow-1"><a href="https://www.diyarbakirbarosu.org.tr"
                    title="Diyarbakır Barosu"><img
                        src="https://www.diyarbakirbarosu.org.tr/public/uploads/site/diyarbakir-barosu-1560166028.png"
                        alt="Diyarbakır Barosu">
                    <p>Diyarbakır Barosu</p>
                </a></div>
            <div class="col-md-1 flex-grow-1"><a href="https://www.barobirlik.org.tr" target="_blank"
                    rel="nofollow"><img src="https://www.diyarbakirbarosu.org.tr/public/uploads/post/6-1560178008.png"
                        alt="Türkiye Barolar Birliği">
                    <p>Türkiye Barolar Birliği</p>
                </a></div>
            <div class="col-md-1 flex-grow-1"><a href="https://www.tbmm.gov.tr/develop/owa/tbmm_internet.anasayfa"
                    target="_blank" rel="nofollow"><img
                        src="https://www.diyarbakirbarosu.org.tr/public/uploads/post/7-1560178036.png"
                        alt="Türkiye Büyük Millet Meclisi">
                    <p>Türkiye Büyük Millet Meclisi</p>
                </a></div>
                <div class="col-md-1 flex-grow-1"><a href="https://www.yargitay.gov.tr" target="_blank" rel="nofollow"><img src="https://www.diyarbakirbarosu.org.tr/public/uploads/post/8-1560178058.png" alt="Yargıtay"><p>Yargıtay</p></a></div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">

                        Telif Hakkı &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Tüm Hakları Saklıdır <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="x"
                            target="_blank"></a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>