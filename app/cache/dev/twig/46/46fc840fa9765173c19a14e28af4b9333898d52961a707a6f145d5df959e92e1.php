<?php

/* BLOGUsersBundle:Default:add.html.twig */
class __TwigTemplate_dc9190b3affb1f00ddafd792dfc2bb4d42728fccd4ed6acabe5bc497d861657c extends Twig_Template
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
        $__internal_5b8f59318ea22b94626c55cd34272a095a83d335b9f48da3ff57d1ab5d8d7fa7 = $this->env->getExtension("native_profiler");
        $__internal_5b8f59318ea22b94626c55cd34272a095a83d335b9f48da3ff57d1ab5d8d7fa7->enter($__internal_5b8f59318ea22b94626c55cd34272a095a83d335b9f48da3ff57d1ab5d8d7fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BLOGUsersBundle:Default:add.html.twig"));

        // line 1
        echo "<h3>Formulaire</h3>

<div class=\"well\">
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>";
        
        $__internal_5b8f59318ea22b94626c55cd34272a095a83d335b9f48da3ff57d1ab5d8d7fa7->leave($__internal_5b8f59318ea22b94626c55cd34272a095a83d335b9f48da3ff57d1ab5d8d7fa7_prof);

    }

    public function getTemplateName()
    {
        return "BLOGUsersBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* <h3>Formulaire</h3>*/
/* */
/* <div class="well">*/
/*     {{ form(form) }}*/
/* </div>*/
