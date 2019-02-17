<?php include('includes/css.php'); ?>
<div class="main_bg" style="background-image:url('<?php echo $pages->get('template=portfolio')->page_img->url ?>')">
        <div class="flex_">
            <div class="top">
                <div class="back_home text-center">
                    <a href="<?php echo $homepage->url ?>">
                        <img src="<?php echo $root?>image/ucc_logo.png" alt="">
                    </a>
                </div>
                <div class="page_title">
                    <h1><?php echo $page->title ?></h1>
                </div>
            </div>
                <div class="bottom">
                <div class="desc">
                <?php echo $pages->get('template=portfolio')->page_info ?>
                </div>
                <div class="page_icon">
                    <div class="item">
                        <img src="<?php echo $pages->get('template=portfolio')->page_logo->url ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="portfolio_page page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="item">
                        <div class="relative">
                            <div class="photo" style="background-image:url('<?php echo $pages->get('template=portfolio')->projects->eq($page->index)->images->first()->url?>')"></div>
                            <div class="photo_absolute" style="background-image:url('<?php echo $pages->get('template=portfolio')->projects->eq($page->index)->images->eq(1)->url?>')"></div>
                        </div>
                        <div class="title">
                            <h1>
                       
                            <?php echo $page->project_title?>
                            </h1>
                        </div>
                        <div class="desc full_">
                           
                            <?php echo $page->project_info?>
                            
                        </div>
                    </div>
                    <div id="gallery_sld" class="owl-carousel">
                        <?php foreach($pages->get('template=portfolio')->projects->eq($page->index)->images as $i) :?>
                        <div class="item_">
                            <img src="<?php echo $i->url?>" alt="">
                        </div>
                        <?php endforeach;?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include('includes/footer.php'); ?>
<?php include('includes/js.php'); ?>