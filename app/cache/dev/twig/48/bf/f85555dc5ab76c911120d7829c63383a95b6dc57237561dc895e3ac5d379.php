<?php

/* ::layout/layoutAdmin.html.twig */
class __TwigTemplate_48bff85555dc5ab76c911120d7829c63383a95b6dc57237561dc895e3ac5d379 extends Twig_Template
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
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/eboOkShop.gif"), "html", null, true);
        echo "\" >
    </head>
    <body>
        
                <div class=\"admin\">  
                    <a  href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\">Administration</a>
                </div>
            
        
            
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 26
        $this->env->loadTemplate("::modulesUsed/navigationAdmin.html.twig")->display($context);
        // line 27
        echo "                <div class=\"span9\">
                    ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "                </div>
            </div>
        </div>

        <hr />
\t<footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4\" id=\"footer2\">
                    <div  id=\"corporite\">
                       <p>&copy; Copyright ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - E-BoOkShop | Tous droit r&egrave;serv&egrave;es</p>
                    </div>
                </div>    
            </div>
\t</footer>\t
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pages/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    </body>
</html>";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo "E-BoOkShop|Administration";
    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 47,  149 => 28,  144 => 12,  139 => 7,  134 => 6,  128 => 5,  123 => 48,  121 => 47,  117 => 46,  113 => 45,  109 => 44,  101 => 39,  89 => 29,  87 => 28,  84 => 27,  82 => 26,  72 => 19,  64 => 14,  61 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
