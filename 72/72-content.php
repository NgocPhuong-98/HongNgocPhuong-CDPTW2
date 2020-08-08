<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-72">
    <div class="menu-light">
        <div class="container">
            <div class="clearfix">
                <div class="text-center">
                    <h2 class="title">
                        Purchase our Template and get unlimited Features
                    </h2>
                    <p class="btn">
                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                        Contact Us
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>