<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-38">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box-38">
                                <div class="item">
                                    <div class="img-box">
                                        <img src="./images/38a.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <div class="img-text">
                                        <span>
                                            Digital Agency Studio &nbsp;
                                            <i class="fa fa-long-arrow-right text-primary" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-38">
                                <div class="item">
                                    <div class="img-box">
                                        <img src="./images/38b.jpg" class="img-fluid" alt="" />
                                    </div>
                                    <div class="img-text">
                                        <span>
                                            Digital Agency Studio &nbsp;
                                            <i class="fa fa-long-arrow-right text-primary" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text-38">
                    <div class=" clearfix">
                        <div class="text-box text-box-left ">
                            <div class="icon-plan-msmall left">
                                <i class="fa fa-camera" aria-hidden="true"></i>
                            </div>
                            <div class="text-boxs padding-left">
                                <h5 class="text-box-title">
                                    Who We Are
                                </h5>
                                <p>
                                    Vestibulum ante ipsum primis sit amet justo elit faucibus orci luctus ultrices
                                    posuere .
                                </p>
                                <br />
                                <div class="box-btn ">
                                    <span>Read more &nbsp;
                                        <i class="fa fa-long-arrow-left text-primary" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="khoangcach">
                    <div></div>
                </div>
                <div class="text-38">
                    <div class=" clearfix">
                        <div class="text-box text-box-left ">
                            <div class="icon-plan-msmall left">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                            </div>
                            <div class="text-boxs padding-left">
                                <h5 class="text-box-title">
                                    Company Success
                                </h5>
                                <p>
                                    Vestibulum ante ipsum primis sit amet justo elit faucibus orci luctus ultrices
                                    posuere .
                                </p>
                                <br />
                                <div class="box-btn ">
                                    <span>Read more &nbsp;
                                        <i class="fa fa-long-arrow-left text-primary" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>