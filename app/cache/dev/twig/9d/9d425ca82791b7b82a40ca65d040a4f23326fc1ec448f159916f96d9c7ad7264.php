<?php

/* BLOGUsersBundle:Default:user.html.twig */
class __TwigTemplate_54e2590ada22833649621ec6c0e19e347d2829ce398efecc6d8a234f50bbfc34 extends Twig_Template
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
        $__internal_0da9f14dc132d54e65065e249143f61a68a302f0fa75d6048f99a4cea34b0f8d = $this->env->getExtension("native_profiler");
        $__internal_0da9f14dc132d54e65065e249143f61a68a302f0fa75d6048f99a4cea34b0f8d->enter($__internal_0da9f14dc132d54e65065e249143f61a68a302f0fa75d6048f99a4cea34b0f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BLOGUsersBundle:Default:user.html.twig"));

        // line 1
        echo "ID : ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
Nom : ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "
Prenom : ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        
        $__internal_0da9f14dc132d54e65065e249143f61a68a302f0fa75d6048f99a4cea34b0f8d->leave($__internal_0da9f14dc132d54e65065e249143f61a68a302f0fa75d6048f99a4cea34b0f8d_prof);

    }

    public function getTemplateName()
    {
        return "BLOGUsersBundle:Default:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* ID : {{id}}*/
/* Nom : {{nom}}*/
/* Prenom : {{prenom}}*/
