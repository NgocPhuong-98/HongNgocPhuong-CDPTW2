<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-39">
    <section class="sppb-section">
        <div class="sppb-colum-39">
            <div class="container">
                <div class="sppb-colum-8">
                    <div class="sppd-employment text-center">
                        <h5 class="emp-title">Emloyment</h5>
                        <div class="emp-content">
                            <h1 class="emp-text">Professional Skills</h1>
                            <div class="ce-title-line">&nbsp;</div>
                            <h6 class="ce-sub-text">
                                Praesent mattis commodo augue Aliquam ornare
                                hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet
                                ligula Etiam .
                            </h6>
                        </div>
                    </div>
                    <div class="kc"></div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="mg-bt ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-box text-box-right white">
                                            <div class="icon-plan-msmall right">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </div>
                                            <div class="text-boxs padding-right">
                                                <h5 class="text-box-title">
                                                    Graphic design
                                                </h5>
                                                <p>
                                                    <span class="text-primary">2013</span>
                                                    - Infomedia
                                                </p>
                                                <p class="paddtop1">
                                                    Lorem ipsum dolor ngồi amet consectetuer adipiscing elit Sus Aliquam
                                                    ornare hendrerit augue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" text-box text-box-left white">
                                            <div class="icon-plan-msmall left">
                                                <i class="fa fa-laptop" aria-hidden="true"></i>

                                            </div>
                                            <div class="text-boxs padding-left">
                                                <h5 class="text-box-title">
                                                    UI Design
                                                </h5>
                                                <p>
                                                    <span class="text-primary">2013</span>
                                                    - Infomedia
                                                </p>
                                                <p class="paddtop1">
                                                    Lorem ipsum dolor ngồi amet consectetuer adipiscing elit Sus Aliquam
                                                    ornare hendrerit augue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="padding-3"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-box text-box-right white">
                                            <div class="icon-plan-msmall right">
                                                <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="text-boxs padding-right">
                                                <h5 class="text-box-title">
                                                    Web developer
                                                </h5>
                                                <p>
                                                    <span class="text-primary">2013</span>
                                                    - Infomedia
                                                </p>
                                                <p class="paddtop1">
                                                    Lorem ipsum dolor ngồi amet consectetuer adipiscing elit Sus Aliquam
                                                    ornare hendrerit augue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" text-box text-box-left white">
                                            <div class="icon-plan-msmall left">
                                                <i class="fa fa-camera" aria-hidden="true"></i>

                                            </div>
                                            <div class="text-boxs padding-left">
                                                <h5 class="text-box-title">
                                                    Photographer
                                                </h5>
                                                <p>
                                                    <span class="text-primary">2013</span>
                                                    - Infomedia
                                                </p>
                                                <p class="paddtop1">
                                                    Lorem ipsum dolor ngồi amet consectetuer adipiscing elit Sus Aliquam
                                                    ornare hendrerit augue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mg-bt ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-box text-box-right white">
                                            <div class="icon-plan-msmall right">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </div>
                                            <div class="text-boxs padding-right">
                                                <h5 class="text-box-title">
                                                    Graphic design
                                                </h5>
                                                <p>
                                                    <span class="text-primary">2013</span>
                                                    - Infomedia
                                                </p>
                                                <p class="paddtop1">
                                                    Lorem ipsum dolor ngồi amet consectetuer adipiscing elit Sus
                                                    Aliquam
                                                    ornare hendrerit augue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" text-box text-box-left white">
                                            <div class="icon-plan-msmall left">
                                                <i class="fa fa-laptop" aria-hidden="true"></i>

                                            </div>
                                            <div class="text-boxs padding-left">
                                                <h5 class="text-box-title">
                                                    UI Design
                                                </h5>
                                                <p>
                                                    <span class="text-primary">2013</span>
                                                    - Infomedia
                                                </p>
                                                <p class="paddtop1">
                                                    Lorem ipsum dolor ngồi amet consectetuer adipiscing elit Sus
                                                    Aliquam
                                                    ornare hendrerit augue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="padding-3"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-box text-box-right white">
                                            <div class="icon-plan-msmall right">
                                                <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="text-boxs padding-right">
                                                <h5 class="text-box-title">
                                                    Web developer
                                                </h5>
                                                <p>
                                                    <span class="text-primary">2013</span>
                                                    - Infomedia
                                                </p>
                                                <p class="paddtop1">
                                                    Lorem ipsum dolor ngồi amet consectetuer adipiscing elit Sus
                                                    Aliquam
                                                    ornare hendrerit augue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" text-box text-box-left white">
                                            <div class="icon-plan-msmall left">
                                                <i class="fa fa-camera" aria-hidden="true"></i>

                                            </div>
                                            <div class="text-boxs padding-left">
                                                <h5 class="text-box-title">
                                                    Photographer
                                                </h5>
                                                <p>
                                                    <span class="text-primary">2013</span>
                                                    - Infomedia
                                                </p>
                                                <p class="paddtop1">
                                                    Lorem ipsum dolor ngồi amet consectetuer adipiscing elit Sus
                                                    Aliquam
                                                    ornare hendrerit augue.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                   
                </div>
            </div>
        </div>
    </section>
</div>