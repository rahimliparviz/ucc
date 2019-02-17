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
<?php include(\ProcessWire\wire('files')->compile('includes/footer.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
<?php include(\ProcessWire\wire('files')->compile('includes/js.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>