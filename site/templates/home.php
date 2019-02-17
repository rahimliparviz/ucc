<?php namespace ProcessWire;

include('includes/css.php'); ?>

<body>
    <div class="main_bg index_" style="background-image:url('<?php echo $root?>image/bg_main.png')">
        <div class="logo">
            <a href="">
                <img src="<?php echo $root?>image/ucc_logo.png" alt="">
            </a>
        </div>

         <div class="lang_">
            <img src="<?php echo $root?>image/lang.png" alt="">
            <ul class="lang_ul" style="display: none;">
                <?php foreach($languages as $language) : ?>
                    <li><a href="<?=$page->localUrl($language)?>"><?=  strtoupper($language->title) ?></a></li>
                <?php endforeach;?>
            </ul>
        </div>


        <div class="menu_list">
        <?php foreach($homepage->children as $item):?>
              <div class="hover">
                <p>
                <?php echo $item->title ?>
                </p>
                <div class="more">
                    <div class="icon">
                        <img src="<?php echo $item->page_logo->url ?>" alt="">
                    </div>
                    <a href="<?php echo $item->url ?>"><?php  echo $page->read_more ?></a>
                </div>
            </div>
              <?php endforeach;?>
        </div>

		<?php include('includes/js.php'); ?>