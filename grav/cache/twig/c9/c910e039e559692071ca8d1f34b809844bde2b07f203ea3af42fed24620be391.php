<?php

/* basic/link.html.twig */
class __TwigTemplate_d00694ea8db4d32638b711e7fb83b82ae7257c678cf811172f4766bed082187f extends Twig_Template
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
        $context["attributes"] = $this->env->getExtension('GravstrapTwigExtension')->parseAttributes((isset($context["link_attributes"]) ? $context["link_attributes"] : null));
        // line 2
        $context["icon_stacked"] = (((((array_key_exists("stacked", $context)) ? (_twig_default_filter((isset($context["stacked"]) ? $context["stacked"] : null), false)) : (false)) == true)) ? ("_stacked") : (""));
        // line 3
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"";
        $this->loadTemplate("partials/_attributes.html.twig", "basic/link.html.twig", 3)->display($context);
        echo ">";
        $this->loadTemplate((("basic/icon" . (isset($context["icon_stacked"]) ? $context["icon_stacked"] : null)) . ".html.twig"), "basic/link.html.twig", 3)->display($context);
        echo twig_escape_filter($this->env, (isset($context["menu"]) ? $context["menu"] : null), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "basic/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set attributes = parse_attributes(link_attributes) %}*/
/* {% set icon_stacked = stacked|default(false) == true ? '_stacked' : '' %}*/
/* <a href="{{ url }}"{% include 'partials/_attributes.html.twig' %}>{% include 'basic/icon' ~ icon_stacked ~ '.html.twig'%}{{ menu }}</a>*/
/* */
