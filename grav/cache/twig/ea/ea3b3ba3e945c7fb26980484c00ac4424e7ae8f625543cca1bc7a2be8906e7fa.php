<?php

/* partials/_attributes.html.twig */
class __TwigTemplate_1231bde1eb4a9228fc8dc8ddf644d836bb68bbabaffda5719670f43f796539a6 extends Twig_Template
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
        $context["ignore"] = ((array_key_exists("ignore", $context)) ? (_twig_default_filter((isset($context["ignore"]) ? $context["ignore"] : null), array())) : (array()));
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            echo " ";
            if ((twig_in_filter($context["attribute"], (isset($context["ignore"]) ? $context["ignore"] : null)) == false)) {
                echo $context["attribute"];
                echo "=\"";
                echo $context["value"];
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/_attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% set ignore = ignore|default([]) %}*/
/* {% for attribute, value in attributes %} {% if attribute in ignore == false %}{{ attribute }}="{{ value }}"{% endif %}{% endfor %}*/
