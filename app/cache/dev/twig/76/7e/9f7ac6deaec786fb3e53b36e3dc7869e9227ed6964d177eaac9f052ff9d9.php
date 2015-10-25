<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_767e9f7ac6deaec786fb3e53b36e3dc7869e9227ed6964d177eaac9f052ff9d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("rechercheProduits");
        echo "\" method=\"POST\">
    <div class=\"frrec\">
        
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget');
        echo "
       
    <button type=\"submit\" class=\"btn\">Rechercher</button>
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  26 => 4,  19 => 1,);
    }
}
