<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_e7a1d4e651fb935a2ab3f346d876470a34071646412bfd9ae07264fcc9343151 extends Twig_Template
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
                    <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>              
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  37 => 10,  31 => 9,  26 => 6,  24 => 5,  19 => 2,);
    }
}
