<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_14b47ae6b2c1cbea095031db2cf1aabe6da460325d6de3b3daceb267dd7ca434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ecommerceecommerce/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "         <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/eboOkShop.gif"), "html", null, true);
        echo "\" >
    </head>
    <body>
       
            <div class=\"entrer \">
                
            </div> 
            <div class=\"container\">
                   
                    <div class=\"logo\">
                      <a class=\"brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/eboOkShop.gif"), "html", null, true);
        echo "\"/></a>
                    </div>
                    <div class=\"reseau_sociaux\">
                        <a href=\"#facebook\" alt=\"facebook\">
                            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/facebook.png"), "html", null, true);
        echo "\">
                        </a>
                        <a href=\"#twitter\" alt=\"twitter\"> 
                           <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/twitter.png"), "html", null, true);
        echo "\">
                        </a>
                        <a href=\"#rss\" alt=\"rss\">
                           <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/rss.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
            </div> 
                        
            <div class=\"separatora\">
            </div>
                <div>
                    <ul id=\"menuindex\" class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">ACCUEIL</a></li>
                        
                        <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">QUI SOMMES NOUS</a></li> 
                        <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">CONTACT</a></li> 
                        <li> 
                            <div id=\"serch\" >
                              ";
        // line 49
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 50
        echo "                             </div>
                        </li>
                    </ul>
                </div>
                        
            <div class=\"separatorb\">
            </div>    
            <section class=\"back\">  
                
                    <div class=\"lastearticle\">
                        <h1>DERNIERS LIVRES AJOUTES A LA BIBLIOTHEQUE</h1>
                    </div> 
                    <div class=\"article\">
                        ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "                    </div>    
                    
                   
                    
            
        
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\" id=\"footer1\">
                    <div class=\"span4 offset1\" id=\"service\">
                        <h4>Service</h4>
                        <ul class=\"nav nav-stacked\">
                            ";
        // line 76
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menu"), array());
        // line 77
        echo "                                
                        </ul>
                    </div> 
                                
                                

                    <div class=\"span4\" id=\"aide\">
                        <h4>Aide</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"span2\" id=\"suivernous\">
                        <h4>Suivis nous</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
                        <a href=\"http://facebook.com/like\"><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/facebook.png"), "html", null, true);
        echo "\"/></a>FaceBook<br>
\t\t        <a href=\"http://Twitter.com/like\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/twitter.png"), "html", null, true);
        echo "\"/></a>Twitter
                    </div>
                </div>
                    
                <div class=\"row\" id=\"footer2\">
                    <div  id=\"corporite\">
                        <p>&copy; Copyright ";
        // line 99
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - E-BoOkShop | Tous droit r&egrave;serv&egrave;es</p>
                    </div>
                </div>
            </div>
        </footer>
         </section>           
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        ";
        // line 111
        $this->displayBlock('javascripts', $context, $blocks);
        // line 112
        echo "    </body>
</html>";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo "E-BoOkShop";
    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 111,  262 => 63,  257 => 13,  252 => 7,  247 => 6,  241 => 5,  236 => 112,  234 => 111,  230 => 110,  226 => 109,  222 => 108,  218 => 107,  214 => 106,  210 => 105,  201 => 99,  192 => 93,  188 => 92,  184 => 91,  180 => 90,  172 => 85,  162 => 77,  160 => 76,  146 => 64,  144 => 63,  129 => 50,  127 => 49,  121 => 46,  117 => 45,  112 => 43,  100 => 34,  94 => 31,  88 => 28,  79 => 24,  65 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
