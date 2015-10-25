<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_4c57a8353e30a5d316dc4e21c64436722ad9f5ef37929b71519484ad5b356c8f extends Twig_Template
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
        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 7
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"span3\">
                        ";
        // line 16
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 17
        echo "                    </div>

                    <div class=\"span9\">
                          <div id=\"showpanier\">
                        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "                            <div class=\"alert alert-success\">
                                ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
                        <h2>Votre panier</h2>
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>Références</th>
                                    <th>Quantité</th>
                                    <th>Prix unitaire</th>
                                    <th>Total HT</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 38
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 39
            echo "                                    <tr>
                                        <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                                    </tr>
                                ";
        }
        // line 43
        echo "
                                ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 45
            echo "                                <tr>
                                    <form action=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                                ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 51
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                                            </select>&nbsp;
                                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                                        </td>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
                                    </form>
                                </tr>
                                ";
            // line 60
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 61
            echo "                                ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())));
            // line 62
            echo "                                ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())))));
            // line 63
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            </tbody>
                        </table>
                        ";
        // line 66
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 67
            echo "                        <dl class=\"dl-horizontal pull-right\">
                            <dt>Total HT :</dt><dd>";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo " €</dd>

                            ";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 71
                echo "                                <dt>TVA ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " :</dt><dd>";
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo " €</dd>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
                            <dt>Total TTC :</dt><dd>";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo " €</dd>
                        </dl>
                        <div class=\"clearfix\"></div>
                        <a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("livraison");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                        ";
        }
        // line 79
        echo "                        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
                    </div>

                </div>
            </div>
    </div>               
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 79,  218 => 77,  212 => 74,  209 => 73,  198 => 71,  194 => 70,  189 => 68,  186 => 67,  184 => 66,  180 => 64,  174 => 63,  171 => 62,  168 => 61,  166 => 60,  160 => 57,  156 => 56,  151 => 54,  148 => 53,  133 => 51,  129 => 50,  123 => 47,  119 => 46,  116 => 45,  112 => 44,  109 => 43,  103 => 39,  101 => 38,  87 => 26,  78 => 23,  75 => 22,  71 => 21,  65 => 17,  63 => 16,  56 => 11,  53 => 10,  49 => 1,  43 => 7,  39 => 6,  37 => 5,  35 => 4,  33 => 3,  11 => 1,);
    }
}
