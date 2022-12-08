<x-front-layout :title="$title">
    <!-- main-area -->
    <main>
       <!-- slider-area -->
       <section class="slider-area">
          <div class="slider-active">
             <div class="single-slider slider-bg slider-style-two">
                <div class="container-fluid container-full-padding">
                   <div class="row">
                      <div class="col-xl-8 col-lg-10 col-md-11">
                         <div class="slider-content">
                            <h6 data-animation="fadeInUp" data-delay=".4s">dunia game</h6>
                            <h2 data-animation="fadeInUp" data-delay=".4s">Buat dan <span>Kelola</span> Tournament</h2>
                            <p data-animation="fadeInUp" data-delay=".6s">Temukan teknologi atau orang untuk esport digital dan Temukan tournamnet yang menarik dengan hadiah besar.</p>
                            <a href="#" class="btn btn-style-two" data-animation="fadeInUp" data-delay=".8s">Selengkapnya &rarr;</a>
                         </div>
                      </div>
                   </div>
                </div>
                {{-- 
                <div class="slider-img" data-animation="slideInRightS" data-delay=".6s"><img src="{{ asset('front/img/slider/slider_img01.png') }}" alt=""></div>
                --}}
                {{-- 
                <div class="slider-img slider-img2" data-animation="slideInLeftS" data-delay=".6s"><img src="{{ asset('front/img/slider/slider_img02.png') }}" alt=""></div>
                --}}
                <div class="slider-circle-shape"><img src="{{ asset('front/img/slider/slider_circle.png') }}" alt="" class="rotateme"></div>
             </div>
             <div class="single-slider slider-bg slider-style-two" style="background-image: url(front/img/slider/slider_bg.jpg);">
                <div class="container-fluid container-full-padding">
                   <div class="row">
                      <div class="col-xl-6 col-lg-7 col-md-11">
                         <div class="slider-content">
                            <h6 data-animation="fadeInUp" data-delay=".4s">world gaming</h6>
                            <h2 data-animation="fadeInUp" data-delay=".4s">Cod <span>Modern</span> Warfare</h2>
                            <p data-animation="fadeInUp" data-delay=".6s">Find technology or people for digital projects in public sector and Find an individual specialist develope researcher.</p>
                            <a href="#" class="btn btn-style-two" data-animation="fadeInUp" data-delay=".8s">READ MORE</a>
                         </div>
                      </div>
                   </div>
                </div>
                {{-- 
                <div class="slider-img" data-animation="slideInRightS" data-delay=".6s"><img src="{{ asset('front/img/slider/slider_img01.png') }}" alt=""></div>
                --}}
                {{-- 
                <div class="slider-img slider-img2" data-animation="slideInLeftS" data-delay=".6s"><img src="{{ asset('front/img/slider/slider_img02.png') }}" alt=""></div>
                --}}
                <div class="slider-circle-shape"><img src="{{ asset('front/img/slider/slider_circle.png') }}" alt="" class="rotateme"></div>
             </div>
          </div>
       </section>
       <!-- slider-area-end -->
       <div class="area-bg-one">
          <!-- latest-games-area -->
          <section class="latest-games-area pt-120">
             <div class="container">
                <div class="row">
                   <div class="col-lg-6 col-md-8">
                      <div class="section-title mb-50">
                         <span>Tournamnet</span>
                         <h2>Temukan Tournament &amp; <span>Terbaru!</span></h2>
                      </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-12">
                      <div class="latest-games-active owl-carousel owl-loaded owl-drag">
                         <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-2460px, 0px, 0px); transition: all 0.25s ease 0s; width: 4100px;">
                               <div class="owl-item cloned" style="width: 380px; margin-right: 30px;">
                                  <div class="latest-games-items mb-30">
                                     <div class="latest-games-thumb">
                                        <a href="#"><img src="{{ asset('front/img/product/latest_games_thumb02.jpg') }}" alt=""></a>
                                     </div>
                                     <div class="latest-games-content">
                                        <div class="lg-tag">
                                           <a href="#">PUBG</a>
                                        </div>
                                        <h4><a href="#">PUBG School Competition SMKN 1 CIAMIS</a></h4>
                                        <div>
                                            <p style="padding-bottom: 0.4rem;">hadiah : <span>Rp. 2.000.000</span></p>
                                            <p style="padding-bottom: 0.4rem;">team : <span>0/10</span></p>
                                            <p>tanggal : <span>12 Des 2022 / 16 Des 2022</span></p>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="owl-item cloned" style="width: 380px; margin-right: 30px;">
                                  <div class="latest-games-items mb-30">
                                     <div class="latest-games-thumb">
                                        <a href="#"><img src="{{ asset('front/img/product/latest_games_thumb03.jpg') }}" alt=""></a>
                                     </div>
                                     <div class="latest-games-content">
                                        <div class="lg-tag">
                                            <a href="#">Mobile Legends</a>
                                        </div>
                                        <h4><a href="#">Mobile Legends School Competition SMKN 1 CIAMIS</a></h4>
                                        <div>
                                            <p style="padding-bottom: 0.4rem;">hadiah : <span>Rp. 2.000.000</span></p>
                                            <p style="padding-bottom: 0.4rem;">team : <span>0/10</span></p>
                                            <p>tanggal : <span>12 Des 2022 / 16 Des 2022</span></p>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="owl-item cloned" style="width: 380px; margin-right: 30px;">
                                  <div class="latest-games-items mb-30">
                                     <div class="latest-games-thumb">
                                        <a href="#"><img src="{{ asset('front/img/product/latest_games_thumb01.jpg') }}" alt=""></a>
                                     </div>
                                     <div class="latest-games-content">
                                        <div class="lg-tag">
                                            <a href="#">Free Fire</a>
                                        </div>
                                        <h4><a href="#">Free Fire School Competition SMKN 1 CIAMIS</a></h4>
                                        <div>
                                            <p style="padding-bottom: 0.4rem;">hadiah : <span>Rp. 2.000.000</span></p>
                                            <p style="padding-bottom: 0.4rem;">team : <span>0/10</span></p>
                                            <p>tanggal : <span>12 Des 2022 / 16 Des 2022</span></p>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button></div>
                         <div class="owl-dots disabled"></div>
                      </div>
                   </div>
                </div>
             </div>
          </section>
          <!-- latest-games-area-end -->
          <!-- about-us-area -->
          <section class="about-us-area pt-90 pb-120">
             <div class="container">
                <div class="row">
                   <div class="col-lg-6 order-0 order-lg-2">
                      <div class="about-img">
                         <img src="{{ asset('front/img/images/about_us_img.jpg') }}" alt="">
                         <a href="https://www.youtube.com/watch?v=_LTiEXMc5J0" class="popup-video"><img src="{{ asset('front/img/icon/play_btn.png') }}" alt=""></a>
                      </div>
                   </div>
                   <div class="col-lg-6">
                      <div class="section-title title-style-two mb-45">
                         <span>about story</span>
                         <h2>Portal Buat kamu <span>Mencari dan Membuat</span> Tournament</h2>
                      </div>
                      <div class="about-content">
                         <p>Find technology or people for digital projects in public sector and Find an individual specialist develo researcher.</p>
                         <p>Consectur adipiscing elit, sed do eiusmod tempor incididunt labore dolore mana aliqua. Unimd minim venam quis nostrud
                            exercitation ullamco laboris nisi ut aliquip commodo cpsam.
                         </p>
                         <div class="about-btn">
                            <a href="#" class="btn">Selengkapnya &rarr;</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </section>
          <!-- about-us-area-end -->
       </div>
       <!-- gamers-area -->
       <section class="just-gamers-area just-gamers-bg pt-115 pb-120">
          <div class="container">
             <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-10">
                   <div class="section-title title-style-three white-title mb-70">
                      <h2>Jadikan kamu <span>GAMERS</span> Terbaik</h2>
                      <p>Ikuti Tournament yang ada di portal ini dan jadikan dirimu sebagai <span>GAMERS</span> terbaik</p>
                      </p>
                   </div>
                   <div class="just-gamers-list">
                      <ul>
                         <li>
                            <div class="just-gamers-list-icon">
                               <img src="{{ asset('front/img/icon/gamer_list_icon01.png') }}" alt="">
                            </div>
                            <div class="just-gamers-list-content fix">
                               <h5>Hadiah Besar</h5>
                               <p>Ikuti Tournament dan dapatkan hadiah dengan nominal yang besar</p>
                            </div>
                         </li>
                         <li>
                            <div class="just-gamers-list-icon">
                               <img src="{{ asset('front/img/icon/gamer_list_icon02.png') }}" alt="">
                            </div>
                            <div class="just-gamers-list-content fix">
                               <h5>Skill Meningkat</h5>
                               <p>Tingkatkan skill gamers kamu dengan ikuti tournament di portal ini</p>
                            </div>
                         </li>
                         <li>
                            <div class="just-gamers-list-icon">
                               <img src="{{ asset('front/img/icon/gamer_list_icon03.png') }}" alt="">
                            </div>
                            <div class="just-gamers-list-content fix">
                               <h5>Tambah Relasi</h5>
                               <p>Menambah relasi dengan gamers lainnya</p>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
                <div class="col-xl-7 col-lg-6 d-none d-lg-block">
                   <div class="just-gamers-img">
                      <img src="{{ asset('front/img/images/just_gamers_img.png') }}" alt="" class="just-gamers-character">
                      <div class="just-gamers-circle-shape">
                         <img src="{{ asset('front/img/images/gamers_circle_line.png') }}" alt="">
                         <img src="{{ asset('front/img/images/gamers_circle_shape.png') }}" alt="" class="rotateme">
                      </div>
                      <img src="{{ asset('front/img/images/just_gamers_chart.png') }}" alt="" class="gamers-chart-shape">
                   </div>
                </div>
             </div>
          </div>
       </section>
       <!-- gamers-area-end -->
       <section class="game-manage-area game-mange-bg pt-120 pb-120">
          <div class="container">
             <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                   <div class="section-title title-style-two text-center mb-60">
                      <span>Battle Clash Squad</span>
                      <h2>Match Tournament <span>Akan Datang</span></h2>
                   </div>
                </div>
             </div>
             <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                   <div class="coming-match-item mb-30">
                      <div class="coming-match-team">
                         <div class="match-team-info">
                            <div class="match-team-logo">
                               <a href="#"><img src="{{ asset('front/img/team/team_logo01.png') }}" alt=""></a>
                            </div>
                            <div class="match-team-name">
                               <a href="#">Bluster 8</a>
                            </div>
                         </div>
                         <div class="coming-match-status">
                            <img src="{{ asset('front/img/team/match_vs.png') }}" alt="">
                         </div>
                         <div class="match-team-info">
                            <div class="match-team-logo">
                               <a href="#"><img src="{{ asset('front/img/team/team_logo02.png') }}" alt=""></a>
                            </div>
                            <div class="match-team-name">
                               <a href="#">kill bill 7</a>
                            </div>
                         </div>
                      </div>
                      <div class="coming-match-info">
                         <h5>Match Mobile Legend <span>SMKN 1 CAMIS</span></h5>
                         <div class="match-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                         </div>
                         <div class="match-info-action">
                            <a href="#" class="btn">view details</a>
                            <a href="#" class="btn transparent-btn"><i class="fas fa-comments"></i> Comments</a>
                         </div>
                      </div>
                      <div class="coming-match-time">
                         <div class="coming-time" data-countdown="2022/12/06">
                            <div class="time-count"><span>00</span>Days</div>
                            <div class="time-count"><span>00</span>Hrs</div>
                            <div class="time-count"><span>00</span>Mins</div>
                            <div class="time-count"><span>00</span>Secs</div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6">
                   <div class="coming-match-item mb-30">
                      <div class="coming-match-team">
                         <div class="match-team-info">
                            <div class="match-team-logo">
                               <a href="#"><img src="{{ asset('front/img/team/team_logo03.png') }}" alt=""></a>
                            </div>
                            <div class="match-team-name">
                               <a href="#">Bluster 8</a>
                            </div>
                         </div>
                         <div class="coming-match-status">
                            <img src="{{ asset('front/img/team/match_vs.png') }}" alt="">
                         </div>
                         <div class="match-team-info">
                            <div class="match-team-logo">
                               <a href="#"><img src="{{ asset('front/img/team/team_logo04.png') }}" alt=""></a>
                            </div>
                            <div class="match-team-name">
                               <a href="#">The Champ</a>
                            </div>
                         </div>
                      </div>
                      <div class="coming-match-info">
                         <h5>Final PUBG Mobile <span>SMKN 1 CIAMIS</span></h5>
                         <div class="match-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                         </div>
                         <div class="match-info-action">
                            <a href="#" class="btn">view details</a>
                            <a href="#" class="btn transparent-btn"><i class="fas fa-comments"></i> Comments</a>
                         </div>
                      </div>
                      <div class="coming-match-time">
                         <div class="coming-time" data-countdown="2022/12/07">
                            <div class="time-count"><span>00</span>Days</div>
                            <div class="time-count"><span>00</span>Hrs</div>
                            <div class="time-count"><span>00</span>Mins</div>
                            <div class="time-count"><span>00</span>Secs</div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6">
                   <div class="coming-match-item mb-30">
                      <div class="coming-match-team">
                         <div class="match-team-info">
                            <div class="match-team-logo">
                               <a href="#"><img src="{{ asset('front/img/team/team_logo05.png') }}" alt=""></a>
                            </div>
                            <div class="match-team-name">
                               <a href="#">Warrior</a>
                            </div>
                         </div>
                         <div class="coming-match-status">
                            <img src="{{ asset('front/img/team/match_vs.png') }}" alt="">
                         </div>
                         <div class="match-team-info">
                            <div class="match-team-logo">
                               <a href="#"><img src="{{ asset('front/img/team/team_logo06.png') }}" alt=""></a>
                            </div>
                            <div class="match-team-name">
                               <a href="#">kill bill 7</a>
                            </div>
                         </div>
                      </div>
                      <div class="coming-match-info">
                         <h5>Match Fire Fire <span>SMKN 1 CIAMIS</span></h5>
                         <div class="match-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                         </div>
                         <div class="match-info-action">
                            <a href="#" class="btn">view details</a>
                            <a href="#" class="btn transparent-btn"><i class="fas fa-comments"></i> Comments</a>
                         </div>
                      </div>
                      <div class="coming-match-time">
                         <div class="coming-time" data-countdown="2022/12/08">
                            <div class="time-count"><span>00</span>Days</div>
                            <div class="time-count"><span>00</span>Hrs</div>
                            <div class="time-count"><span>00</span>Mins</div>
                            <div class="time-count"><span>00</span>Secs</div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <section class="features-area features-bg pt-120 pb-70">
          <div class="container">
             <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                   <div class="section-title title-style-two text-center mb-60">
                      <span>what we give players</span>
                      <h2>Mengapa Harus Pilih Kami <span>Tournify</span></h2>
                   </div>
                </div>
             </div>
             <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                   <div class="features-item mb-30">
                      <div class="features-head mb-35">
                         <div class="product-tag"><a href="#">Trusted</a></div>
                         <h4>Portal Yang Terpercaya</h4>
                         <p>Consecur adipcig eiusod tempor the inci did dolore mana is aliqsua Unimd minim thats tempor dolore adipcig</p>
                      </div>
                   </div>
                </div>
                <div class="col-xl-4 col-md-6">
                   <div class="features-item mb-30">
                      <div class="features-head mb-35">
                         <div class="product-tag"><a href="#">Complete</a></div>
                         <h4>Tournament Yang Lengkap</h4>
                         <p>Consecur adipcig eiusod tempor the inci did dolore mana is aliqsua Unimd minim thats tempor dolore adipcig</p>
                      </div>
                   </div>
                </div>
                <div class="col-xl-4 col-md-6">
                   <div class="features-item mb-30">
                      <div class="features-head mb-35">
                         <div class="product-tag"><a href="#">Digitalize</a></div>
                         <h4>Match Yang Terdigitalisasi</h4>
                         <p>Consecur adipcig eiusod tempor the inci did dolore mana is aliqsua Unimd minim thats tempor dolore
                            adipcig
                         </p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="fact-area pt-90">
                <div class="row justify-content-center">
                   <div class="col-lg-3 col-md-4 col-sm-6">
                      <div class="fact-item">
                         <div class="fact-icon">
                            <img src="{{ asset('front/img/icon/fact_icon01.png') }}" alt="">
                         </div>
                         <div class="fact-content">
                            <h2>
                               <span class="odometer odometer-auto-theme" data-count="245">
                                  <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div>
                               </span>
                            </h2>
                            <span>Tournament Dibuat</span>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                      <div class="fact-item">
                         <div class="fact-icon">
                            <img src="{{ asset('front/img/icon/fact_icon02.png') }}" alt="">
                         </div>
                         <div class="fact-content">
                            <h2>
                               <span class="odometer odometer-auto-theme" data-count="1245">
                                  <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div>
                               </span>
                            </h2>
                            <span>Match Terselenggara</span>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                      <div class="fact-item">
                         <div class="fact-icon">
                            <img src="{{ asset('front/img/icon/fact_icon03.png') }}" alt="">
                         </div>
                         <div class="fact-content">
                            <h2>
                               <span class="odometer odometer-auto-theme" data-count="12">
                                  <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span></div>
                               </span>
                            </h2>
                            <span>Game Tersedia</span>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                      <div class="fact-item">
                         <div class="fact-icon">
                            <img src="{{ asset('front/img/icon/fact_icon04.png') }}" alt="">
                         </div>
                         <div class="fact-content">
                            <h2>
                               <span class="odometer odometer-auto-theme" data-count="72">
                                  <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span></div>
                               </span>
                            </h2>
                            <span>Team Mengikuti</span>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <!-- featured-game-area -->
       <section class="featured-game-area position-relative pt-115 pb-90">
          <div class="featured-game-bg"></div>
          <div class="container">
             <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                   <div class="section-title title-style-three text-center mb-70">
                      <h2>Tournament <span>GAMES</span></h2>
                      <p>Compete with 100 players on a remote island for winner takes showdown
                         known issue where certain skin strategic
                      </p>
                   </div>
                </div>
             </div>
             <div class="row featured-active">
                <div class="col-lg-4 col-sm-6 grid-item">
                   <div class="featured-game-item mb-30">
                      <div class="featured-game-thumb">
                         <img src="{{ asset('front/img/images/featured_game_thumb01.jpg') }}" alt="">
                      </div>
                      <div class="featured-game-content">
                         <h4><a href="#">PUBG MOBILE</a></h4>
                         <div class="featured-game-meta">
                            <i class="fas fa-bell"></i>
                            <span>15 Tournament Tersedia</span>
                         </div>
                      </div>
                      <div class="featured-game-content featured-game-overlay-content">
                         <div class="featured-game-icon"><img src="{{ asset('front/img/icon/featured_game_icon.png') }}" alt=""></div>
                         <h4><a href="#">PUBG MOBILE</a></h4>
                         <div class="featured-game-meta">
                            <i class="fas fa-bell"></i>
                            <span>15 Tournament Tersedia</span>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4 col-sm-6 grid-item">
                   <div class="featured-game-item mb-30">
                      <div class="featured-game-thumb">
                         <img src="https://i.pinimg.com/736x/6d/f7/b8/6df7b8a74fbb238145c72965a4eee25d.jpg" alt="">
                      </div>
                      <div class="featured-game-content">
                         <h4><a href="#">Mobile Legends: Bang Bang</a></h4>
                         <div class="featured-game-meta">
                            <i class="fas fa-bell"></i>
                            <span>12 Tournament Tersedia</span>
                         </div>
                      </div>
                      <div class="featured-game-content featured-game-overlay-content">
                         <div class="featured-game-icon"><img src="{{ asset('front/img/icon/featured_game_icon.png') }}" alt=""></div>
                         <h4><a href="#">Mobile Legends: Bang Bang</a></h4>
                         <div class="featured-game-meta">
                            <i class="fas fa-bell"></i>
                            <span>12 Tournament Tersedia</span>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4 col-sm-6 grid-item">
                   <div class="featured-game-item mb-30">
                      <div class="featured-game-thumb">
                         <img src="{{ asset('front/img/images/featured_game_thumb03.jpg') }}" alt="">
                      </div>
                      <div class="featured-game-content">
                         <h4><a href="#">Garena Free Fire</a></h4>
                         <div class="featured-game-meta">
                            <i class="fas fa-bell"></i>
                            <span>14 Tournament Tersedia</span>
                         </div>
                      </div>
                      <div class="featured-game-content featured-game-overlay-content">
                         <div class="featured-game-icon"><img src="{{ asset('front/img/icon/featured_game_icon.png') }}" alt=""></div>
                         <h4><a href="#">Garena Free Fire</a></h4>
                         <div class="featured-game-meta">
                            <i class="fas fa-bell"></i>
                            <span>14 Tournament Tersedia</span>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4 col-sm-6 grid-item">
                   <div class="featured-game-item mb-30">
                      <div class="featured-game-thumb">
                         <img src="https://w0.peakpx.com/wallpaper/585/921/HD-wallpaper-genshin-impact-xiao-genshin-impact-lumine-genshin-impact-paimon-zhongli-genshin-impact-thumbnail.jpg" alt="">
                      </div>
                      <div class="featured-game-content">
                         <h4><a href="#">Genshin Impact</a></h4>
                         <div class="featured-game-meta">
                            <i class="fas fa-bell"></i>
                            <span>12 Tournamnet Tersedia</span>
                         </div>
                      </div>
                      <div class="featured-game-content featured-game-overlay-content">
                         <div class="featured-game-icon"><img src="{{ asset('front/img/icon/featured_game_icon.png') }}" alt=""></div>
                         <h4><a href="#">Genshin Impact</a></h4>
                         <div class="featured-game-meta">
                            <i class="fas fa-bell"></i>
                            <span>12 Tournamnet Tersedia</span>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4 col-sm-6 grid-item">
                   <div class="featured-game-item mb-30">
                      <div class="featured-game-thumb">
                         <img src="data:image/jpeg;base64,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" alt="">
                      </div>
                      <div class="featured-game-content">
                         <h4><a href="#">eFootball PEST</a></h4>
                         <div class="featured-game-meta">
                            <i class="fas fa-bell"></i>
                            <span>15 Tournament Tersedia</span>
                         </div>
                      </div>
                      <div class="featured-game-content featured-game-overlay-content">
                         <div class="featured-game-icon"><img src="{{ asset('front/img/icon/featured_game_icon.png') }}" alt=""></div>
                         <h4><a href="#">eFootball PEST</a></h4>
                         <div class="featured-game-meta">
                            <i class="fas fa-bell"></i>
                            <span>15 Tournament Tersedia</span>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4 col-sm-6 grid-item">
                   <div class="featured-game-item mb-30">
                      <div class="featured-game-thumb">
                         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJOX2a75crrHs3cYvkw0FMnsyQM-lrnOGiqw&usqp=CAU" alt="">
                      </div>
                      <div class="featured-game-content">
                         <h4><a href="#">Call of Duty</a></h4>
                         <div class="featured-game-meta">
                            <i class="fas fa-bell"></i>
                            <span>6 Tournament Tersedia</span>
                         </div>
                      </div>
                      <div class="featured-game-content featured-game-overlay-content">
                         <div class="featured-game-icon"><img src="{{ asset('front/img/icon/featured_game_icon.png') }}" alt=""></div>
                         <h4><a href="#">Call of Duty</a></h4>
                         <div class="featured-game-meta">
                            <i class="fas fa-bell"></i>
                            <span>6 Tournament Tersedia</span>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <!-- featured-game-area-end -->
       <!-- cta-area -->
       <section class="cta-area cta-bg">
          <div class="container">
             <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6">
                   <div class="cta-img">
                      <img src="{{ asset('front/img/images/cta_img.png') }}" alt="">
                   </div>
                </div>
                <div class="col-lg-6">
                   <div class="cta-content">
                      <div class="cta-icon mb-15">
                         <img src="{{ asset('front/img/icon/cta_icon.png') }}" alt="">
                      </div>
                      <div class="section-title title-style-three white-title mb-50">
                         <h2>Jadi Gamers Terbaik <span>Sekarang Juga</span></h2>
                         <p>Compete with 100 player on a remote island for winner
                            known issue where certain strategic
                         </p>
                      </div>
                      <div class="cta-btn">
                         <a href="#" class="btn btn-style-two">Bergabung Sekarang</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <!-- cta-area-end -->
       <!-- blog-area -->
       <section class="blog-area pt-115 pb-120">
          <div class="container">
             <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                   <div class="section-title title-style-three text-center mb-70">
                      <h2>Berita Terbaru Seputar <span>ESport</span></h2>
                      <p>Compete with 100 players on a remote island for winner takes showdown
                         known issue where certain skin strategic
                      </p>
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-lg-4 col-md-6">
                   <div class="blog-post blog-style-two mb-50">
                      <div class="blog-thumb mb-30">
                         <a href="#"><img src="https://api.duniagames.co.id/api/content/upload/file/7452117921670057311.jpg" alt=""></a>
                      </div>
                      <div class="blog-post-content">
                         <h4><a href="#">Seremoni Pembukaan 14th World Esports Championships 2022 Berlangsung Spektakuler</a></h4>
                         <div class="blog-meta">
                            <ul>
                               <li><i class="far fa-clock"></i>Des 4, 2022</li>
                               <li><i class="fas fa-tag"></i><a href="#">Shooter</a></li>
                            </ul>
                         </div>
                         <p>IESF resmi membuka 14th World Esports Championship Bali 2022 dengan seremoni pembukaan yang spektakuler. Bali, Indonesia sebagai latar untuk parade musik dan tari [...]
                         </p>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6">
                   <div class="blog-post blog-style-two mb-50">
                      <div class="blog-thumb mb-30">
                         <a href="#"><img src="https://api.duniagames.co.id/api/content/upload/file/21283456651666609766.jpg" alt=""></a>
                      </div>
                      <div class="blog-post-content">
                         <h4><a href="#">Indonesia Esports Summit 2022 Siap Menyambut Pengunjung dari Seluruh Dunia</a></h4>
                         <div class="blog-meta">
                            <ul>
                               <li><i class="far fa-clock"></i>Des 4, 2022</li>
                               <li><i class="fas fa-tag"></i><a href="#">Shooter</a></li>
                            </ul>
                         </div>
                         <p>ONIC Esports hampir menjadi juara di MPL Indonesia Season 9. Namun, Tim Landak Kuning harus mengakui keunggulan Raja dari Segala Raja, RRQ Hoshi di babak grand final. [...]
                         </p>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6">
                   <div class="blog-post blog-style-two mb-50">
                      <div class="blog-thumb mb-30">
                         <a href="#"><img src="https://api.duniagames.co.id/api/content/upload/file/16082199031664162012.jpg" alt=""></a>
                      </div>
                      <div class="blog-post-content">
                         <h4><a href="#">Dicari Wakil Indonesia untuk FFWS 2022 Bangkok, Final Week FFML Season VI Divisi 1</a></h4>
                         <div class="blog-meta">
                            <ul>
                               <li><i class="far fa-clock"></i>July 4, 2020</li>
                               <li><i class="fas fa-tag"></i><a href="#">Shooter</a></li>
                            </ul>
                         </div>
                         <p>Tim Dunia Games berpartisipasi dalam meliput berlangsungnya Indonesia Esports Summit 2022. Selain Tim Dunia Games, puluhan awak media melakukan kunjungan ke [...]
                         </p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <!-- blog-area-end -->
    </main>
    <!-- main-area-end -->
 </x-front-layout>
 