<?php

/* modules/partials/base_module.html.twig */
class __TwigTemplate_2c9122323ba79124eb1773df5ac5ec440b1924de36866100fa2140531565ac7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'module_page_content' => array($this, 'block_module_page_content'),
            'module_content' => array($this, 'block_module_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["attributes"] = $this->env->getExtension('GravstrapTwigExtension')->parseAttributes((isset($context["attributes"]) ? $context["attributes"] : null));
        // line 2
        $context["column_attributes"] = $this->env->getExtension('GravstrapTwigExtension')->parseAttributes((isset($context["column_attributes"]) ? $context["column_attributes"] : null));
        // line 3
        echo "<section>
    <div class=\"container ";
        // line 4
        echo $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array");
        echo "\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "modules/partials/base_module.html.twig", 4)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
        ";
        // line 5
        $this->displayBlock('module_page_content', $context, $blocks);
        // line 14
        echo "        
        ";
        // line 15
        $this->displayBlock('module_content', $context, $blocks);
        // line 17
        echo "    </div>
</section>";
    }

    // line 5
    public function block_module_page_content($context, array $blocks = array())
    {
        // line 6
        echo "            ";
        if (((isset($context["content"]) ? $context["content"] : null) != "")) {
            // line 7
            echo "            <div class=\"row\">
                <div ";
            // line 8
            $this->loadTemplate("partials/_attributes.html.twig", "modules/partials/base_module.html.twig", 8)->display(array_merge($context, array("attributes" => (isset($context["column_attributes"]) ? $context["column_attributes"] : null))));
            echo ">
                    ";
            // line 9
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
                </div>
            </div>
            ";
        }
        // line 13
        echo "        ";
    }

    // line 15
    public function block_module_content($context, array $blocks = array())
    {
        // line 16
        echo "        ";
    }

    public function getTemplateName()
    {
        return "modules/partials/base_module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  70 => 15,  66 => 13,  59 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  41 => 17,  39 => 15,  36 => 14,  34 => 5,  28 => 4,  25 => 3,  23 => 2,  21 => 1,);
    }
}
/* {% set attributes = parse_attributes(attributes) %}*/
/* {% set column_attributes = parse_attributes(column_attributes) %}*/
/* <section>*/
/*     <div class="container {{ attributes['class'] }}" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>*/
/*         {% block module_page_content %}*/
/*             {% if content != "" %}*/
/*             <div class="row">*/
/*                 <div {% include 'partials/_attributes.html.twig' with { 'attributes': column_attributes } %}>*/
/*                     {{ content }}*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/*         {% endblock %}*/
/*         */
/*         {% block module_content %}*/
/*         {% endblock %}*/
/*     </div>*/
/* </section>*/
