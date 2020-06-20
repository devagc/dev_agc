<!-- visual -->
<div id="visual">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/code.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="h_1">Dev 의 간단하고 부담스럽지 않은 가격</h5>
                    <p class="h_1">반응형 웹 / 웹 홈페이지를 만들어드립니다.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/mbanner_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="h_2">부담스럽지 않지만!</h5>
                    <p class="h_2">기업의 이미지에 맞는 홈페이지를 만들어드립니다.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/bg.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="h_3">가지고 계신 홈페이지가 오래된거라면?</h5>
                    <p class="h_3">부담스럽지 않게 유지보수도 해드릴게요!</p>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- //visual -->
    <!-- container -->
    <section id="container">
    <!-- portfolio -->
    <div class="portfolio">
    <?php 
        if(!empty($_GET['id'])):
          echo file_get_contents("main_pot/".$_GET['id'].".php");
        else:
      ?>
        <div class="po_nav">
            <ul>
                <li class="active" id="li"><a href="index.php?id=all" class="a"><img src="img/all.png" alt=""><span>all</span></a></li>
                <li class="" id="li"><a href="index.php?id=web" class="a"><img src="img/desk.png" alt=""><span>Web</span></a></li>
                <li class="" id="li"><a href="index.php?id=mobile" class="a"><img src="img/pon.png" alt=""><span>Mobile</span></a></li>
                <li class="" id="li"><a href="index.php?id=ems" class="a"><img src="img/prog.png" alt=""><span>EMS</span></a></li>
            </ul>
        </div>
    </div>
    <!-- portfolio_moder -->
    <section class="bg-light_1 page-section" id="portfolio">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase"></h2>
              <h3 class="section-subheading text-muted"></h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item tab-content current" id="tab-1">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <!-- <i class="fas fa-plus fa-3x"></i> -->
                  </div>
                </div>
                <img class="img-fluid" src="img/p1.png" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>웹사이트</h4>
                <p class="text-muted">반응형X</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item" id="tab-1">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <!-- <i class="fas fa-plus fa-3x"></i> -->
                  </div>
                </div>
                <img class="img-fluid" src="img/p2m.png" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>웹사이트</h4>
                <p class="text-muted">반응형</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item" id="tab-1">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <!-- <i class="fas fa-plus fa-3x"></i> -->
                  </div>
                </div>
                <img class="img-fluid" src="img/p3m.png" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>웹사이트</h4>
                <p class="text-muted">반응형</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item" id="tab-1">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <!-- <i class="fas fa-plus fa-3x"></i> -->
                  </div>
                </div>
                <img class="img-fluid" src="img/p4m.png" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>웹사이트</h4>
                <p class="text-muted">반응형</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item" id="tab-1">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <!-- <i class="fas fa-plus fa-3x"></i> -->
                  </div>
                </div>
                <img class="img-fluid" src="img/p5m.png" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>웹사이트</h4>
                <p class="text-muted">반응형X</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item" id="tab-1">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <!-- <i class="fas fa-plus fa-3x"></i> -->
                  </div>
                </div>
                <img class="img-fluid" src="img/daum_cover.png" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>daum_cover</h4>
                <p class="text-muted"></p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item" id="tab-1">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <!-- <i class="fas fa-plus fa-3x"></i> -->
                  </div>
                </div>
                <img class="img-fluid" src="img/ems.png" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>ems</h4>
                <p class="text-muted"></p>
              </div>
            </div>
          </div>
        </div>
        <div class="btn">
            <a href="#">전체보기</a>
        </div>
      <?php 
        endif;
      ?>
      </section>
    <!-- portfolio_moder -->
    
    <!-- //portfolio -->
    <!-- post -->
    <div id="post">
        <div class="wrap">
            <div id="post">
                <h2>기술</h2>
                <div class="border"></div>
                <div class="post_flex">
                    <a href="http://deve.co.kr" target="blank">
                        <div class="post_img_1">
                            <div class="po">
                        <!-- <img src="./img/oor.jpg" alt="oor"> -->
                                <span>Portfolio</span>
                                <div class="post_bottom">
                                    <h3>기업은 <br><em>사업에 집중하세요. 우리가 사이트를 만들어드릴께요!</em></h3>
                                    <div class="poto_1">
                                    <img src="img/logo.png" alt="logo.png">
                                        <p>Dae Su</p>
                                        <p class="sep">DEV</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="http://deve.co.kr" target="blank">
                        <div class="post_img_2">
                            <div class="po">
                            <!-- <img src="./img/f.jpg" alt="f"> -->
                                <span>Portfolio</span>
                                <div class="post_bottom">
                                    <h3>유지보수 <br><em>걱정하지 말아요! 데브가 다 알아서 해드릴게요!</em></h3>
                                    <div class="poto_2">
                                    <img src="img/logo.png" alt="logo.png">
                                        <p>Dae Su</p>
                                        <p class="sep">DEV</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    </div>
    <!-- //post -->
    <!-- content -->
    <div id="content">
        <div class="aside">
            <h3>궁금하신 내용 남겨주세요</h3>
            <p>저희와 팔로우를 하고 싶다면 눌러주세요.</p>
            <a class="twitter" href="https://twitter.com/" target="blank">Follow us on Twitter</a>
            <a class="facebook" href="https://facebook.com/" target="blank">Like us on Facebook</a>
            <a class="instagram" href="https://instagram.com/" target="blank">Follow us on Instagram</a>
        </div>
        <div class="request">
            <form action="admin/consave.php" method="POST">
                <fieldset>
                    <legend>fieldset legend</legend>
                    <div class="field field_1">
                        <div class="field_in f1">
                            <label for="name">이름:</label> <br>
                            <input type="text" name="name" id="name" maxlength="8" placeholder="이름을 적어주세요" value="">
                        </div>
                        <div class="field_in f2">
                            <label for="userEmail">Email:</label> <br>
                            <input type="email" name="userEmail" id="userEmail"  placeholder="이메일을 입력해 주세요" value="">
                        </div>
                    </div>
                    <div class="field field_3">
                        <label for="comments">Message:</label> <br>
                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="궁금하신 내용 남겨주세요..."></textarea>
                    </div>
                </fieldset>
                <div class="btn_area">
                    <button type="submit">제출</button>
                </div>
            </form>
        </div>
    </div>
    <!-- //content -->
    </section>
    <!-- //container -->