<?php

/* EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig */
class __TwigTemplate_18d3e2969017d71d7c197e51c5257cde7dd459a7754738ff5db60a7659f0e515 extends Twig_Template
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
        echo "Bonjour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "username", array()), "html", null, true);
        echo "
<br />
Votre commande est validée.
Vous pouvez accèder à votre facture sur votre espace client.
<br /><br />
L'équipe E-BoOkShop vous remerci pour votre commande.
<br />
Cordialement.";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:SwiftLayout/validationCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
