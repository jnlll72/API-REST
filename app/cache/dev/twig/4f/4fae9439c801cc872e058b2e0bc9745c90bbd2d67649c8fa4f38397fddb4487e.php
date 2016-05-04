<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_979e7926f90f11d443aca819f9f471e786b9783928bcff0c3d6a7d4bdac768bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17c272c136dff6d83761781812cf0c7ad81078eac651d7f66679cde192b74cc0 = $this->env->getExtension("native_profiler");
        $__internal_17c272c136dff6d83761781812cf0c7ad81078eac651d7f66679cde192b74cc0->enter($__internal_17c272c136dff6d83761781812cf0c7ad81078eac651d7f66679cde192b74cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c272c136dff6d83761781812cf0c7ad81078eac651d7f66679cde192b74cc0->leave($__internal_17c272c136dff6d83761781812cf0c7ad81078eac651d7f66679cde192b74cc0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec31219366de40ca6e1d6fdca147286cffed74431b5f90a280990685cc12ef72 = $this->env->getExtension("native_profiler");
        $__internal_ec31219366de40ca6e1d6fdca147286cffed74431b5f90a280990685cc12ef72->enter($__internal_ec31219366de40ca6e1d6fdca147286cffed74431b5f90a280990685cc12ef72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ec31219366de40ca6e1d6fdca147286cffed74431b5f90a280990685cc12ef72->leave($__internal_ec31219366de40ca6e1d6fdca147286cffed74431b5f90a280990685cc12ef72_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88878c30488a38e1f91af3c15eb0318a3ab3c05c385913e35932c135d3cc1bb8 = $this->env->getExtension("native_profiler");
        $__internal_88878c30488a38e1f91af3c15eb0318a3ab3c05c385913e35932c135d3cc1bb8->enter($__internal_88878c30488a38e1f91af3c15eb0318a3ab3c05c385913e35932c135d3cc1bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_88878c30488a38e1f91af3c15eb0318a3ab3c05c385913e35932c135d3cc1bb8->leave($__internal_88878c30488a38e1f91af3c15eb0318a3ab3c05c385913e35932c135d3cc1bb8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15605b1970250faa475b2448f37fe3821a52e259b27de1d8970a5716af36dd17 = $this->env->getExtension("native_profiler");
        $__internal_15605b1970250faa475b2448f37fe3821a52e259b27de1d8970a5716af36dd17->enter($__internal_15605b1970250faa475b2448f37fe3821a52e259b27de1d8970a5716af36dd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_15605b1970250faa475b2448f37fe3821a52e259b27de1d8970a5716af36dd17->leave($__internal_15605b1970250faa475b2448f37fe3821a52e259b27de1d8970a5716af36dd17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
