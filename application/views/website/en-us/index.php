<?php include ("ltop.php");?>

<section class="press">
<div class="container">
    <article>
      <h1 title="PHP Navigation System">PHP Navigation System</h1>
      <div class="text">
         <h2>What is?</h2>
        <p>
          Navigation system for web sites developed in PHP.<br>
          Its principles safe and friendly navigation and header optimization for SEO.
          <br><br>
          Features:
          <ul>
            <li> Developed in PHP</li>
            <li> Object-Oriented</li>
            <li> Recursive</li>
            <li> Path Validation and Files</li>
            <li> Internationalization Option</li>
            <li> Mod_rewrite: [.htaccess] - Apache</li>
            <li> Mod_rewrite: [web.config] - IIS</li>
          </ul>
        </p>
        <p>
           <h2>How to use?</h2>
           <p> <i> config/config_general.php </ i> 
             $ _setMultiLanguage = '1'; <br>
             [1 = Enable | 0 = false] - Enable navigation in several languages <br><br>

             $ _setLanDefault = 'en'; <br>
             [en-us | en] Sets the default navigation language. The initial directory name ex:"application/views/website/en-us/"<br><br>
             </ p>

             <p> <i> config/config_head.php </ i> 
             switch case <br>
             create a case for each page to create and define the attributes of the header variables <br><br>
             </ p>

             <p> <i> application/views/website/</ i> 
             en-us/<br>
             Create a directory for each language to be worked. <br><br>

             directories/new-pagina.php <br>
             Create pages with the defined name in the navigation friendly <br><br>

             directories/<br>
             Files index.php kind in sub directories indicate main navigation pages 
             See model in href="/modelo-teste/"> <a/model-test/</a> <br><br>
             </ p>

             public/<br>
             Unico directory opened for reading. Released permission for media files: gif | jpg | png | css | js | ico | swf | txt | xml | PDF | ogg | ttf <br><br>
             </ p>
        </p>
        <p>
            <h2>File Structure</h2>
            <pre class="prettyprint">
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
             </pre>     
        </p>
    </div>    
  </article>      
</div>
</section>

<?php include ("lfooter.php");?>
