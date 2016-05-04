<?php

/* BLOGUsersBundle:Default:users.html.twig */
class __TwigTemplate_46ec97077b9d06f947547db825881c4fb49b44c720a87cd18fc03a2d00b54620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ab4833d2926698b46ed15b201e0d0aa3c2dae87031e41d0d82bc20fe50e6448 = $this->env->getExtension("native_profiler");
        $__internal_3ab4833d2926698b46ed15b201e0d0aa3c2dae87031e41d0d82bc20fe50e6448->enter($__internal_3ab4833d2926698b46ed15b201e0d0aa3c2dae87031e41d0d82bc20fe50e6448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BLOGUsersBundle:Default:users.html.twig"));

        // line 1
        $this->loadTemplate("::base.html.twig", "BLOGUsersBundle:Default:users.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_3ab4833d2926698b46ed15b201e0d0aa3c2dae87031e41d0d82bc20fe50e6448->leave($__internal_3ab4833d2926698b46ed15b201e0d0aa3c2dae87031e41d0d82bc20fe50e6448_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_758db0f642e0af2d7d7a364f68374837f335e7bb54e15707bf87cd46f6f0caa7 = $this->env->getExtension("native_profiler");
        $__internal_758db0f642e0af2d7d7a364f68374837f335e7bb54e15707bf87cd46f6f0caa7->enter($__internal_758db0f642e0af2d7d7a364f68374837f335e7bb54e15707bf87cd46f6f0caa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"http://bootswatch.com/bower_components/bootstrap/dist/css/bootstrap.css\">
";
        
        $__internal_758db0f642e0af2d7d7a364f68374837f335e7bb54e15707bf87cd46f6f0caa7->leave($__internal_758db0f642e0af2d7d7a364f68374837f335e7bb54e15707bf87cd46f6f0caa7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_12a2f83c7e1db6b8974cfa8a2dd14310cdee31773dafbb6c7eaeb3a33fa17a96 = $this->env->getExtension("native_profiler");
        $__internal_12a2f83c7e1db6b8974cfa8a2dd14310cdee31773dafbb6c7eaeb3a33fa17a96->enter($__internal_12a2f83c7e1db6b8974cfa8a2dd14310cdee31773dafbb6c7eaeb3a33fa17a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
        <table class=\"table table-striped\">
            <thead>
                <td>Nom</td>
                <td>Prenom</td>
            </thead>
            <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["key"] => $context["user"]) {
            // line 16
            echo "                <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_12a2f83c7e1db6b8974cfa8a2dd14310cdee31773dafbb6c7eaeb3a33fa17a96->leave($__internal_12a2f83c7e1db6b8974cfa8a2dd14310cdee31773dafbb6c7eaeb3a33fa17a96_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_298c4abeec94752169b2cab5ff70fe8a8b08c3c2b46a244808c03fc978a3e301 = $this->env->getExtension("native_profiler");
        $__internal_298c4abeec94752169b2cab5ff70fe8a8b08c3c2b46a244808c03fc978a3e301->enter($__internal_298c4abeec94752169b2cab5ff70fe8a8b08c3c2b46a244808c03fc978a3e301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_298c4abeec94752169b2cab5ff70fe8a8b08c3c2b46a244808c03fc978a3e301->leave($__internal_298c4abeec94752169b2cab5ff70fe8a8b08c3c2b46a244808c03fc978a3e301_prof);

    }

    public function getTemplateName()
    {
        return "BLOGUsersBundle:Default:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 24,  104 => 23,  94 => 18,  83 => 16,  79 => 15,  70 => 8,  64 => 7,  56 => 4,  50 => 3,  42 => 26,  40 => 23,  37 => 22,  35 => 7,  32 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }
}
/* {% include '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="http://bootswatch.com/bower_components/bootstrap/dist/css/bootstrap.css">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <table class="table table-striped">*/
/*             <thead>*/
/*                 <td>Nom</td>*/
/*                 <td>Prenom</td>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for key, user in users %}*/
/*                 <tr><td>{{ user.nom }}</td><td>{{ user.prenom }}</td></tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* {% endblock %}*/
/* */
/* */
