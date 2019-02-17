<?php include(\ProcessWire\wire('files')->compile('includes/css.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
<?php include(\ProcessWire\wire('files')->compile('includes/header.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
<div class="bottom">
                <div class="desc">
                <?php echo $page->page_info ?>
                </div>
                <div class="page_icon">
                    <div class="item">
                        <img src="<?php echo $page->page_logo->url ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="partners_list page">
        <div class="container">
            <div class="row">
                <?php foreach($page->partners as $p) :?>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <a href="<?php echo $p->link?>" target="_blank">
                                <img src="<?php echo $p->partner_logo->url?>" alt="">
                            </a>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<?php include(\ProcessWire\wire('files')->compile('includes/footer.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
<?php include(\ProcessWire\wire('files')->compile('includes/js.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>