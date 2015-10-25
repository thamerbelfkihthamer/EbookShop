<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_07fd2241b42db9ef9117bf42ac1121093a55117734f59ad214ed0d2adbb13d5b extends Twig_Template
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
        // line 2
        echo "
<div class=\"row\">
    <div class=\"span3\">
        ";
        // line 5
        $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig")->display($context);
        // line 6
        echo "    </div>

     <div  id=\"modifiermotdepass\">
        <h2>Mes informations</h2>      
                    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>      
     </div>
</div>  
</div>

<div class=\"fos_user_user_show\">
    
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  32 => 10,  26 => 6,  24 => 5,  19 => 2,);
    }
}
