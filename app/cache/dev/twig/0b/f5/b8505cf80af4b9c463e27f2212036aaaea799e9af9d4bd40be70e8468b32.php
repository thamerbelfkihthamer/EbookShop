<?php

/* EcommerceBundle:Default:panier/layout/livraison.html.twig */
class __TwigTemplate_0bf5b8505cf80af4b9c463e27f2212036aaaea799e9af9d4bd40be70e8468b32 extends Twig_Template
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
        echo "    <div id=\"livraisonn\">   
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
        <div id=\"livraisontitre\"><h2>Livraison</h2></div>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div id=\"livraisonleft\">
                    <div class=\"span4\">
                        ";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array())) != 0)) {
            // line 13
            echo "                        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("validation");
            echo "\" method=\"POST\">
                            
                            <h4>Adresse de livraison</h4>
                            ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 17
                echo "                            <label class=\"radio\">
                                <input type=\"radio\" name=\"livraison\" value=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                <br />";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "
                            </label>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                            
                          
                              
                            <h4>Adresse de facturation</h4>
                            ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 28
                echo "                            <label class=\"radio\">
                                <input type=\"radio\" name=\"facturation\" value=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                <br />";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "
                            </label>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                            
                            <br />
                            
                            <button class=\"btn btn-primary\">Valider mes adresses</button>
                        </form>
                        ";
        }
        // line 40
        echo "                      
                    </div>
                </div>

                    <div class=\"span4 offset2\">
                        <div id=\"addfacture\">
                            <h4>Ajouter une nouvelle adresse</h4>
                            <form action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" method=\"POST\">
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                            </form>
                        </div>     
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>  
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 48,  199 => 47,  190 => 40,  182 => 34,  163 => 31,  151 => 30,  143 => 29,  140 => 28,  123 => 27,  117 => 23,  98 => 20,  86 => 19,  78 => 18,  75 => 17,  58 => 16,  51 => 13,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
