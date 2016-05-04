<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1bae62f76b6131e54d4fcd6127d6da1abaf6cbb2a1895a0a143db5a2622666a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16d4e4eced2dacf20196df99371e04cb2d192c4e00198af59502966ae8eba7f3 = $this->env->getExtension("native_profiler");
        $__internal_16d4e4eced2dacf20196df99371e04cb2d192c4e00198af59502966ae8eba7f3->enter($__internal_16d4e4eced2dacf20196df99371e04cb2d192c4e00198af59502966ae8eba7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16d4e4eced2dacf20196df99371e04cb2d192c4e00198af59502966ae8eba7f3->leave($__internal_16d4e4eced2dacf20196df99371e04cb2d192c4e00198af59502966ae8eba7f3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d253926d439af3e66ed38d5f55baaf26dde779015dcab54319c224543ff5f8c7 = $this->env->getExtension("native_profiler");
        $__internal_d253926d439af3e66ed38d5f55baaf26dde779015dcab54319c224543ff5f8c7->enter($__internal_d253926d439af3e66ed38d5f55baaf26dde779015dcab54319c224543ff5f8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d253926d439af3e66ed38d5f55baaf26dde779015dcab54319c224543ff5f8c7->leave($__internal_d253926d439af3e66ed38d5f55baaf26dde779015dcab54319c224543ff5f8c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42ecd22934e2bf16fa02c1a4070a71d9f215b275f018c2d7c77f7f61d0b2b040 = $this->env->getExtension("native_profiler");
        $__internal_42ecd22934e2bf16fa02c1a4070a71d9f215b275f018c2d7c77f7f61d0b2b040->enter($__internal_42ecd22934e2bf16fa02c1a4070a71d9f215b275f018c2d7c77f7f61d0b2b040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_42ecd22934e2bf16fa02c1a4070a71d9f215b275f018c2d7c77f7f61d0b2b040->leave($__internal_42ecd22934e2bf16fa02c1a4070a71d9f215b275f018c2d7c77f7f61d0b2b040_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12ed97e19cabff9c1d10f7fce32a7549e6c8d7bb7ad5b0843ea330024a1339ea = $this->env->getExtension("native_profiler");
        $__internal_12ed97e19cabff9c1d10f7fce32a7549e6c8d7bb7ad5b0843ea330024a1339ea->enter($__internal_12ed97e19cabff9c1d10f7fce32a7549e6c8d7bb7ad5b0843ea330024a1339ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_12ed97e19cabff9c1d10f7fce32a7549e6c8d7bb7ad5b0843ea330024a1339ea->leave($__internal_12ed97e19cabff9c1d10f7fce32a7549e6c8d7bb7ad5b0843ea330024a1339ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
