<?php

/* partials/open-graph.html.twig */
class __TwigTemplate_b33ca1b40b683545a785db6c21fce9c23dde14ee730fcd454790c595e1c5ca75 extends Twig_Template
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
        echo "<meta
  property=\"og:type\"
  content=\"business.business\">
<meta
  property=\"og:title\"
  content=\"";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " ";
            echo (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array(), "any", false, true), "seperator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array(), "any", false, true), "seperator", array()), "|")) : ("|"));
            echo " ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "\">
<meta
  property=\"og:url\"
  content=\"";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\">
<meta
  property=\"og:image\"
  content=\"";
        // line 12
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://dist/images/og.jpg");
        echo "\">
<meta
  property=\"og:description\"
  content=\"";
        // line 15
        if ( !$this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "metadata", array()), "description", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
        } else {
            echo $this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "metadata", array()), "description", array());
        }
        echo "\">

";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "generall", array()), "opengraph", array())) {
            // line 18
            echo "  <meta
    property=\"business:contact_data:street_address\"
    content=\"";
            // line 20
            echo $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "opengraph", array()), "street_address", array());
            echo "\">
  <meta
    property=\"business:contact_data:locality\"
    content=\"";
            // line 23
            echo $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "opengraph", array()), "locality", array());
            echo "\">
  <meta
    property=\"business:contact_data:region\"
    content=\"";
            // line 26
            echo $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "opengraph", array()), "region", array());
            echo "\">
  <meta
    property=\"business:contact_data:postal_code\"
    content=\"";
            // line 29
            echo $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "opengraph", array()), "postal_code", array());
            echo "\">
  <meta
    property=\"business:contact_data:country_name\"
    content=\"";
            // line 32
            echo $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "opengraph", array()), "country_name", array());
            echo "\">
";
        }
    }

    public function getTemplateName()
    {
        return "partials/open-graph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  83 => 29,  77 => 26,  71 => 23,  65 => 20,  61 => 18,  59 => 17,  50 => 15,  44 => 12,  38 => 9,  26 => 6,  19 => 1,);
    }
}
/* <meta*/
/*   property="og:type"*/
/*   content="business.business">*/
/* <meta*/
/*   property="og:title"*/
/*   content="{% if header.title %}{{ header.title|e('html') }} {{ theme.generall.seperator|default('|') }} {% endif %}{{ site.title|e('html') }}">*/
/* <meta*/
/*   property="og:url"*/
/*   content="{{ page.url(true) }}">*/
/* <meta*/
/*   property="og:image"*/
/*   content="{{ url('theme://dist/images/og.jpg') }}">*/
/* <meta*/
/*   property="og:description"*/
/*   content="{% if not header.metadata.description %}{{ header.title }}{% else %}{{ header.metadata.description }}{% endif %}">*/
/* */
/* {% if theme.generall.opengraph %}*/
/*   <meta*/
/*     property="business:contact_data:street_address"*/
/*     content="{{ theme.opengraph.street_address }}">*/
/*   <meta*/
/*     property="business:contact_data:locality"*/
/*     content="{{ theme.opengraph.locality }}">*/
/*   <meta*/
/*     property="business:contact_data:region"*/
/*     content="{{ theme.opengraph.region }}">*/
/*   <meta*/
/*     property="business:contact_data:postal_code"*/
/*     content="{{ theme.opengraph.postal_code }}">*/
/*   <meta*/
/*     property="business:contact_data:country_name"*/
/*     content="{{ theme.opengraph.country_name }}">*/
/* {% endif %}*/
/* */
