<?php

/* partials/favicon.html.twig */
class __TwigTemplate_1b4ac66e2d27378b185638878dce35f631fdd0cfac870c10c6463819a26162cb extends Twig_Template
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
        echo "<link
  rel=\"apple-touch-icon\"
  sizes=\"180x180\"
  href=\"";
        // line 4
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://dist/images/favicons/apple-touch-icon.png");
        echo "\">

<link
  rel=\"icon\"
  type=\"image/png\"
  sizes=\"32x32\"
  href=\"";
        // line 10
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://dist/images/favicons/favicon-32x32.png");
        echo "\">

<link
  rel=\"icon\"
  type=\"image/png\"
  sizes=\"192x192\"
  href=\"";
        // line 16
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://dist/images/favicons/android-chrome-192x192.png");
        echo "\">

<link
  rel=\"icon\"
  type=\"image/png\"
  sizes=\"16x16\"
  href=\"";
        // line 22
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://dist/images/favicons/favicon-16x16.png");
        echo "\">

<link
  rel=\"manifest\"
  href=\"";
        // line 26
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://dist/images/favicons/manifest.json");
        echo "\">

<link
  rel=\"mask-icon\"
  href=\"";
        // line 30
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://dist/images/favicons/safari-pinned-tab.svg");
        echo "\" color=\"#000000\">

<meta
  name=\"theme-color\"
  content=\"#ffffff\">
";
    }

    public function getTemplateName()
    {
        return "partials/favicon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  58 => 26,  51 => 22,  42 => 16,  33 => 10,  24 => 4,  19 => 1,);
    }
}
/* <link*/
/*   rel="apple-touch-icon"*/
/*   sizes="180x180"*/
/*   href="{{ url('theme://dist/images/favicons/apple-touch-icon.png') }}">*/
/* */
/* <link*/
/*   rel="icon"*/
/*   type="image/png"*/
/*   sizes="32x32"*/
/*   href="{{ url('theme://dist/images/favicons/favicon-32x32.png') }}">*/
/* */
/* <link*/
/*   rel="icon"*/
/*   type="image/png"*/
/*   sizes="192x192"*/
/*   href="{{ url('theme://dist/images/favicons/android-chrome-192x192.png') }}">*/
/* */
/* <link*/
/*   rel="icon"*/
/*   type="image/png"*/
/*   sizes="16x16"*/
/*   href="{{ url('theme://dist/images/favicons/favicon-16x16.png') }}">*/
/* */
/* <link*/
/*   rel="manifest"*/
/*   href="{{ url('theme://dist/images/favicons/manifest.json') }}">*/
/* */
/* <link*/
/*   rel="mask-icon"*/
/*   href="{{ url('theme://dist/images/favicons/safari-pinned-tab.svg') }}" color="#000000">*/
/* */
/* <meta*/
/*   name="theme-color"*/
/*   content="#ffffff">*/
/* */
