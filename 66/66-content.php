<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-66">
    <div class=" section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="column">
                        <div class="clearfix">
                            <div class="content">
                                <div class="img-box">
                                    <div class="img-text">
                                        <h1 class="title font-weight-7">About Our Journey</h1>
                                        <a class="link" hre="#">
                                            <span>Read more &nbsp;
                                                <i class="fa fa-angle-right " aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <img src="./images/66a.jpg" class="img img-fluid" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="column">
                        <div class="clearfix">
                            <div class="content">
                                <div class="img-box">
                                    <div class="img-text">
                                        <h1 class="title font-weight-7">About Our Success</h1>
                                        <a class="link" hre="#">
                                            <span>Read more &nbsp;
                                                <i class="fa fa-angle-right " aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <img src="./images/66b.jpg" class="img img-fluid" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="column">
                        <div class="sppb-addon text-center ">
                            <h2 class="sppb-addon-title">About Our Goals</h2>
                            <div class="sppb-addon-center">
                                <div class="ce-title-line">&nbsp;</div>
                                <br />
                                <h5>Nullam tellus diam volutpat laoreet</h5>
                                <br />
                                <p class="texts">mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In
                                    pulvinar lectus Curabitur.</p>

                            </div>
                            <div class="kc clearfix"></div>
                            <p class="btn btn-dark btn-medium btn-round uppercase"> <i
                                    class="fa fa-play-circle">&nbsp;</i> Order Now!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>