<?php

/* error.html.twig */
class __TwigTemplate_f57d0b209860f315db2b871f769b03fdb56c94e816266f47784f767f5c295d01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "  <main>
    <section id=\"error\">
      <div class=\"wrapper\">
        <div class=\"overlay\" style=\"background-color: black;\"></div>
        <div class=\"img\" style=\"background-image: url('";
        // line 7
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "background", array()), array(), "array"), "url", array());
        echo "')\"></div>
      </div>
      <div class=\"container\">
        <div class=\"row align-items-center justify-content-center\">
          <div class=\"col-12 text-center\">
            <h1>";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
            <divider></divider>
            <h2>";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</h2>
            <a href=\"";
        // line 15
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\" role=\"link\" class=\"btn light\">Back</a>
          </div>
        </div>
      </div>
    </section>
  </main>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  50 => 14,  45 => 12,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% block body %}*/
/*   <main>*/
/*     <section id="error">*/
/*       <div class="wrapper">*/
/*         <div class="overlay" style="background-color: black;"></div>*/
/*         <div class="img" style="background-image: url('{{ page.media[page.header.background].url }}')"></div>*/
/*       </div>*/
/*       <div class="container">*/
/*         <div class="row align-items-center justify-content-center">*/
/*           <div class="col-12 text-center">*/
/*             <h1>{{ page.header.http_response_code }}</h1>*/
/*             <divider></divider>*/
/*             <h2>{{ page.content }}</h2>*/
/*             <a href="{{ base_url_absolute }}" role="link" class="btn light">Back</a>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </section>*/
/*   </main>*/
/* {% endblock %}*/
/* */
