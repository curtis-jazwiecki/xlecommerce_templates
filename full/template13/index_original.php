<!DOCTYPE HTML><html><head>
 <link href="//fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet" type="text/css"  media="all"  />
<link href="//fonts.googleapis.com/css?family=Unica+One:400,700" rel="stylesheet" type="text/css"  media="all"/>
<link rel="stylesheet" type="text/css" href="includes/sts_templates/full/template13/css/bootstrap-new.min.css"/>
<link rel="stylesheet" type="text/css" href="includes/sts_templates/full/template13/css/bootstrap-new.css" />
$headertags
<meta name="viewport" content="width=device-width, initial-scale=1">
$template2_stylesheet1
<script type="text/javascript">
 var jqqqnoconf = jQuery.noConflict();
// fix jQuery 1.8.0 and jQuery UI 1.8.22 bug with dialog buttons; http://bugs.jqueryui.com/ticket/8484
 if (jqqqnoconf.attrFn) {
   jqqqnoconf.attrFn.text = true;
 }
</script>

<script type="text/javascript">
 var tba = jQuery.noConflict();
 tba(document).ready(function () {
//SKU BOF
tba('.bestsellers').html('<i class="fa fa-chevron-circle-right"></i>');
tba('.category_cell table').addClass('categoryListBoxContents subproduct_name onlycat');
tba('body.password_forgotten').find('.pageHeading').eq(0).wrapInner('<h1></h1>');  
tba('body.shopping_cart .productListing-tr').addClass('tablecontent').removeClass('productListing-odd productListing-even productListing-tr');
//tba('body.checkout').find('h2.margin').addClass('acc_trigger active');
//SKU EOF
var scroll_pos = 0;
tba(document).scroll(function () {
//alert("hello");
scroll_pos = tba(this).scrollTop();
if (scroll_pos > 25) {
tba("#mj-topbar").css('background-color', '#008080');
tba("#mj-topbar").css('background-image', 'url("/includes/sts_templates/full/template13/ext/images/topbar-bg.png") repeat scroll 0 0 transparent');
tba("#mj-topbar a").css('color', '#FFFFFF');
tba("#mj-topbar i").css('color', '#FFFFFF');
 tba("#mj-topbar div").css('color', '#FFFFFF');
 //tba("#mj-topbar li").css('background', 'url("images/topbar-arrow-white.png") no-repeat scroll right center transparent');
 tba("#mj-topbar li:last-child").css('background', 'none');

  } else  {

  tba("#mj-topbar").css('background', 'url("/includes/sts_templates/full/template13/ext/images/topbar-bg.png") repeat scroll 0 0 transparent');
  tba("#mj-topbar a").css('color', '#008080');
  tba("#mj-topbar i").css('color', '#008080');
  tba("#mj-topbar div").css('color', '#008080');
 //tba("#mj-topbar li").css('background', 'url("images/icons/<?php echo $_SESSION['themecolor_com']."-arrow.png" ?>") no-repeat scroll right center transparent');
 tba("#mj-topbar li:last-child").css('background', 'none');
 } });  });</script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' id='camera-css'  href='includes/sts_templates/full/template13/camera/css/camera.css' type='text/css' media='all'>

<style>

body { margin: 0; padding: 0; }

a { color: #004000; }

a:hover { text-decoration: none; }

#back_to_camera {
clear: both;
display: block;
height: 80px;
line-height: 40px;
padding: 20px; }

.fluid_container { margin: 0 auto; /*max-width: 1000px;*/ width: 100%;}
</style>

<script type='text/javascript' src='includes/sts_templates/full/template13/camera/scripts/jquery.min.js'></script>
<script type='text/javascript' src='includes/sts_templates/full/template13/camera/scripts/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='includes/sts_templates/full/template13/camera/scripts/jquery.easing.1.3.js'></script>

<?php if(basename($_SERVER['PHP_SELF']) == 'index.php') { ?>

<script type='text/javascript' src='includes/sts_templates/full/template13/camera/scripts/camera.min.js'></script>

<script>
 jQuery(function(){
 jQuery('#camera_wrap_1').camera({
 thumbnails: false,
 	pagination: false
 });


 jQuery('#camera_wrap_2').camera({
 height: '400px',
 loader: 'bar',
 pagination: false,
 thumbnails: false

			}); }); </script>

<?php } ?>
$stylesheet
$google_analytics
</head>

<body class="$script">
<div id="mj-container"> $top_bar
  $header  $navigation_menu

  <?php if($_SERVER['PHP_SELF'] != "/index.php") { ?>  <div>&nbsp;</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <div>&nbsp;</div>  <?php } ?>

  <!--Banner_slider-->
 <?php if($_SERVER['PHP_SELF'] == "/index.php") { ?>

<div class="container-fluid" id="mj-featured1">
<table  border="0" cellspacing="0" cellpadding="0" style="background-color:#fff;width:100%"> <tr>
<td valign="center" align="center"><div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
 <div data-src="includes/sts_templates/full/template13/camera/images/slides/slide1.png"> </div>
<div  data-src="includes/sts_templates/full/template13/camera/images/slides/slide2.png"> </div>
 <div data-src="includes/sts_templates/full/template13/camera/images/slides/slide3.png"> </div>
</div></td></tr></table></div>
<!--End of slider-->

 <div class="container" id="productsInfoBox"><!--top top product box--><!--content box row 1--><div class="row productBox">
 <?php
 foreach($top_3_home_page_category as $home_page_category){ ?>
 <div class="col-md-4 top_product_hover">
 <div class="panel-box panel-default-box"> <a href="<?php echo $home_page_category['category_link']; ?>" class="">
 <div class="panel-heading">
<h2><?php echo $home_page_category['category_name']; ?></h2>
 <p>View all</p>
 </div>
 <div class="panel-body-category" align="center">

<?php
if($home_page_category['category_image'] != ''){ 
//echo tep_image(DIR_WS_IMAGES . $home_page_category['category_image'], $home_page_category['category_name'], '360','380');
 echo $home_page_category['category_image'];
 //echo tep_medium_image( str_replace("/small/", "/medium/",$home_page_category['category_image']), $home_page_category['category_name'], 300, 320);
  }else { ?>
 <img class="img-responsive img-portfolio img-hover" src="/includes/sts_templates/full/template13/images/products.png" alt="">
<?php } ?>

 </div></a></div></div><?php } ?></div>
 <!--End top product box-->

  <div>&nbsp;&nbsp;&nbsp;&nbsp;</div> <div>&nbsp;&nbsp;&nbsp;&nbsp;</div><!--End of content box row 1-->

    <div class="row product_categoriesBox"> <!--products_row_1--> 

   <?php echo HOME_PAGE_FEATURED_PRODUCT; ?>
<?php
foreach($get_featured_product as $featured_product){ ?>
<div class="col-md-3 product_hover">
<div class="panel_default_featured_product"> <a href="<?php echo $featured_product['featured_link']; ?>" class="">
 <div class="panel-body-category-image">

 <?php
if($featured_product['featured_image'] != ''){ 
echo $featured_product['featured_image'];
 }else { ?>
<img class="img-responsive img-portfolio img-hover" src="/includes/sts_templates/full/template13/images/products.png" alt="">
 <?php } ?>
 </div>
 <div class="panel-heading">
 <div class="product_name"><?php echo $featured_product['featured_name']; ?></div>
<div class="product_price"><?php echo $featured_product['featured_price']; ?></div>
</div>
<div class="Quik_view"> <span class="Quik_view_btn ">View</span> </div>
</a> </div></div>
 <?php } ?> <!--End products_row_1-->  </div>

 <div>&nbsp;&nbsp; &nbsp;&nbsp;</div>
<div>&nbsp;&nbsp; &nbsp;&nbsp;</div>

 <div class="row product_categoriesBox"> 
 <!--products_row_3--> 
 <?php echo HOME_PAGE_FEATURED_MANUFACTURER; ?>
 <?php
foreach($get_featured_manufacturer_products as $featured_manufacturer_products){
 ?>
<div class="col-md-3 product_hover">
<div class="panel-default_featured_manufacturer_products"> <a href="<?php echo $featured_manufacturer_products['featured_link']; ?>" class="">
 <div class="panel-body_featured_image">
 <?php
 if($featured_manufacturer_products['featured_image'] != ''){ 
echo $featured_manufacturer_products['featured_image'];
  }else { ?>
 <img class="img-responsive img-portfolio img-hover" src="/includes/sts_templates/full/template13/images/products.png"  alt="">
 <?php } ?>
</div>
<div class="panel-heading">
<div class="product_name"><?php echo $featured_manufacturer_products['featured_name']; ?></div>
 <div class="product_price"><?php echo $featured_manufacturer_products['featured_price']; ?></div>
</div>
<div class="Quik_view"> <span class="Quik_view_btn ">View</span> </div>
 </a> </div></div>

   <?php } ?><!--End products_row_4-->  </div><!--End of container--></div><!--content box row 2-->  <!--End of content box row 1-->  <!--content box row 3--> <!--End of content box row 1--> 

<?php }else { ?>
<div class="container" id="productsInfoBox">
<div class="row product_categoriesBox_default">  
<?php
if($_SERVER['PHP_SELF'] == "/shop.php" || $_SERVER['PHP_SELF'] == "/advanced_search_result.php"){?>
<?php
if(empty($categorybox) && empty($search_filterbox)){?>
<div class="col-md-12">
<?php } else { ?>
 <div class="col-md-9 pull-right">
<?php } ?>
<?php } ?> 	

    
 $content
<?php
if($_SERVER['PHP_SELF'] == "/shop.php" || $_SERVER['PHP_SELF'] == "/advanced_search_result.php"){?>
 </div>
<?php } ?>

<?php
if(!empty($categorybox) || !empty($search_filterbox)){?>
<div class="col-md-3 pull-left gategories_responsive_align">
$categorybox
&nbsp;
&nbsp;
$search_filterbox
</div>
<?php } ?>
</div></div>

<?php } ?> 
</div>
<div id="mj-footer"> <!-- mj-footer starts -->
 <div class="mj-subcontainer"> <!-- mj-subcontainer starts -->  $footer_box_01 $footer_box_02  $footer_box_03 $footer_box_04 </div></div>

$footer_copyright
</body></html>