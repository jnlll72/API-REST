<?php

/* base.html.twig */
class __TwigTemplate_765d4cf5be6f73a242d511031cd2309de259a76f1855a3bf7d569c9a7e8f4976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef853127ef51ff29b545efe7df777b68442092c1f5a8183f912d882a4857e259 = $this->env->getExtension("native_profiler");
        $__internal_ef853127ef51ff29b545efe7df777b68442092c1f5a8183f912d882a4857e259->enter($__internal_ef853127ef51ff29b545efe7df777b68442092c1f5a8183f912d882a4857e259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ef853127ef51ff29b545efe7df777b68442092c1f5a8183f912d882a4857e259->leave($__internal_ef853127ef51ff29b545efe7df777b68442092c1f5a8183f912d882a4857e259_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1df95564c599d0e4214723e30cdc678e15643b3e07a987cfb5fd31f07ee5204 = $this->env->getExtension("native_profiler");
        $__internal_c1df95564c599d0e4214723e30cdc678e15643b3e07a987cfb5fd31f07ee5204->enter($__internal_c1df95564c599d0e4214723e30cdc678e15643b3e07a987cfb5fd31f07ee5204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c1df95564c599d0e4214723e30cdc678e15643b3e07a987cfb5fd31f07ee5204->leave($__internal_c1df95564c599d0e4214723e30cdc678e15643b3e07a987cfb5fd31f07ee5204_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07889211d8e3774dad6e5d71d74b8251ccd0178cbbeadfacf3a01f5664f4c82c = $this->env->getExtension("native_profiler");
        $__internal_07889211d8e3774dad6e5d71d74b8251ccd0178cbbeadfacf3a01f5664f4c82c->enter($__internal_07889211d8e3774dad6e5d71d74b8251ccd0178cbbeadfacf3a01f5664f4c82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_07889211d8e3774dad6e5d71d74b8251ccd0178cbbeadfacf3a01f5664f4c82c->leave($__internal_07889211d8e3774dad6e5d71d74b8251ccd0178cbbeadfacf3a01f5664f4c82c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_37faf080506525041143471796577344e36e6e5c803fa172403b8b957dbcf61d = $this->env->getExtension("native_profiler");
        $__internal_37faf080506525041143471796577344e36e6e5c803fa172403b8b957dbcf61d->enter($__internal_37faf080506525041143471796577344e36e6e5c803fa172403b8b957dbcf61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37faf080506525041143471796577344e36e6e5c803fa172403b8b957dbcf61d->leave($__internal_37faf080506525041143471796577344e36e6e5c803fa172403b8b957dbcf61d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1a6d09df9e0df06cad602638236dd65d32fe09866269d72e3165322ab20a9e8 = $this->env->getExtension("native_profiler");
        $__internal_e1a6d09df9e0df06cad602638236dd65d32fe09866269d72e3165322ab20a9e8->enter($__internal_e1a6d09df9e0df06cad602638236dd65d32fe09866269d72e3165322ab20a9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e1a6d09df9e0df06cad602638236dd65d32fe09866269d72e3165322ab20a9e8->leave($__internal_e1a6d09df9e0df06cad602638236dd65d32fe09866269d72e3165322ab20a9e8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
