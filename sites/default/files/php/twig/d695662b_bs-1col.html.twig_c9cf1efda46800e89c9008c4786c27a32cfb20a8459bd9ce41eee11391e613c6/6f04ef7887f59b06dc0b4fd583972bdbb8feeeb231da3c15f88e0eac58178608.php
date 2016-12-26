<?php

/* modules/contrib/bootstrap_layouts/templates/3.0.0/bs-1col.html.twig */
class __TwigTemplate_09dd37e88a0616f1639c7c6de6dc2e4c877750c904d261bb23c643955d352c4c extends Twig_Template
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

        // line 19
        echo "<";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper"]) ? $context["wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
        echo "
  <";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "wrapper", array()), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "attributes", array()), "html", null, true));
        echo ">
    ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "content", array()), "html", null, true));
        echo "
  </";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["main"]) ? $context["main"] : null), "wrapper", array()), "html", null, true));
        echo ">
</";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["wrapper"]) ? $context["wrapper"] : null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/bootstrap_layouts/templates/3.0.0/bs-1col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  62 => 23,  58 => 22,  53 => 21,  49 => 20,  43 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bootstrap Layouts: "1 Column" template.*/
/*  **/
/*  * Available layout variables:*/
/*  * - wrapper: Wrapper element for the layout container.*/
/*  * - attributes: Wrapper attributes for the layout container.*/
/*  **/
/*  * Available region variables:*/
/*  * - main*/
/*  **/
/*  * Each region variable contains the following properties:*/
/*  * - wrapper: The HTML element to use to wrap this region.*/
/*  * - attributes: The HTML attributes to use on the wrapper for this region.*/
/*  * - content: The content to go inside the wrapper for this region.*/
/*  *//* */
/* #}*/
/* <{{ wrapper }}{{ attributes }}>*/
/*   {{ title_suffix.contextual_links }}*/
/*   <{{ main.wrapper }}{{ main.attributes }}>*/
/*     {{ main.content }}*/
/*   </{{ main.wrapper }}>*/
/* </{{ wrapper }}>*/
/* */
