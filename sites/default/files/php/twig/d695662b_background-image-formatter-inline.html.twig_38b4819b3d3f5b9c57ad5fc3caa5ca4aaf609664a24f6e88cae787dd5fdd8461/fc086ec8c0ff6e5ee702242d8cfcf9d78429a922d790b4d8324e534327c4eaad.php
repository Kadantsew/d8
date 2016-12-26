<?php

/* modules/contrib/background_image_formatter/templates/background-image-formatter-inline.html.twig */
class __TwigTemplate_783ca18a251de9ce402b6d1a4abb8aaccb5adc79dce24c5c3a6d436844b65ed8 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 11
        echo "<div class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["background_image_selector"]) ? $context["background_image_selector"] : null), "html", null, true));
        echo "\" style=\"background-image: url('";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image_uri"]) ? $context["image_uri"] : null), "html", null, true));
        echo "');\">
  &nbsp;
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/background_image_formatter/templates/background-image-formatter-inline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default template implementation to display the background inline field.*/
/*  **/
/*  * Available variables:*/
/*  * - background_image_selector: The css selector.*/
/*  * - image_uri: The absolute url to the image.*/
/*  *//* */
/* #}*/
/* <div class="{{ background_image_selector }}" style="background-image: url('{{ image_uri }}');">*/
/*   &nbsp;*/
/* </div>*/
/* */
