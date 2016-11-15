<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5bd7bc069b97cd30f8d732bbc60c4d3cdb152f7aaa8df9b91651e86c71795e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0248a746040c1d2960b338c95028cb68a7700a657455082dc9a0d11e23a4c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0248a746040c1d2960b338c95028cb68a7700a657455082dc9a0d11e23a4c92->enter($__internal_b0248a746040c1d2960b338c95028cb68a7700a657455082dc9a0d11e23a4c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0248a746040c1d2960b338c95028cb68a7700a657455082dc9a0d11e23a4c92->leave($__internal_b0248a746040c1d2960b338c95028cb68a7700a657455082dc9a0d11e23a4c92_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56846ea42d6d8eaf6bb529c9517ec19a590099ff83ba91a02a60082c131c637f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56846ea42d6d8eaf6bb529c9517ec19a590099ff83ba91a02a60082c131c637f->enter($__internal_56846ea42d6d8eaf6bb529c9517ec19a590099ff83ba91a02a60082c131c637f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_56846ea42d6d8eaf6bb529c9517ec19a590099ff83ba91a02a60082c131c637f->leave($__internal_56846ea42d6d8eaf6bb529c9517ec19a590099ff83ba91a02a60082c131c637f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
