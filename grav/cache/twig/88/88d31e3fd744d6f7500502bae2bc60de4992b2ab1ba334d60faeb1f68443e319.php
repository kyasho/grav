<?php

/* partials/metadata.html.twig */
class __TwigTemplate_0bba24d36f997404bd6c1214db6e80b0c0d31d46aaa92b7652e1ff22176ead58 extends Twig_Template
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
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\" ";
            }
            // line 4
            echo "    ";
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\" ";
            }
            // line 5
            echo "    ";
            if ($this->getAttribute($context["meta"], "charset", array())) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\" ";
            }
            // line 6
            echo "    ";
            if ($this->getAttribute($context["meta"], "property", array())) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\" ";
            }
            // line 7
            echo "    ";
            if ($this->getAttribute($context["meta"], "content", array())) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\" ";
            }
            // line 8
            echo "  />
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
        return array (  60 => 8,  53 => 7,  46 => 6,  39 => 5,  32 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for meta in page.metadata %}*/
/*   <meta*/
/*     {% if meta.name %}name="{{ meta.name }}" {% endif %}*/
/*     {% if meta.http_equiv %}http-equiv="{{ meta.http_equiv }}" {% endif %}*/
/*     {% if meta.charset %}charset="{{ meta.charset }}" {% endif %}*/
/*     {% if meta.property %}property="{{ meta.property }}" {% endif %}*/
/*     {% if meta.content %}content="{{ meta.content }}" {% endif %}*/
/*   />*/
/* {% endfor %}*/
/* */
