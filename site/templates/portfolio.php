<?php include('includes/css.php'); ?>
<?php include('includes/header.php'); ?>
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

    <section class="portfolio_page page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    
                    
                    <?php 

                        for($i=0;$i<count($page->projects);$i++){

                            if($page->projects[$i] && count($page->children) == $i){
                                $p = new Page();
                                $p->setOutputFormatting(false);
                                $p->template = 'inner-portfolio';
                                $p->title = $page->projects->eq($i)->project_name;
                                $p->parent = $page;
                                $p->index = $i;
                                $p->project_title=$page->projects->eq($i)->project_title;
                                $p->project_info=$page->projects->eq($i)->project_info;

                                // $p->album_order = $i;
                                // $p->album_back_img= $page->event_albums[$i]->page_background_img->url;
                                // $p->album_name = $page->event_albums[$i]->album_name;
                                // $p->title = $page->event_albums[$i]->page_title;
                        
                                $p->save();
                            }

                        }
                            
                            // $p = new Page();
                            // $p->setOutputFormatting(false);
                            // $p->template = 'inner-portfolio';                         
                            // $p->parent = $page;
                            // $p->title = $page->title;
                            // $p->page_info="rrrrrrrrrrrrr";

                            // $p->page_logo = $page->page_logo->url;
                            // $p->page_info=$page->page_info;
                         // $p->page_img=$page->page_img->url;
                            // $p->images=$pr->images;
                            // $p->project_title= $pr->project_title;
                            // $p->project_info=$pr->project_info;
                      
                            // $p->save();
                            
                            ?>



                   <?php foreach($page->projects  as $k => $pr) :?>
                   <div class="item">
                        <div class="relative">
                            <div class="photo" style="background-image:url(' <?php echo $pr->images->first()->url?>')"></div>
                            <div class="photo_absolute" style="background-image:url('<?php echo $pr->images->eq(1)->url?>')"></div>
                        </div>
                        <div class="title">
                            <h1>
                            <?php echo $pr->project_title?>
                            </h1>
                        </div>
                        <div class="desc">
                         
                            <?php echo $pr->project_info?>
                          

                            <a href="<?php echo $page->children->eq($k)->url ?>">
                            <?php echo $page->button?>
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                   <?php endforeach ;?>
                </div>
            </div>
        </div>
    </section>






<?php include('includes/footer.php'); ?>
<?php include('includes/js.php'); ?>