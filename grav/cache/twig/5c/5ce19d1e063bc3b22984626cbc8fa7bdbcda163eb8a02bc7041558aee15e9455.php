<?php

/* partials/profile.html.twig */
class __TwigTemplate_7e36e50d616900d229c5b91542d41f912fe1e7e1d8705e04bdb4bebd8d97e1d2 extends Twig_Template
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
        echo "<div class=\"row\">
  <div class=\"columns profile\">
      <div class=\"columns small-8\">
          <a href=\"http://twitter.com/";
        // line 4
        echo trim($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "twitter", array()), "@");
        echo "\">
            <h1 class=\"dark\">";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
        echo "</h1>
          </a>
          <p>";
        // line 7
        echo $this->env->getExtension('GravTwigExtension')->translate("SITE.DESCRIPTION");
        echo "</p>
          <button class=\"button default hollow\">
              <a href=\"http://twitter.com/";
        // line 9
        echo trim($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "twitter", array()), "@");
        echo "\"><i class=\"fa fa-twitter\"></i> Follow</a>
          </button>
      </div>
      <div class=\"columns small-4\">
        <a href=\"http://twitter.com/";
        // line 13
        echo trim($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "twitter", array()), "@");
        echo "\">
            <img class=\"profile--avatar\" src=\"";
        // line 14
        echo (isset($context["avatar_url"]) ? $context["avatar_url"] : null);
        echo "\">
        </a>
      </div>
  </div>
  <div class=\"columns small-12\">
    <hr>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  45 => 13,  38 => 9,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/*   <div class="columns profile">*/
/*       <div class="columns small-8">*/
/*           <a href="http://twitter.com/{{ theme_config.social.twitter|trim('@') }}">*/
/*             <h1 class="dark">{{ site.author.name }}</h1>*/
/*           </a>*/
/*           <p>{{ 'SITE.DESCRIPTION'|t }}</p>*/
/*           <button class="button default hollow">*/
/*               <a href="http://twitter.com/{{ theme_config.social.twitter|trim('@') }}"><i class="fa fa-twitter"></i> Follow</a>*/
/*           </button>*/
/*       </div>*/
/*       <div class="columns small-4">*/
/*         <a href="http://twitter.com/{{ theme_config.social.twitter|trim('@') }}">*/
/*             <img class="profile--avatar" src="{{ avatar_url}}">*/
/*         </a>*/
/*       </div>*/
/*   </div>*/
/*   <div class="columns small-12">*/
/*     <hr>*/
/*   </div>*/
/* </div>*/
/* */
