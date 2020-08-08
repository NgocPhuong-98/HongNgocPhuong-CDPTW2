<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-21">
    <section class="sppb-section">
        <div class="sppb-colum-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="sppd-content text-left">
                            <div class="sppd-title">
                                <h1 class="title">
                                    Our best popular Services for <br />
                                    Your successful business
                                </h1>
                                <div class="ce-title-line">&nbsp;</div>
                            </div>

                            <div class="sppd-text">
                                <h6 class="text-a">
                                    Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras <br />
                                    tellus In pulvinar lectus a est Curabitur sitamet justo mattis.
                                </h6>
                                <p class="text-b">
                                    Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In
                                    pulvinar<br />
                                    lectus a est Curabitur eget orci Cras laoreet ligula Etiam sit amet dolor Vestibulum
                                    ante.
                                </p>
                            </div>
                            <div class="sppd-clearfix">
                                <div class="sppd-progress">
                                    <div class="progress-label">JAVASCRIPT <span>80%</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bar1 ">
                                        </div>

                                    </div>
                                </div>
                                <div class="sppd-progress">
                                    <div class="progress-label">PHOTOSHOP <span>90%</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bar2">
                                        </div>

                                    </div>
                                </div>
                                <div class="sppd-progress">
                                    <div class="progress-label">LOGO DESIGN<span>70%</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bar3">
                                        </div>

                                    </div>
                                </div>
                                <div class="sppd-progress">
                                    <div class="progress-label">PHOTOGRAPHY<span>75%</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bar4">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>