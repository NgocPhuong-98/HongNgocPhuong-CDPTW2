<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-67">
    <div class="coming">
        <div class="container">
            <div class="clearfix">
                <div class="text-center">
                    <div class="text-title">
                        <h1 class="title">
                            Coming Soon
                        </h1>
                        <div class="text-white ">
                            <h4 class="cos">
                                Our website is under construction. We`ll be here soon with our new web site, get
                                notified at launch.
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-timer">
                                Finally ew are here
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>