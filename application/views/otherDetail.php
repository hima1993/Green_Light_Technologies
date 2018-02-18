<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Less styles -->
    <!-- Other Less css file //different less files has different color scheam
     <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
     -->
    <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
    <script src="themes/js/less.js" type="text/javascript"></script> -->

    <!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="<?php echo base_url();?>template/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?php echo base_url();?>template/themes/css/base.css" rel="stylesheet" media="screen"/>
    <!-- Bootstrap style responsive -->
    <link href="<?php echo base_url();?>template/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url();?>template/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="<?php echo base_url();?>template/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url();?>template/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>template/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>template/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>template/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>template/themes/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>
</head>
<body>
<div id="header">
    <div class="container">
        <div id="welcomeLine" class="row">
            <div class="span6">Welcome!<strong> User</strong></div>
            <div class="span6">
                <div class="pull-right">
                    <a href="product_summary.html"><span class="">Fr</span></a>
                    <a href="product_summary.html"><span class="">Es</span></a>
                    <span class="btn btn-mini">En</span>
                    <a href="product_summary.html"><span>&pound;</span></a>
                    <span class="btn btn-mini">$155.00</span>
                    <a href="product_summary.html"><span class="">$</span></a>
                    <a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a>
                </div>
            </div>
        </div>




        <div class="span9">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                <li><a href="OurItems.html">OurItems</a> <span class="divider">/</span></li>
                <li class="active">product Details</li>
            </ul>
            <div class="row">
                <div id="gallery" class="span3">
                    <div class="span9">
                        <ul id="productDetail" class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
                            <li><a href="#profile" data-toggle="tab">Related Products</a></li>
                        </ul>
                        <!--<div id="myTabContent" class="tab-content">
                          <div class="tab-pane fade active in" id="home">
                          <h4>Product Information</h4>
                            <table class="table table-bordered">
                            <tbody>
                            <tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Brand: </td><td class="techSpecTD2">Fujifilm</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Model:</td><td class="techSpecTD2">FinePix S2950HD</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Released on:</td><td class="techSpecTD2"> 2011-01-28</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Dimensions:</td><td class="techSpecTD2"> 5.50" h x 5.50" w x 2.00" l, .75 pounds</td></tr>
                            <tr class="techSpecRow"><td class="techSpecTD1">Display size:</td><td class="techSpecTD2">3</td></tr>
                            </tbody>
                            </table>
                            -->
                        <h5>Other Items</h5>
                        <p>
                            Correct installation of electrical wiring in your home is essential to ensuring both safety and longevity for your investment.No matter the size or style of your home, we have the experience necessary to ensure your project is up to code and complete with the utmost integrity.

                            Our electrical design and wiring services include:
                        <p>New Homes</p>
                        <p>Remodels</p>
                        <p>Energy Management</p>
                        <p>Indoor & Outdoor Lighting<p>
                        <p>Garage Door Openers<p>
                        <p>Ceiling Fans<p>
                        <p>Electric Heat<p>
                        <p>Lift Stations</p>
                        <p>Tile Heat</p>
                        <p>Air Conditioners</p>
                        <p>Hot Tubs</p>

                        Contact us,
                        <p>Green Light Technologies</p>
                        <p>37/1,Padukka Rd</p>
                        <p>Godagama,Meegoda</p>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <div id="myTab" class="pull-right">
                            <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
                            <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
                        </div>
                        <br class="clr"/>
                        <hr class="soft"/>
                        <div class="tab-content">
                            <div class="tab-pane" id="listView">
                                <div class="row">
                                    <div class="span2">
                                        <img src="themes/images/products/4.jpg" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>New | Available</h3>
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>
                                            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                                            that is why our goods are so popular..
                                        </p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Adds product to compair
                                            </label><br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="soft"/>
                                <div class="row">
                                    <div class="span2">
                                        <img src="themes/images/products/5.jpg" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>New | Available</h3>
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>
                                            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                                            that is why our goods are so popular..
                                        </p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Adds product to compair
                                            </label><br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="soft"/>
                                <div class="row">
                                    <div class="span2">
                                        <img src="themes/images/products/6.jpg" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>New | Available</h3>
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>
                                            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                                            that is why our goods are so popular..
                                        </p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Adds product to compair
                                            </label><br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="soft"/>
                                <div class="row">
                                    <div class="span2">
                                        <img src="themes/images/products/7.jpg" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>New | Available</h3>
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>
                                            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                                            that is why our goods are so popular..
                                        </p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Adds product to compair
                                            </label><br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <hr class="soft"/>
                                <div class="row">
                                    <div class="span2">
                                        <img src="themes/images/products/8.jpg" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>New | Available</h3>
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>
                                            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                                            that is why our goods are so popular..
                                        </p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Adds product to compair
                                            </label><br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="soft"/>
                                <div class="row">
                                    <div class="span2">
                                        <img src="themes/images/products/9.jpg" alt=""/>
                                    </div>
                                    <div class="span4">
                                        <h3>New | Available</h3>
                                        <hr class="soft"/>
                                        <h5>Product Name </h5>
                                        <p>
                                            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
                                            that is why our goods are so popular..
                                        </p>
                                        <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
                                        <br class="clr"/>
                                    </div>
                                    <div class="span3 alignR">
                                        <form class="form-horizontal qtyFrm">
                                            <h3> $222.00</h3>
                                            <label class="checkbox">
                                                <input type="checkbox">  Adds product to compair
                                            </label><br/>
                                            <div class="btn-group">
                                                <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                                                <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr class="soft"/>
                            </div>
                            <div class="tab-pane active" id="blockView">
                                <ul class="thumbnails">
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="product_details.html"><img src="themes/images/products/10.jpg" alt=""/></a>
                                            <div class="caption">
                                                <h5>Manicure &amp; Pedicure</h5>
                                                <p>
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="product_details.html"><img src="themes/images/products/11.jpg" alt=""/></a>
                                            <div class="caption">
                                                <h5>Manicure &amp; Pedicure</h5>
                                                <p>
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="product_details.html"><img src="themes/images/products/12.jpg" alt=""/></a>
                                            <div class="caption">
                                                <h5>Manicure &amp; Pedicure</h5>
                                                <p>
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="product_details.html"><img src="themes/images/products/13.jpg" alt=""/></a>
                                            <div class="caption">
                                                <h5>Manicure &amp; Pedicure</h5>
                                                <p>
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="product_details.html"><img src="themes/images/products/1.jpg" alt=""/></a>
                                            <div class="caption">
                                                <h5>Manicure &amp; Pedicure</h5>
                                                <p>
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <a href="product_details.html"><img src="themes/images/products/2.jpg" alt=""/></a>
                                            <div class="caption">
                                                <h5>Manicure &amp; Pedicure</h5>
                                                <p>
                                                    Lorem Ipsum is simply dummy text.
                                                </p>
                                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <hr class="soft"/>
                            </div>
                        </div>
                        <br class="clr">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> </div>
</div>
<!-- MainBody End =============================
 Footer ================================================================== -->
<div  id="footerSection">
    <div class="container">
        <div class="row">
            <div class="span3">
                <h5>ACCOUNT</h5>
                <a href="login.html">YOUR ACCOUNT</a>
                <a href="login.html">PERSONAL INFORMATION</a>
                <a href="login.html">ADDRESSES</a>
                <a href="login.html">DISCOUNT</a>
                <a href="login.html">ORDER HISTORY</a>
            </div>
            <div class="span3">
                <h5>INFORMATION</h5>
                <a href="contact.html">CONTACT</a>
                <a href="register.html">REGISTRATION</a>
                <a href="legal_notice.html">LEGAL NOTICE</a>
                <a href="tac.html">TERMS AND CONDITIONS</a>
                <a href="faq.html">FAQ</a>
            </div>
            <div class="span3">
                <h5>OUR OFFERS</h5>
                <a href="#">NEW PRODUCTS</a>
                <a href="#">TOP SELLERS</a>
                <a href="special_offer.html">SPECIAL OFFERS</a>
                <a href="#">MANUFACTURERS</a>
                <a href="#">SUPPLIERS</a>
            </div>
            <div id="socialMedia" class="span3 pull-right">
                <h5>SOCIAL MEDIA </h5>
                <a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
                <a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
                <a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
            </div>
        </div>
        <p class="pull-right">&copy; Bootshop</p>
    </div><!-- Container End -->
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="themes/js/jquery.js" type="text/javascript"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/google-code-prettify/prettify.js"></script>

<script src="themes/js/bootshop.js"></script>
<script src="themes/js/jquery.lightbox-0.5.js"></script>

<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
    <link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />

</div>
<span id="themesBtn"></span>



</body>
</html>