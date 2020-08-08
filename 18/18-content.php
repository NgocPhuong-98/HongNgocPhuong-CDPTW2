<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-18">
    <section class="sppb-section">
        <div class="sppb-colum text-center container">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="sppb-addon col-md-8">
                    <h2 class="sppb-addon-title">Get Unlimited Features with our multipurpose theme</h2>
                    <div class="sppb-addon-center">
                        <div class="ce-title-line">&nbsp;</div>
                        <br>
                        <p class="texts">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo
                            Praesent mattis commodo
                            augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus.</p>
                        <br>
                        <br>
                        <p class="btn btn-dark btn-medium btn-round uppercase"> <i class="fa fa-play-circle">&nbsp;</i>
                            Read more</p>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
</div>