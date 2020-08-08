<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-22">
    <div class="kc">
    </div>
    <div class="container">
        <div class="sppb-colum-8">
            <div class="sppd-employment text-center">
                <h5 class="emp-title">Our Services</h5>
                <div class="emp-content">
                    <h1 class="emp-text">Our Excellent Services</h1>
                    <div class="ce-title-line">&nbsp;</div>
                    <h6 class="ce-sub-text">
                        Praesent mattis commodo augue Aliquam ornare
                        hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula
                        Etiam .
                    </h6>
                </div>
            </div>
            <div class="kc"></div>
        </div>
        <div class="kc"></div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="box-center clearfix">
                    <div class="text-center">
                        <div class="box-text">
                            <div class="box-text-icon">
                                <span>
                                    <i class="fa fa-list-alt"></i>
                                </span>
                            </div>
                            <br>
                            <h5 class="box-text-title font-weight-5">Responsive </h5>

                            <p class="box-text-conter">
                                Praesent mattis sit commodo augue Aliquam ornare hendrerit augue Cras tellus In
                                pulvinar.
                            </p>
                        </div>
                        <div class="box-btn ">
                            <span>Read more &nbsp;
                                <i class="fa fa-long-arrow-right text-primary" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="box-center clearfix">
                    <div class="text-center">
                        <div class="box-text">
                            <div class="box-text-icon">
                                <span>
                                    <i class="fa fa-list-alt"></i>
                                </span>
                            </div>
                            <br>
                            <h5 class="box-text-title font-weight-5">Clean Code</h5>
                            <p class="box-text-conter">
                                Praesent mattis sit commodo augue Aliquam ornare hendrerit augue Cras tellus In
                                pulvinar.
                            </p>
                        </div>
                        <div class="box-btn ">
                            <span>Read more &nbsp;
                                <i class="fa fa-long-arrow-right text-primary" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="box-center clearfix">
                    <div class="text-center">
                        <div class="box-text">
                            <div class="box-text-icon">
                                <span>
                                    <i class="fa fa-bar-chart"></i>
                                </span>
                            </div>
                            <br>
                            <h5 class="box-text-title font-weight-5">Graphic Design</h5>
                            <p class="box-text-conter">
                                Praesent mattis sit commodo augue Aliquam ornare hendrerit augue Cras tellus In
                                pulvinar.
                            </p>
                        </div>
                        <div class="box-btn ">
                            <span>Read more &nbsp;
                                <i class="fa fa-long-arrow-right text-primary" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="box-center clearfix">
                    <div class="text-center">
                        <div class="box-text">
                            <div class="box-text-icon">
                                <span>
                                    <i class="fa fa-wpexplorer"></i>
                                </span>
                            </div>
                            <br>
                            <h5 class="box-text-title font-weight-5">Support</h5>
                            <p class="box-text-conter">
                                Praesent mattis sit commodo augue Aliquam ornare hendrerit augue Cras tellus In
                                pulvinar.
                            </p>
                        </div>
                        <div class="box-btn ">
                            <span>Read more &nbsp;
                                <i class="fa fa-long-arrow-right text-primary" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>