<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-68">
    <div class="Footer_68 section">
    <div class="overlay"></div>
        <div class="container">
            <div class="column">
                <!-- <div class="clearfix"> -->
                <div class="text-left ">
                    <h5 class="title">Get Awesome Features and many more features</h5>
                    <div class="text-content">
                        <h2>
                            We are offring awesome Features and
                            <br />
                            many more Beautiful Pages
                        </h2>
                        <div class="ce-title-line">&nbsp;</div>
                    </div>
                </div>
                <!-- </div> -->
                <div class=" space clearfix">
                </div>

                <div class="clearfix">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item-content text-center ">
                                    <div class="item-box">
                                        <div class="item-icon">
                                            <i class="fa fa-tablet " aria-hidden="true"></i>
                                        </div>
                                        <h5 class="item-title  text-white">Fully Responsive</h5>
                                        <p class="text-white opacity-6">Praesent mattis commodo augue Aliquam
                                            ornare
                                            hendrerit augue Cras tellus In pulvinar lectus a est.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-content text-center ">
                                    <div class="item-box">
                                        <div class="item-icon">
                                            <i class="fa fa-camera " aria-hidden="true"></i>
                                        </div>
                                        <h5 class="item-title  text-white">Classic Styles</h5>
                                        <p class="text-white opacity-6">Praesent mattis commodo augue Aliquam
                                            ornare
                                            hendrerit augue Cras tellus In pulvinar lectus a est.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-content text-center ">
                                    <div class="item-box">
                                        <div class="item-icon">
                                            <i class="fa fa-weixin" aria-hidden="true"></i>
                                        </div>
                                        <h5 class="item-title  text-white">Classic Styles</h5>
                                        <p class="text-white opacity-6">Praesent mattis commodo augue Aliquam
                                            ornare
                                            hendrerit augue Cras tellus In pulvinar lectus a est.</p>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>