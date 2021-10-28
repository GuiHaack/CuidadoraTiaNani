<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>

<div id="Content" class="page-contato">
    <div class="content_wrapper clearfix">
        <div class="sections_group" style="padding-top:200px; padding-bottom:200px;">
            <div class="entry-content">
                <div class="section one column">
                    <div class="section_wrapper">
                        <div class="column one">
                            <div class="title enviado text-center" style="margin: 100px 0;">
                                <h3 class="pattern-title"><i class="fas fa-check"></i> Enviado</h3>
                                <p>Você será redirecionado de volta em alguns segundos, caso isso não ocorra,
                                    <a href="<?= sprintf('%s', $_SERVER['HTTP_REFERER']) ?>"> clique aqui.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>