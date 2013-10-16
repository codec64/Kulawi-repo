<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	
	<title>Karl Lagerfeld - A.D.N</title>
	
    <link rel='stylesheet' href='css/style.css'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link href="css/hover.css" rel="stylesheet" media="screen">

    <script src="js/modernizr.custom.97074.js"></script>

</head>

<body>



<header id="top" >
        <div class="inner container-fluid" style="padding-top: 25px;height: 100px;
position: relative;">
            <a class="logo" id="link_all" href="#all"><img src="http://www.karl.com/wp-content/themes/karl/images/logo.png" alt="Karl Lagerfeld" title=""></a>
            
            <div id="menus" style="position: absolute;
bottom: 0px;
right: 0px;">
                                <nav class="menu-top-navigation-container">
                                <ul>
                                <li><a id="link_signature" href="#signature">THE NEW SIGNATURE SCENT</a></li>
                                <li><a id="link_perfumer" href="#perfumer">PERFUMERS & INGREDIENTS</a></li>
                                <li><a id="link_campaign" href="#campaign">THE CAMPAIGN</a></li>
                                <li><a id="link_karl" href="#karl_who">KARL WHO ?</a></li>
                                <li><a id="link_brand" href="#brand">THE BRAND</a></li>
                                
                               </nav>            </div>
                                </div>

    </header>
    
       <div class="container-fluid">
       <div id="topito" style="height: 105px;"></div>

	<section >
<ul id="da-thumbs" class="da-thumbs">
		<?php 
		
		$bloc=array();
		$bloc[0]=array(3,'ADVERTISING CAMPAIGN - DUO','campaign');
		$bloc[1]=array(0,'FRAGRANCE FOR HIM','signature');
		$bloc[2]=array(0,'KARL, THE IKON','karl_who');
		$bloc[3]=array(2,'LINE UP FOR HER','signature');
		$bloc[4]=array(1,'ADVERTISING CAMPAIGN - DUO','campaign');
		$bloc[5]=array(0,'JEAN-CHRISTOPHE HERAULT, PERFUMER FOR HIM','perfumer');
		$bloc[6]=array(0,'LINE UP FOR HIM','signature');
		$bloc[7]=array(1,'OLFACTIVE PYRAMID FOR HER','perfumer');
		$bloc[8]=array(3,'FASHION AT THE BEGINNING','brand');
		$bloc[9]=array(4,'MAKING OF','campaign');



foreach($bloc as $j=>$k)
{
	//$k=$bloc;
			$size='';
			$css='';
			$xclass='';
			if($j==4){
			$css='style="float: right;"';
			}else			if($j==5){
				$css='pop="classic"';
			}
				
			
switch ($k[0]) {
    case 0:
		$size='320-240';
        break;
    case 1:
		$size='320-480';
        break;
    case 2:
		$size='640-240';
        break;
    case 3:
		$size='640-480';
		$xclass="big";
        break;
    case 4:
		$size='960-480';
		$xclass="big";
        break;
    case 5:
		$size='640-480';
		$xclass="big";
        break;
}
		
		       $li=' <li class="item '.$xclass.' " '.$css.' tag="'.$k[2].'">
						<a href="#">
							
							';
			echo $li;
			echo "<img src='img/";
			echo $size.".png ";
			echo "' alt='' $css >";			
			                                $cli='<div style="display:none;" '.$css.'><span>'.$k[1].'</span></div>
						</a>
					</li>';

	             echo $cli;


		} ?>
	</ul>
	</section>
    
        </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    	
<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>
        
 <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>	
<script type="text/javascript" src="js/hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir({
					hoverDelay : 50,
					inverse : true
				}); } );

			});
			
			$( "#link_signature" ).click(function() {
			$( ".da-thumbs li" ).fadeOut( 0, function() {
				$( ".da-thumbs li[tag='signature']" ).fadeIn( "slow");
				$( ".da-thumbs li[tag='signature']" ).clearQueue();
    // Animation complete.
  });
});
			
			$( "#link_campaign" ).click(function() {
			$( ".da-thumbs li" ).fadeOut( 0, function() {
				$( ".da-thumbs li[tag='campaign']" ).fadeIn( 500);
				$( ".da-thumbs li[tag='campaign']"  ).clearQueue();

  });
});
			
			$( "#link_karl" ).click(function() {
			$( ".da-thumbs li" ).fadeOut( 0, function() {
				$( ".da-thumbs li[tag='karl_who']" ).fadeIn( 500);
				$( ".da-thumbs li[tag='karl_who']"  ).clearQueue();

  });
});
			
			$( "#link_perfumer" ).click(function() {
			$( ".da-thumbs li" ).fadeOut( 0, function() {
				$( ".da-thumbs li[tag='perfumer']" ).fadeIn( 500);
				$( ".da-thumbs li[tag='perfumer']"  ).clearQueue();

  });
});

			$( "#link_brand" ).click(function() {
			$( ".da-thumbs li" ).fadeOut( 0, function() {
				$( ".da-thumbs li[tag='brand']" ).fadeIn( 500);
				$( ".da-thumbs li[tag='brand']"  ).clearQueue();

  });
});

			$( "#link_all" ).click(function() {
			$( ".da-thumbs li" ).fadeOut( 0, function() {
				$( ".da-thumbs li" ).fadeIn( 500);

  });
  				$( ".da-thumbs li"  ).clearQueue();

});


	jQuery( "li.item a" ).click(function( event ) {
 	 event.preventDefault();
        var url = jQuery(this).attr("href");
        //alert(url);
		//alert(url+"?json=1");
					   // jQuery("#article_container" );


		
	});
	
	
	jQuery( "li[pop='classic'].item" ).click(function( event ) {
 	 event.preventDefault();
        var url = jQuery(this).attr("href");
        //alert(url);
		//alert('wesh');
		jQuery(this).addClass('popup');
		jQuery( "div[pop='classic']" ).css( "width", "100%" ).css( "height", "100%" ).css('margin-right', '-10px').css('margin-bottom', '-10px').addClass('pop');
		//alert(url+"?json=1");
					   // jQuery("#article_container" );
					   
		jQuery(this).append("<div id='toclose' style='position:absolute;top:0px;right:0px'>Fermer</div>");			   
					   
					   
		jQuery( "li[class='popup'].item" ).click(function( event ) {
			 			jQuery("li[class='popup'].item").removeClass('popup');
						alert('close');


		jQuery( "div[pop='classic']" ).css( "width", "auto" ).css( "height", "auto" ).css('bottom', '10px').css('right', '10px').css('margin-right', '0px').css('margin-bottom', '0px');
					   
	});


		
	});
	
	
	

		</script>
	
</body>

</html>