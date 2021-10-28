<div id="Content" class="page-contato">
    <div class="content_wrapper clearfix">
        <div class="sections_group" style="padding-top:150px; padding-bottom:30px;">
            <div class="entry-content">
                <div class="section one column">
                    <div class="section_wrapper">
                        <div class="column one">
                            <div class="title nao-enviado text-center" style="margin: 100px 0;">
                                <h3 class="pattern-title"><i class="fas fa-check"></i> <?= $lang == "pt" ? "Não enviado" : "Not sent" ?></h3>
                                <p><?= $lang == "pt" ? "Você será redirecionado de volta em alguns segundos, caso isso não ocorra," : "You will be redirected back in a few seconds, if not," ?>
                                    <a href="<?= sprintf('%s', $_SERVER['HTTP_REFERER']) ?>"><?= $lang == "pt" ? "clique aqui." : "Click here" ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>