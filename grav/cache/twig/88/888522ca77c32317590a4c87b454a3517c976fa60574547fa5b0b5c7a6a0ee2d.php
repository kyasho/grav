<?php

/* bootstrap/partials/_navbar_dropdown.html.twig */
class __TwigTemplate_160c1760702da1e29293496e6b805377f72839bea73d195836c24ac487c405b4 extends Twig_Template
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
        echo "<li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">";
        // line 2
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo " <span class=\"caret\"></span></a>
    ";
        // line 3
        $this->loadTemplate("bootstrap/partials/_dropdown_items.html.twig", "bootstrap/partials/_navbar_dropdown.html.twig", 3)->display($context);
        // line 4
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/partials/_navbar_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <li class="dropdown">*/
/*     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">{{ menu }} <span class="caret"></span></a>*/
/*     {% include "bootstrap/partials/_dropdown_items.html.twig" %}*/
/* </li>*/
/* */
