<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php

		if( isset($_POST['id']) && isset($_POST['quant'])){
			if ( WC()->cart->get_cart_contents_count() == 0 ) {
			        $woocommerce->cart->add_to_cart(8);
			        $verif=1;
			}
		    $product_id = $_POST['id'];
		    $quantity = $_POST['quant'];
		    for($i=1; $i<=$quantity; $i++){
		    	$woocommerce->cart->add_to_cart($product_id);
		    }
		    if($verif==1){
		    	$cart = WC()->instance()->cart;
				$id = 8;
				$cart_id = $cart->generate_cart_id($id);
				$cart_item_id = $cart->find_product_in_cart($cart_id);
				
				if($cart_item_id){
				   $cart->set_quantity($cart_item_id,0);
				}
		    }
		}
		
?>
    <head>
	        <meta charset="utf-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>Wine Grower</title>
	        <meta name="description" content="Wine Grower">
	        <meta name="author" content="Wine Grower" />
	        <meta property="og:url" content="<?php echo get_site_url(); ?>/" /> 
			<meta property="og:image" content="<?php echo get_site_url(); ?>/images/og-image.png" />
			<meta property="og:site_name" content="Wine Grower" />
			<meta property="og:description" content="Wine Grower" />
	        
	        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
		    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" type="image/png">
	        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.min.css">
	        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/supersized.css">
			
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style_video.css">
	        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bower_components/BigVideo/css/bigvideo.css">
	
	        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	        
	        <!-- jQuery library (served from Google) -->
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
			
			<!-- bxSlider Javascript file -->
			<script src="<?php bloginfo('template_directory'); ?>/BxSlider/jquery.bxslider.min.js"></script>
			<script src="<?php bloginfo('template_directory'); ?>/BxSlider/jquery.bxslider.js"></script>
			<!-- bxSlider CSS file -->
			<link href="<?php bloginfo('template_directory'); ?>/BxSlider/jquery.bxslider.css" rel="stylesheet" />
        </head>

		<body>
		
		
			<?php

			// Envoi du message sur ma boite mail
			
			if($_POST["Envoyer"]==""){
				if(!empty($_POST['nom_c']) && !empty($_POST['email_c']) && !empty($_POST['message_c'])){
				
					$email = addslashes($_POST['email_c']);
					$nom = addslashes($_POST['nom_c']);
					$sujet = "Prise de contact - Via formulaire de contact du site Wine Grower";
					$ipsender = $_SERVER['REMOTE_ADDR'];
			    
					$mailDestinataire="contact@winegrower.fr";
				
					if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $email)) // On filtre les serveurs qui rencontrent des bogues.
					{
					    $passage_ligne = "\r\n";
					}
					else
					{
					    $passage_ligne = "\n";
					}
					//=====Déclaration des messages au format texte et au format HTML.
							$message_txt .= "Nom : ".$nom."\r\n";
							$message_txt .= "Adresse email : ".$email."\r\n";
							$message_txt .= "IP de l'auteur : ".$ipsender."\r\n";
							$message_txt .= "----------------------------------- \r\n";
							$message_txt .= "Message : ".$_POST['message_c']."\r\n";
					
							$message_html = "<html><head><link rel='stylesheet' href='http://www.your-website.com/wp-content/themes/wine-grower/css/style.css'></head><style>.im{color:#606161 !important;}span.im {color: red !important;}</style><body style='color:#606161'><div style='background-color:#f5f5f5;margin:0;padding:70px 0 70px 0;width:100%'><img src='http://www.your-website.com/wp-content/themes/wine-grower/images/logo.png' alt='Wine Grower' style='border:none;display:block; margin:auto; margin-bottom:70px;font-size:14px;font-weight:bold;min-height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize'><h1 style='color:#ffffff;background-color:#a18e38;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:20px;font-weight:300;line-height:150%;margin:0;padding:36px 48px;text-align:left'>Vous avez reçu un mail depuis le formulaire contact du site Wine Grower de la part de <strong>".$nom."</strong>.</h1><h2 style='color:#a18e38;display:block;padding: 36px 48px;font-family:Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:16px 0 8px;text-align:left'>Détails de l'expéditeur: </h2><h4 style='padding: 0px 48px;'><strong>Nom : </strong>".$nom."<br/><strong>Adresse email : </strong><a style='color:#606161' href='".$email."' target='_blank'>".$email."</a><br /><strong>IP de l'auteur : </strong>".$ipsender."<br /></h4><p style='margin-top:20px; padding: 0px 48px; text-align:justify;'>".nl2br(htmlspecialchars($_POST['message_c']))."</p><p style='padding: 48px 0 0 0px; border: 0; color: #c7bb88;font-family: Arial;font-size: 12px;line-height: 125%;text-align: center;'>Wine Grower</p></div></body></html>";
					//==========
					  
					//=====Création de la boundary
					$boundary = "-----=".md5(rand());
					//==========
					
					  
					//=====Création du header de l'e-mail.
					$header = "From: \"".$nom."\" <".$email.">".$passage_ligne;
					$header.= "Reply-to: \"".$nom."\" <".$email.">".$passage_ligne;
					$header.= "MIME-Version: 1.0".$passage_ligne;
					$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
					//==========
					  
					//=====Création du message.
					$message = $passage_ligne."--".$boundary.$passage_ligne;
					//=====Ajout du message au format texte.
					$message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
					$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
					$message.= $passage_ligne.$message_txt.$passage_ligne;
					//==========
					$message.= $passage_ligne."--".$boundary.$passage_ligne;
					//=====Ajout du message au format HTML
					$message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
					$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
					$message.= $passage_ligne.$message_html.$passage_ligne;
					//==========
					$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
					$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
					//==========
					  
					//=====Envoi de l'e-mail.
					if (mail($mailDestinataire,$sujet,$message,$header)) {
							$_SESSION["messagesend"] = "1";
					} else {
					 		$_SESSION["messagesend"] = "0";
					}
			//==========
			
				}
			}
			
			?>
    	
        <!--[if lt IE 8]>
             <p class="chromeframe">Vous utilisez un navigateur obsolète. <a href="http://browsehappy.ch/fr/">Mettez à jour votre navigateur</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">installez Google Chrome Frame</a> pour une meilleure expérience de ce site.</p>
        <![endif]-->
        <div class="header-container" id="top">
            <header class="wrapper clearfix">
                <h1 class="title"><a href="<?php echo get_site_url(); ?>/"><span></span></a></h1>
            </header>    
        </div>
        <nav id="nav-container">
            <ul class="wrapper clearfix menu_complete">
                <li><a href="<?php echo get_site_url(); ?>/histoire/">Histoire</a></li>
                <li><a href="<?php echo get_site_url(); ?>/terroir/">Le terroir</a></li>
                <li><a href="#cuvees">Nos cuvées</a></li>
                <li><a href="#tarifs">Nos tarifs</a></li>
                <li><a href="<?php echo get_site_url(); ?>/phototeque//">Phototèque</a></li>
                <li><a href="<?php echo get_site_url(); ?>/blog/">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
                <li style="width:8%;"><a href="<?php echo get_site_url(); ?>/my-account/"><img src="<?php bloginfo('template_directory'); ?>/images/menu/account.svg" style="width: 15px; height: 15px;" /></a></li>
                <li style="width:8%;"><a href="<?php echo get_site_url(); ?>/cart/"><img src="<?php bloginfo('template_directory'); ?>/images/menu/cart.svg" style="width: 15px; height: 15px;" /></a></li>
            </ul>
            <ul class="wrapper clearfix menu_responsive">
            	<li id="open_menu" data-dialog="somedialog" style="width: 100%; cursor:pointer;"><img src="<?php bloginfo('template_directory'); ?>/images/menu/menu.svg" style="width: auto; height: 100%;" /></li>
            </ul>
        </nav>
		<script>
			function simulate_remove(){
				$('#link_remove_first_product').trigger( 'click' );
			}
		</script>

<style>
.bxslider div.slide .slide_scena{
	display: none;
}
input.quantity{
	background-color: rgba(0, 0, 0, 0.1);
	width: 50%;
    margin: auto;
    text-align: center;
}
td.chiffre{
	text-align: center;
}
</style>

<div class="main-container nobg container-video" id="presentation"></div>
        
        <div id="code_promo" class="main-container" style="background-color: rgba(247,247,247,0.8)">
        	 <?php
		     		$args = array(
						'category_name' 	 => 'code-promo',
						'numberposts' 		 => 1,
						'posts_per_page' 	 => 1,
						'order'    			 => 'ASC'
					);
					query_posts( $args );
					$the_query = new WP_Query( $args );
						while ( $the_query->have_posts() ) :
							$the_query->the_post();
							the_content();
						endwhile;
					wp_reset_postdata(); 
			?>
        </div> 
        
         <div class="main-container" style="background-color: rgba(247,247,247,0.8)">
            <article id="cuvees">
                <div class="bxslider">
			        <div class="slider1">
			        	
			        	<?php
				            $args = array( 'post_type' => 'product', 'numberposts' => -1, 'posts_per_page' => -1, 'orderby' =>'date','order' => 'ASC' );
				            $loop = new WP_Query( $args );
				            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
				        ?>
			        
			        	<div class="slide">
                          <?php the_content(); ?>
						</div>
						
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div>
		        </div>
            </article>
        </div>
         <div class="main-container">
            <div class="main wrapper clearfix">
                <article id="tarifs">
                	<section>
                        <h2>TARIFS / BON DE COMMANDE</h2>
                        <p>Merci de remplir la colonne quantité.</p>
                        
                        <form id="form_bon_commande" action="cart/" method="post" id="bdc" onsubmit="send_form_cuv()">
                        
                        	<?php
					            $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'numberposts' => -1, 'stock' => 1, 'orderby' =>'date','order' => 'ASC' );
					            $loop = new WP_Query( $args );
					            $cpt=0;
					            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
					            	$cpt++;
					            endwhile; ?>
					        <?php wp_reset_query(); ?>
                            
                            <input type="hidden" value="<?php echo($cpt); ?>" name="nb_ligne" id="nb_ligne" />                    
                        <table>
                            <thead>
                              <tr>
                                <th>Cuvée</th>
                                <th>Contenant</th>
                                <th class="chiffre">PU TTC</th>
                                <th class="chiffre">Qté</th>
                                <th class="chiffre">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                            
                             <?php
					            $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'numberposts' => -1, 'stock' => 1, 'orderby' =>'date','order' => 'ASC' );
					            $loop = new WP_Query( $args );
					            $cpt=1;
					            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
					            
					            
					        ?>
		                       <tr class="cuv_num" value="<?php the_ID(); ?>">
		                            <td><?php the_title(); ?></td><td><?php echo $product->get_categories( ', ', '</span>' ); ?><input type="hidden" value="<?php echo($cpt); ?>" id="equivalence_<?php echo($cpt); ?>" name="equivalence_<?php echo($cpt); ?>" /><input type="text" name="nom_<?php echo($cpt); ?>" id="nom_<?php echo($cpt); ?>" value="<?php the_title(); ?>" class="hide" /></td>
									<td class="chiffre"><input type="text" name="prix_<?php echo($cpt); ?>" id="prix_<?php echo($cpt); ?>" class="hide" readonly value="<?php echo $product->get_price(); ?>" /><input type="text" name="prix_aff_<?php echo($cpt); ?>" id="prix_aff_<?php echo($cpt); ?>" readonly value="<?php echo $product->get_price(); ?> €" /></td>
									<td class="chiffre"><input class="quantity" type="text" name="qte_<?php echo($cpt); ?>" id="qte_<?php echo($cpt); ?>" onkeyup="calcul()" onfocusout="calcul()"/></td>
									<td class="chiffre"><input type="text" name="total_<?php echo($cpt); ?>" id="total_<?php echo($cpt); ?>" class="hide" readonly /><input type="text" name="total_aff_<?php echo($cpt); ?>" id="total_aff_<?php echo($cpt); ?>" readonly /></td>
		                       </tr>
		                       
		                      <?php $cpt++; ?>
		                       
		                    <?php endwhile; ?>
					        <?php wp_reset_query(); ?>
      
                        </tbody>
                 </table>
                   
                 		<p class="tot"><strong>Total produits :</strong> <input type="text" name="total" class="hide" id="total" /> <input type="text" readonly name="total_aff" id="total_aff" /></p>
                 		<p class="tot"><strong>Frais de port :</strong> <input type="text" name="total_fdp" class="hide" id="total_fdp" /> <input type="text" readonly name="total_fdp_aff" id="total_fdp_aff" /></p>
						<p class="tot"><strong>Total :</strong> <input type="text" name="total_total" class="hide" id="total_total" /> <input type="text" readonly name="total_total_aff" id="total_total_aff" /></p>       
						
                        <input type="submit" class="bouton" value="Commander" style="float:right;"/>
                        <img id="ajax-loader-form-cuv" src="<?php bloginfo('template_directory'); ?>/images/form_cuv/ajax-loader.gif" style="display:none; width: 20px; height: auto; margin-right: 1em; margin-top: 0.4em; float: right;"/>
</div>
                        
                          
                     </form> 
                   </section>
                </article>
            </div> 
        </div> 
        
         
   <style type="text/css">
      #map-canvas { width: 100%; height: 200px; margin: 0;}
      @media screen and (max-width: 860px){
			.text_scena_description {
			    background-color: inherit !important;
			}
		}
 </style>     
        
         <div class="main-container">
         
         <div id="map-canvas">
         <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQj19bhjOYQec1_CBi_Hp638fLO23QBfY&sensor=false"></script>
			
			<script type="text/javascript">
      function initialize() {

        var styles = [
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            },
            {
                "gamma": "1.00"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            },
            {
                "gamma": "0.00"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 21
            },
            {
                "gamma": "0.00"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#b7a56d"
            },
            {
                "lightness": 17
            },
            {
                "gamma": "0.00"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#b7a56d"
            },
            {
                "lightness": 29
            },
            {
                "weight": "0.01"
            },
            {
                "saturation": "0"
            },
            {
                "gamma": "0.00"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#b7a56d"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#b7a56d"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "gamma": "1.00"
            }
        ]
    }
]
        
        ;

        var styledMap = new google.maps.StyledMapType(styles, {name: "Gmap stylée"});

		var myLatlng = new google.maps.LatLng(42.916826, 2.20505);
		
        var mapOptions = {
          center: new google.maps.LatLng(42.916826, 2.20505),
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false
        };
        
		
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'My Home'
			});
		
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');

      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
		</div>
         
         
            <div class="main wrapper clearfix">
                <article id="contact">
                    <section class="col1 margr">
                    	<h2>Formulaire de contact</h2>
                    	<form id="formSendMail">
                        	   
                        	   <fieldset>
                                  <p><input type="text" name="nom_c" id="nom_c" placeholder="Votre nom *"></p>
                                  <p><input type="text" name="email_c" id="email_c" placeholder="Votre email *"></p>
                                  <p><textarea name="message_c" id="message_c" placeholder="Votre message *"></textarea></p>
                                  <p><small>* Champs obligatoires</small></p>
                                  
                                  <p style="text-align: left;font-weight: 800;" id="alertformSendMail"></p>
                                  
                              <input type="submit" id="submitformSendMail"value="Envoyer" class="bouton"> 
                            </fieldset>
                        </form>
                    </section>
                    <section class="col2" style="float:right;">
                    	<h2 style="text-align:right;">Coordonnées</h2>
                        <p style="text-align:right;">Wine Grower<br>
                        00 Rue du Wine Grower
						00 000 Code Postal<br>
						FRANCE
						Mail : <a href="mailto:contact@winegrower.fr" style="color:#38393a">contact@winegrower.fr</a><br>
						Tél : <a href="tel:+33468200462" style="color:#38393a">04 68 20 04 62</a>
						<br clear="all"></p>
                    </section>
                </article>
            </div> 
        </div> 

<?php get_footer(); ?>
