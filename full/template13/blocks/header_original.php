<script type="text/javascript">

  jQuery(document).ready(function(){

            var submitIcon = jQuery('.searchbox-icon');

            var inputBox = jQuery('.searchbox-input');

            var searchBox = jQuery('.searchbox');

            var isOpen = false;

            submitIcon.click(function(){

                if(isOpen == false){

                    searchBox.addClass('searchbox-open');

                    inputBox.focus();

                    isOpen = true;

                } else {

                    searchBox.removeClass('searchbox-open');

                    inputBox.focusout();

                    isOpen = false;

                }

            });  

             submitIcon.mouseup(function(){

                    return false;

                });

            searchBox.mouseup(function(){

                    return false;

                });

            jQuery(document).mouseup(function(){

                    if(isOpen == true){

                        jQuery('.searchbox-icon').css('display','block');

                        submitIcon.click();

                    }

                });

        });

            function buttonUp(){

                var inputVal = jQuery('.searchbox-input').val();

                inputVal = jQuery.trim(inputVal).length;

                if( inputVal !== 0){

                    jQuery('.searchbox-icon').css('display','none');

                } else {

                    jQuery('.searchbox-input').val('');

                    jQuery('.searchbox-icon').css('display','block');

                }

            }

</script>



<div id="mj-header">  

  <!--<div class="mj-subcontainer"> -->

  <div class="mj-subcontainer"> 

    <!-- mj-subcontainer starts -->

    <div class="col-md-8"> <!-- mj-logo starts --> 

      
<div class="mobilebanner"><br><br></div>
      <a href="index.php"><img src="/includes/sts_templates/full/template13/images/logo2.png"></a> </div>

    <!-- mj-logo ends -->

    

    <div class="col-md-3 search_box search_New_btn">

      <form class="searchbox" method="get" action="advanced_search_result.php" name="search">

        <input type="search" name="keywords" placeholder="Search......" class="searchbox-input" onkeyup="buttonUp();" required>

        <!-- <input type="submit" class="searchbox-submit" value="GO">--> 

        <span class="searchbox-icon"><i class="fa fa-search"></i></span>

      </form>

    </div>

    <div class="col-md-1 pull-right cart_button_top"><a href="shopping_cart.php"><span><i class="fa fa-shopping-cart"></i></span></a></div>

    <!-- mj-grid16 ends --> 

    

    <!-- mj-grid32 ends --> 

    <script type="text/javascript">

   var jqheader = jQuery.noConflict();

	jqheader(document).ready(function () {

		jqheader('#store_li').click(function () {

			jqheader(".navbar .nav > li").show();

		});

		jqheader('#cate_li').click(function () {

			jqheader(".navbar .nav > li").show();

		});

	});

</script> 

  </div>

</div>

