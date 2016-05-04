<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_6f216823c133e304ee13f417224288199747c3a81ebc83ff3f64ab21df065ab7 extends Twig_Template
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
        $__internal_0c82980c72eff55cf9a8ee4cae425dbf9377a6a95bf76d85c7e912e06628898a = $this->env->getExtension("native_profiler");
        $__internal_0c82980c72eff55cf9a8ee4cae425dbf9377a6a95bf76d85c7e912e06628898a->enter($__internal_0c82980c72eff55cf9a8ee4cae425dbf9377a6a95bf76d85c7e912e06628898a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0c82980c72eff55cf9a8ee4cae425dbf9377a6a95bf76d85c7e912e06628898a->leave($__internal_0c82980c72eff55cf9a8ee4cae425dbf9377a6a95bf76d85c7e912e06628898a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
