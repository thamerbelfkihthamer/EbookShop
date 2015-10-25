<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_e52341c127b9fa93274edc969dd4d50b95c62871929108452706af4485d5f424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout/layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 8
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 9
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            echo "                ";
            $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig")->display($context);
            echo "   
            ";
        } else {
            // line 12
            echo "                ";
            $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig")->display($context);
            echo "   
            ";
        }
        // line 14
        echo "            ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 15
        echo "        </div>
     <div id=\"produitacceuil\"> 
        <div class=\"span9\">
            ";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 19
            echo "                <ul class=\"thumbnails\">
                ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 21
                echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\" id=\"postar\">
                            <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array()), "produitThumb"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "name", array()), "html", null, true);
                echo "\" width=\"300\" height=\"150\">
                            <div class=\"caption\">
                                <h4>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                                <h6>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "auteur", array()), "html", null, true);
                echo "</h6>
                                <p>";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo " €</p>
                                <a class=\"btn btn-primary\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                                ";
                // line 29
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 30
                    echo "                                    <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\">Ajouter au panier</a>
                                ";
                }
                // line 32
                echo "                            </div>
                        </div>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </ul>
            </div>
                <div class=\"navigation\" id=\"pg\">
                    ";
            // line 39
            echo $this->env->getExtension('knp_pagination')->render((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            echo "
                </div>
                
            ";
        } else {
            // line 43
            echo "                <div class=\"acunarticle\"> <h3>Aucun produit</h3> <div>
            ";
        }
        // line 45
        echo "        </div>
        
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 45,  135 => 43,  128 => 39,  123 => 36,  114 => 32,  108 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  83 => 23,  79 => 21,  75 => 20,  72 => 19,  70 => 18,  65 => 15,  62 => 14,  56 => 12,  50 => 10,  47 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
