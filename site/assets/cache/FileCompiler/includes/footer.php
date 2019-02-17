<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <div class="title">
                            <h1>
                                Urban City Construction LLC
                            </h1>
                        </div>
                        <div class="social">
                            <ul>
                            <?php foreach($pages->get('template=contact')->socials as $s) :?>
                                 <li>
                                    <a href=" <?php echo $s->social_value ?>" targer="_blank">
                                        <i class="fa fa-<?php echo $s->icon?>" aria-hidden="true"></i>
                                    </a>
                                </li>
                            <?php endforeach ; ?>
                               
                            </ul>
                        </div>
                        <div class="sharks_logo text-center">
                            <a href="">
                                <img src="<?php echo $root?>image/sharks_logo.png" alt="">
                            </a>
                        </div>
                        <div class="copy text-center">
                            <p>
                                © Urban Construction LLC <?php echo date("Y"); ?>. All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>