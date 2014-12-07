==============================================================================
PHP Navigation System

Developed by Diego Nicotari Trevisan
Contact: www.dntrevisan.com.br - talktome@dntrevisan.com.br - @dntrevisan
v.1.0 - 2014
Licensed with a Creative Commons License - Attribution-Compartilha Igual 4.0 International.
http://creativecommons.org/licenses/by-sa/4.0/

More details here:
http://github.com/dntrevisan/php-navigation
==============================================================================

Navigation structure for websites in PHP
  What is?
          Navigation system for web sites developed in PHP.
          Its principles safe and friendly navigation and header optimization for SEO.

          Features:
            - Developed in PHP
            - Object-Oriented
            - Recursive</li>
            - Path Validation and Files
            - Internationalization Option
            - Mod_rewrite: [.htaccess] - Apache
            - Mod_rewrite: [web.config] - IIS

  How to use?
          config/config_general.php 
             $ _setMultiLanguage = '1';
             [1 = Enable | 0 = false] - Enable navigation in several languages

             $ _setLanDefault = 'en-us';
             [en-us | en] Sets the default navigation language. The initial directory name ex:"application/views/website/en-us/"

          config/config_head.php  
             switch case 
             create a case for each page to create and define the attributes of the header variables

             application/views/website/
             en-us/
             Create a directory for each language to be worked.

             directories/new-pagina.php
             Create pages with the defined name in the navigation friendly

             directories/
             Files index.php kind in sub directories indicate main navigation pages 
             See model in "/model-test/"

             public/<br>
             Only directory opened for reading. Released permission for media files: gif | jpg | png | css | js | ico | swf | txt | xml | PDF | ogg | ttf

  File Structure
                www/
                  ├── application/
                     ├── controllers/
                        ├── ctrl_nav.php 
                     ├── models/
                        ├── class_nav.css 
                     └── views/
                        ├── paineladm/
                        ├── ecommerce/
                        └── website/
                           ├── en-us/
                              ├── about.php
                              ├── index.php
                              ├── lfooter.php
                              └── ltop.php  
                           └── pt-br/
                              ├── about.php
                              ├── index.php
                              ├── lfooter.php
                              └── ltop.php
                  ├── config/
                      ├── config_general.php
                      ├── config_head.php
                      ├── tools.php
                      ├── nav.php
                      └── switch_erros.php
                  ├── erros/
                      ├── 400.html
                      ├── 401.html
                      ├── 403.html
                      ├── 404.html
                      └── 500.html  
                  ├── library/
                  ├── public/
                      ├── fonts/
                      ├── images/
                      ├── pdfs/
                      ├── scripts/
                      └── styles/    
                  ├── index.php
                  └── .htaccess
