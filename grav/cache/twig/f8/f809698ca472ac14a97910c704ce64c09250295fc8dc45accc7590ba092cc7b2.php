<?php

/* modules/clients.html.twig */
class __TwigTemplate_2e1b5745d7f90080f2bb7824fb0dad9beae82b90c7ba9de40d056840dd135f71 extends Twig_Template
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
        $this->loadTemplate("modules/clients.html.twig", "modules/clients.html.twig", 1, "1888710869")->display($context);
    }

    public function getTemplateName()
    {
        return "modules/clients.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* modules/clients.html.twig */
class __TwigTemplate_2e1b5745d7f90080f2bb7824fb0dad9beae82b90c7ba9de40d056840dd135f71_1888710869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("modules/partials/base_module.html.twig", "modules/clients.html.twig", 1);
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
$context["item"], "getParameter", array(0 => "attributes"), "method")));
                // line 11
                echo "            ";
            }
            // line 12
            echo "            <div class=\"item-image ";
            echo $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "attributes", array()), "class", array());
            echo "\" ";
            $this->loadTemplate("partials/_attributes.html.twig", "modules/clients.html.twig", 12)->display(array_merge($context, array("attributes" => $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "attributes", array()), "ignore" => array(0 => "class"))));
            echo ">
                ";
            // line 13
            $context["images_page"] = $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "page", array()), "find", array(0 => "/images"), "method");
            // line 14
            echo "                ";
            if (($this->getAttribute(twig_split_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "image", array()), "."), 1, array(), "array") == "svg")) {
                // line 15
                echo "                ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["images_page"]) ? $context["images_page"] : null), "media", array()), "files", array()), $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "image", array()), array(), "array");
                echo "
                ";
            } else {
                // line 17
                echo "                ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["images_page"]) ? $context["images_page"] : null), "media", array()), "images", array()), $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "image", array()), array(), "array"), "html", array(0 => "", 1 => "", 2 => "img-responsive"), "method");
                echo "
                ";
            }
            // line 19
            echo "            </div>
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
        // line 21
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 21,  119 => 19,  113 => 17,  107 => 15,  104 => 14,  102 => 13,  95 => 12,  92 => 11,  90 => 9,  89 => 8,  87 => 7,  84 => 6,  81 => 5,  64 => 4,  61 => 3,  58 => 2,  19 => 1,);
    }
}
/* {% embed 'modules/partials/base_module.html.twig' %}*/
/*     {% block module_content %}*/
/*         <div class="row">*/
/*         {% for item in items %}*/
/*             {% set values = item %}*/
/*             {% if(instanceof(values, '\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode')) %}*/
/*                 {% set values = {*/
/*                   'image': item.getParameter('image'),*/
/*                   'attributes': parse_attributes(item.getParameter('attributes')),*/
/*                 } %}*/
/*             {% endif %}*/
/*             <div class="item-image {{ values.attributes.class }}" {% include 'partials/_attributes.html.twig' with {'attributes': values.attributes, 'ignore': ['class']} %}>*/
/*                 {% set images_page = grav.page.find('/images') %}*/
/*                 {% if (values.image|split('.')[1] == 'svg') %}*/
/*                 {{ images_page.media.files[values.image] }}*/
/*                 {% else %}*/
/*                 {{ images_page.media.images[values.image].html('', '', 'img-responsive') }}*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*     {% endblock %}*/
/* {% endembed %}*/
/* */
