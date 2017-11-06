<?php

/* @Page:/apps/www/grav/plugins-sticky/error/pages */
class __TwigTemplate_c321886e4b4f80cf08e2c1d7da7a401512f618d2db9a9a2d0932fd40b25f75ed extends Twig_Template
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
        echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE");
    }

    public function getTemplateName()
    {
        return "@Page:/apps/www/grav/plugins-sticky/error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}*/
