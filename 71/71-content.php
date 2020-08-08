<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-71">
    <div class="menu-boxed">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="menu-boxed-box">
                        <div class="column">
                            <div class="clearfix">
                                <div class="ce-feature-box-13">
                                    <div class=" icon-plain-large left icon">
                                        <i class="fa fa-tablet" aria-hidden="true"></i>
                                    </div>

                                    <h4 class="title">
                                        <span>Design Interface</span>
                                    </h4>
                                    <p class="small-text">Suspendisse et justo. Praesent mattis commodo augue Aliquam
                                        ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci.
                                    </p>
                                    <br />
                                    <br />
                                    <a class="btn" href="#">
                                        Read more
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">
                    <div class="menu-boxed-box">
                        <div class="column">
                            <div class="clearfix">
                                <div class="ce-feature-box-13">
                                    <div class=" icon-plain-large left icon">
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                    </div>

                                    <h4 class="title">
                                        <span>Development</span>
                                    </h4>
                                    <p class="small-text">Suspendisse et justo. Praesent mattis commodo augue Aliquam
                                        ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci.
                                    </p>
                                    <br />
                                    <br />
                                    <a class="btn" href="#">
                                        Read more
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">
                    <div class="menu-boxed-box">
                        <div class="column">
                            <div class="clearfix">
                                <div class="ce-feature-box-13">
                                    <div class=" icon-plain-large left icon">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </div>

                                    <h4 class="title">
                                        <span>testing tools</span>
                                    </h4>
                                    <p class="small-text">Suspendisse et justo. Praesent mattis commodo augue Aliquam
                                        ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci.
                                    </p>
                                    <br />
                                    <br />
                                    <a class="btn" href="#">
                                        Read more
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">
                    <div class="menu-boxed-box">
                        <div class="column">
                            <div class="clearfix">
                                <div class="ce-feature-box-13">
                                    <div class=" icon-plain-large left icon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>

                                    <h4 class="title">
                                        <span>Excellent Services</span>
                                    </h4>
                                    <p class="small-text">Suspendisse et justo. Praesent mattis commodo augue Aliquam
                                        ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci.
                                    </p>
                                    <br />
                                    <br />
                                    <a class="btn" href="#">
                                        Read more
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>