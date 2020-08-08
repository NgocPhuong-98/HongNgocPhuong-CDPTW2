<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-37">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="fot-column">
                        <div class="fot-column-addon">
                            <div class="clearfix">
                                <div class="fot-image">
                                    <img class="img-fluid" src="./images/37.jpg" alt="Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fot-column">
                        <div class="fot-column-addon">
                            <div class="clearfix">
                                <div class="fot-contact">
                                    <h5 class="title">
                                        Feel Free to Contact
                                        <span>Get In Touch</span>
                                    </h5>
                                    <div class="fot-contact-content">
                                        <form class="fot-contact-form">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" name="name" class="from-control"
                                                        placeholder="Name" required="required">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="email" name="email" class="from-control"
                                                        placeholder="Email" required="required">

                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="text" name="subject" class="from-control"
                                                        placeholder="Subject" required="required">


                                                </div>
                                                <div class="form-group col-md-12">
                                                    <textarea name="message" class="from-control" rows="5"
                                                        placeholder="Message" required="required">
                                                        </textarea>
                                                </div>

                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn">
                                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                    Submit Message
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>