[![Version](https://img.shields.io/badge/version-1.0-green.svg)](https://img.shields.io/badge/version-1.1-green.svg) [![Build status](https://img.shields.io/badge/build-passing-green.svg)](https://img.shields.io/badge/build-passing-green.svg) [![CMS](https://img.shields.io/badge/CMS-WordPress-lightgrey.svg)](https://img.shields.io/badge/CMS-WordPress-lightgrey.svg) [![eCommerce](https://img.shields.io/badge/E%20Commerce%20solution-WooCommerce-lightgrey.svg)](https://img.shields.io/badge/E%20Commerce%20solution-WooCommerce-lightgrey.svg)

# Wine Grower template - *Salasar*

![preview](https://raw.githubusercontent.com/PierreChls/wine-grower-template/template-salasar/wine-grower/images/preview.png)

## How to use it

### Clone the project

    git clone https://github.com/PierreChls/wine-grower-template.git
    
### Add theme to your WordPress

- **Upload** the folder named *wine-grower* to `/wp-content/themes/` folder using your favorite FTP Client
- **Activate** it via your admin interface (`Appearance > Themes`)

### Install WooCommerce

- **Download** WooCommerce plugin 
    - from [WordPress](https://fr.wordpress.org/plugins/woocommerce/) website  
    - from [WooThemes](https://www.woothemes.com/woocommerce/) website 
    - from your admin interface (`Plugins > Add`) and search "*WooCommerce*"
    
- **Active** WooCommerce plugin 
    - from your admin interface (`Plugins`) and click to "*Activate*"
    - follow WooCommerce configuration and complete with your settings
    
- **Active** your favorite langage
    - download your langage from the [langage pack](https://translate.wordpress.org/projects/wp-plugins/woocommerce/language-packs)
    - add downloaded files into WooCommerce plugin folder
    
- **Check** if pages created by WooCommerce have these URLs
    - Checkout : *http://your-website-url/commande/*
    - Cart : *http://your-website-url/panier/*
    - My account : *http://your-website-url/mon-compte/*
    - Shop : *http://your-website-url/boutique/*
    
 
### Create content

#### Add some pages

- History page
    - Name : Histoire
    - URL : *http://your-website-url/histoire/*
    - Content : 

```html
<div id="background_section_image">
    <img src="YOUR_IMAGE.jpg"/>
</div>
<div id="text">
    <h1>Histoire</h1>
    <div class="pag_1">Some text</div>
    <div class="pag_2">Some text</div>
</div>
```

- Terroir page
    - Name : Le terroir
    - URL : *http://your-website-url/terroir/*
    - Content : 

```html
<div id="background_section_image">
    <img src="YOUR_IMAGE.jpg"/>
</div>
<div id="text">
    <h1 style="text-align: center;">Le terroir</h1>
    <p style="text-align: center;"><img src="YOUR_LOGO.jpg"/></p>
    <div class="pag_1">Some text</div>
    <div class="pag_2">Some text</div>
</div>
```

- Photo gallery page
    - Name : Phototèque
    - URL : *http://your-website-url/phototeque/*
    - Content : your Wordpress photo gallery
        
- Majority page
    - Name : Majorité
    - URL : *http://your-website-url/majority/*
    - Content : none

- Sorry majority page
    - Name : Désolé, vous n'êtes pas majeur
    - URL : *http://your-website-url/sorry-majority/*
    - Content : none
    
- International fee schedule page
    - Name : Grille tarifaire international
    - URL : *http://your-website-url/grille-tarifaire-international/*
    - Content : your international fee schedule

- Terms and conditions page
    - Name : Mentions légales
    - URL : *http://your-website-url/mentions-legales/*
    - Content : your terms and conditions

- General conditions of sale page
    - Name : Conditions Générales de Vente
    - URL : *http://your-website-url/conditions-generales-de-vente/*
    - Content : your general conditions of sale

#### Add some product categories

- **Go** to `Product > Categories` in your WordPress admin interface

#### Add some products

#### Add some article categories

#### Add some articles   

    
## Prior installation

You have to download [Wordpress](https://wordpress.org/download/) and install it on you server.


