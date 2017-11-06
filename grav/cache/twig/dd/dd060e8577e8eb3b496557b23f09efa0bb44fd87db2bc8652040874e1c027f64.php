<?php

/* partials/metadata.html.twig */
class __TwigTemplate_c5f0d18dc2517556fd545f0e6e4ff8e0b0da225196e6dfe58619ba74de154448 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 2
            echo "  <meta
    ";
            // line 3
            if ($this->getAttribute($context["meta"], "name", array())) {
                // line 4
                echo "    name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\"
    ";
            }
            // line 6
            echo "    ";
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                // line 7
                echo "    http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\"
    ";
            }
            // line 9
            echo "    ";
            if ($this->getAttribute($context["meta"], "charset", array())) {
                // line 10
                echo "    charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\"
    ";
            }
            // line 12
            echo "    ";
            if ($this->getAttribute($context["meta"], "property", array())) {
                // line 13
                echo "    property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\"
    ";
            }
            // line 15
            echo "    ";
            if ($this->getAttribute($context["meta"], "content", array())) {
                // line 16
                echo "    content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\"
    ";
            }
            // line 17
            echo "/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  64 => 16,  61 => 15,  55 => 13,  52 => 12,  46 => 10,  43 => 9,  37 => 7,  34 => 6,  28 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for meta in page.metadata %}*/
/*   <meta*/
/*     {% if meta.name %}*/
/*     name="{{ meta.name }}"*/
/*     {% endif %}*/
/*     {% if meta.http_equiv %}*/
/*     http-equiv="{{ meta.http_equiv }}"*/
/*     {% endif %}*/
/*     {% if meta.charset %}*/
/*     charset="{{ meta.charset }}"*/
/*     {% endif %}*/
/*     {% if meta.property %}*/
/*     property="{{ meta.property }}"*/
/*     {% endif %}*/
/*     {% if meta.content %}*/
/*     content="{{ meta.content }}"*/
/*     {% endif %}/>*/
/* {% endfor %}*/
