<?php

/* modules/what_we_do.html.twig */
class __TwigTemplate_b8672d69d1a29a2b70bf95a67896745165b70e88aede2aabbe0a5c58906a39f1 extends Twig_Template
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
        $this->loadTemplate("modules/what_we_do.html.twig", "modules/what_we_do.html.twig", 1, "1971648628")->display($context);
    }

    public function getTemplateName()
    {
        return "modules/what_we_do.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* modules/what_we_do.html.twig */
class __TwigTemplate_b8672d69d1a29a2b70bf95a67896745165b70e88aede2aabbe0a5c58906a39f1_1971648628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("modules/partials/base_module.html.twig", "modules/what_we_do.html.twig", 1);
        $this->blocks = array(
            'module_content' => array($this, 'block_module_content'),
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
        echo "        <div class=\"row\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "            ";
            $context["values"] = $context["item"];
            // line 6
            echo "            ";
            if ($this->env->getExtension('GravstrapTwigExtension')->instance_of((isset($context["values"]) ? $context["values"] : null), "\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode")) {
                // line 7
                echo "                ";
                $context["values"] = array("image" => $this->getAttribute(                // line 8
$context["item"], "getParameter", array(0 => "image"), "method"), "attributes" => $this->env->getExtension('GravstrapTwigExtension')->parseAttributes($this->getAttribute(                // line 9
$context["item"], "getParameter", array(0 => "attributes"), "method")), "content" => trim($this->getAttribute(                // line 10
$context["item"], "content", array())));
                // line 11
                echo " 
            ";
            }
            // line 13
            echo "            <div ";
            $this->loadTemplate("partials/_attributes.html.twig", "modules/what_we_do.html.twig", 13)->display(array_merge($context, array("attributes" => $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "attributes", array()))));
            echo ">    
                <div class=\"item-text\">
                    ";
            // line 15
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "content", array());
            echo "
                </div>
            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/what_we_do.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 19,  103 => 15,  97 => 13,  93 => 11,  91 => 10,  90 => 9,  89 => 8,  87 => 7,  84 => 6,  81 => 5,  64 => 4,  61 => 3,  58 => 2,  19 => 1,);
    }
}
/* {% embed 'modules/partials/base_module.html.twig' %}       */
/*     {% block module_content %}*/
/*         <div class="row">*/
/*         {% for item in items %}*/
/*             {% set values = item %}*/
/*             {% if(instanceof(values, '\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode')) %}*/
/*                 {% set values = {*/
/*                   'image': item.getParameter('image'),*/
/*                   'attributes': parse_attributes(item.getParameter('attributes')),*/
/*                   'content': item.content|trim*/
/*                 } %} */
/*             {% endif %}*/
/*             <div {% include 'partials/_attributes.html.twig' with {'attributes': values.attributes} %}>    */
/*                 <div class="item-text">*/
/*                     {{ values.content }}*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*     {% endblock %}*/
/* {% endembed %}*/
