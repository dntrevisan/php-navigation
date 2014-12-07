<?php include ("ltop.php");?>

<section class="press">
<div class="container">
    <article>
      <h1 title="PHP Navigation System">Sistema de Navegação em PHP</h1>
      <div class="text">
         <h2>O que?</h2>
        <p>
          Um sistema de navegação para web sites desenvolvido em PHP<br>
          Tem por principios a navegação segura, amigavel e otimização de header para SEO.
          <br><br>
          Caracteristicas:
          <ul>
            <li> Desenvolvido em PHP</li>
            <li> Orientado a Objetos</li>
            <li> Recursivo</li>
            <li> Validação de caminhos e arquivos</li>
            <li> Opção de Internacionalização</li>
            <li> Mod_rewrite: [.htaccess] - Apache</li>
            <li> Mod_rewrite: [web.config] - IIS</li>
          </ul>
        </p>
        <p>
           <h2>Como usar?</h2>
            <p><i>config/config_general.php</i><br>
            $_setMultiLanguage='1';<br>  
            [1 = Enable | 0 = false] - Ativa navegação em varios idiomas <br><br>

            $_setLanDefault='pt-br';<br>
            [en-us | pt-br ] Define o idioma padrão da navegação (nome do diretorio inicial ex:"application/views/website/pt-br/")
            </p>

            <p><i>config/config_head.php</i><br>
            switch case<br>  
            crie um case para cada página a ser criada e defina os atributos das variaveis de cabeçalho<br><br>
            </p>

            <p><i>application/views/website/</i><br>
            pt-br/<br>  
            Crie um diretorio para cada idioma a ser trabalhado.<br><br>

            diretorios/nova-pagina.php<br>  
            Crie as páginas com o nome definido na navegação amigavel<br><br>

            diretorios/<br>  
            Arquivos do tipo index.php em sub diretorios indicam páginas principal da navegação <br>
            Veja modelo em <a href="/modelo-teste/">/modelo-teste/</a><br><br>  
            </p>

            public/<br>  
            Unico diretorio aberto para leitura. Permissão liberada para arquivos de midia: gif|jpg|png|css|js|ico|swf|txt|xml|pdf|ogg|ttf <br><br>
            </p>
        </p>
        <p>
            <h2>Estrutura de arquivos</h2>
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
