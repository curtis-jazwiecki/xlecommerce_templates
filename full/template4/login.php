<!DOCTYPE HTML>

<html>

    <head><link rel="icon" type="image/png" href="/includes/sts_templates/full/template4/images/favicon.png" />

$headertags
        <meta name="viewport" content="width=device-width, initial-scale=1">

        $template18_stylesheet1

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

                        tba("#mj-topbar").css('background-color', '#252525');  tba("#mj-topbar").css('background', '-moz-linear-gradient(top,  #252525 25%, #000000 96%, #000000 97%)');               tba("#mj-topbar").css('background', '-webkit-linear-gradient(top,  #252525 25%,#000000 96%,#000000 97%);            tba("#mj-topbar").css('background', 'linear-gradient(to bottom,  #252525 25%,#000000 96%,#000000 97%); 


                        tba("#mj-topbar a").css('color', '#FFFFFF');

                        tba("#mj-topbar i").css('color', '#FFFFFF');

                        tba("#mj-topbar div").css('color', '#FFFFFF');

                        //tba("#mj-topbar li").css('background', 'url("images/topbar-arrow-white.png") no-repeat scroll right center transparent');

                        tba("#mj-topbar li:last-child").css('background', 'none');

                    }

                    else

                    {
  tba("#mj-topbar").css('background-color', '#252525');  tba("#mj-topbar").css('background', '-moz-linear-gradient(top,  #252525 25%, #000000 96%, #000000 97%)');               tba("#mj-topbar").css('background', '-webkit-linear-gradient(top,  #252525 25%,#000000 96%,#000000 97%);            tba("#mj-topbar").css('background', 'linear-gradient(to bottom,  #252525 25%,#000000 96%,#000000 97%); 

                        tba("#mj-topbar a").css('color', '#62707c');

                        tba("#mj-topbar i").css('color', '#62707c');

                        tba("#mj-topbar div").css('color', '#62707c');

                        //tba("#mj-topbar li").css('background', 'url("images/icons/<?php echo $_SESSION['themecolor_com']."-arrow.png" ?>") no-repeat scroll right center transparent');

                        tba("#mj-topbar li:last-child").css('background', 'none');

                    }

                });

            });

        </script>

            $stylesheet

    </head>

    <body class="$script">

        <div id="mj-container">
$top_bar
$header

<br><br></td></tr></table>


            <div id="mj-maincontent">

                <div class="mj-subcontainer">

                 <div id="mj-contentarea" class="mj-grid64 ">

                        <!--sku start-->

                    <div   style=" padding:15px; 	background-color:#ffffff;">$content    </div> 



                        <!--sku end-->

                    </div>

                 
<div id="mj-left" class="mj-grid16 mj-lspace" style="">                            
<div class="ui-widget infoBoxContainer mj-categoriessidebox" >
 $categorybox </div>   

 
  
 <div class="ui-widget infoBoxContainer mj-cartbox">
$cartbox </div>

<div class="ui-widget infoBoxContainer mj-information">
$informationbox </div><div>
$newsletter</div></div>

<div id="mj-right" class="mj-grid16 mj-lspace mj-rspace"> 
</div> </div></div></div>

<div id="mj-footertop">
<div class="mj-subcontainer"> </div> </div>

 <div id="mj-footer"> <!-- mj-footer starts -->
 <div class="mj-subcontainer"> <!-- mj-subcontainer starts -->
 $footer_box_01 $footer_box_02 $footer_box_03  $footer_box_04 </div> </div>
 $footer_copyright </body></html>

