<?php

/* modules/contacts.html.twig */
class __TwigTemplate_454a35bd0c839444fd99ec162d60f2be5a13106ad2dd2dc7b285e2d42734c4ca extends Twig_Template
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
        $this->loadTemplate("modules/contacts.html.twig", "modules/contacts.html.twig", 1, "1579762801")->display($context);
    }

    public function getTemplateName()
    {
        return "modules/contacts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* modules/contacts.html.twig */
class __TwigTemplate_454a35bd0c839444fd99ec162d60f2be5a13106ad2dd2dc7b285e2d42734c4ca_1579762801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("modules/partials/base_module.html.twig", "modules/contacts.html.twig", 1);
        $this->blocks = array(
            'module_content' => array($this, 'block_module_content'),
            'info' => array($this, 'block_info'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "modules/partials/base_module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_module_content($context, array $blocks = array())
    {
        // line 3
        echo "        ";
        $context["form_attributes"] = $this->env->getExtension('GravstrapTwigExtension')->parseAttributes((isset($context["form_attributes"]) ? $context["form_attributes"] : null));
        // line 4
        echo "        ";
        $context["info_attributes"] = $this->env->getExtension('GravstrapTwigExtension')->parseAttributes((isset($context["info_attributes"]) ? $context["info_attributes"] : null));
        // line 5
        echo "        <div class=\"row contacts-text ";
        echo (isset($context["container_class"]) ? $context["container_class"] : null);
        echo "\">
            ";
        // line 6
        if ((((array_key_exists("form_position", $context)) ? (_twig_default_filter((isset($context["form_position"]) ? $context["form_position"] : null), "right")) : ("right")) == "right")) {
            // line 7
            echo "            ";
            $this->displayBlock('info', $context, $blocks);
            // line 12
            echo "            ";
            $this->displayBlock('form', $context, $blocks);
            // line 17
            echo "            ";
        } else {
            // line 18
            echo "            ";
            $this->displayBlock("form", $context, $blocks);
            echo "
            ";
            // line 19
            $this->displayBlock("info", $context, $blocks);
            echo "
            ";
        }
        // line 21
        echo "        </div>
    ";
    }

    // line 7
    public function block_info($context, array $blocks = array())
    {
        // line 8
        echo "            <div ";
        $this->loadTemplate("partials/_attributes.html.twig", "modules/contacts.html.twig", 8)->display(array_merge($context, array("attributes" => (isset($context["info_attributes"]) ? $context["info_attributes"] : null))));
        echo ">
                ";
        // line 9
        echo $this->getAttribute((isset($context["sections"]) ? $context["sections"] : null), "info", array());
        echo "
            </div>
            ";
    }

    // line 12
    public function block_form($context, array $blocks = array())
    {
        // line 13
        echo "            <div ";
        $this->loadTemplate("partials/_attributes.html.twig", "modules/contacts.html.twig", 13)->display(array_merge($context, array("attributes" => (isset($context["form_attributes"]) ? $context["form_attributes"] : null))));
        echo ">
                ";
        // line 14
        echo $this->getAttribute((isset($context["sections"]) ? $context["sections"] : null), "form", array());
        echo "
            </div>
            ";
    }

    public function getTemplateName()
    {
        return "modules/contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 14,  118 => 13,  115 => 12,  108 => 9,  103 => 8,  100 => 7,  95 => 21,  90 => 19,  85 => 18,  82 => 17,  79 => 12,  76 => 7,  74 => 6,  69 => 5,  66 => 4,  63 => 3,  60 => 2,  19 => 1,);
    }
}
/* {% embed 'modules/partials/base_module.html.twig' %}       */
/*     {% block module_content %}*/
/*         {% set form_attributes = parse_attributes(form_attributes) %}*/
/*         {% set info_attributes = parse_attributes(info_attributes) %}*/
/*         <div class="row contacts-text {{ container_class }}">*/
/*             {% if (form_position|default('right') == 'right') %}*/
/*             {% block info %}*/
/*             <div {% include 'partials/_attributes.html.twig' with {'attributes': info_attributes} %}>*/
/*                 {{ sections.info }}*/
/*             </div>*/
/*             {% endblock %}*/
/*             {% block form %}*/
/*             <div {% include 'partials/_attributes.html.twig' with {'attributes': form_attributes} %}>*/
/*                 {{ sections.form }}*/
/*             </div>*/
/*             {% endblock %}*/
/*             {% else %}*/
/*             {{ block('form') }}*/
/*             {{ block('info') }}*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endblock %}*/
/* {% endembed %}*/
