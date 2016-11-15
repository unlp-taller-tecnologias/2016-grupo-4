<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d5e480b6ee8c24dc1860eb396b30b08c5b79b1319048e8d8d09e92b5138210b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d628e6a13b3f3211237b8e966867169b6c20ad38aa68283ada82d01bb5c76f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d628e6a13b3f3211237b8e966867169b6c20ad38aa68283ada82d01bb5c76f0c->enter($__internal_d628e6a13b3f3211237b8e966867169b6c20ad38aa68283ada82d01bb5c76f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d628e6a13b3f3211237b8e966867169b6c20ad38aa68283ada82d01bb5c76f0c->leave($__internal_d628e6a13b3f3211237b8e966867169b6c20ad38aa68283ada82d01bb5c76f0c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a31516f9fc12e6466c70a4d3ba27d71bec15f0e6443d97eba1a1b338657ca66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31516f9fc12e6466c70a4d3ba27d71bec15f0e6443d97eba1a1b338657ca66c->enter($__internal_a31516f9fc12e6466c70a4d3ba27d71bec15f0e6443d97eba1a1b338657ca66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_a31516f9fc12e6466c70a4d3ba27d71bec15f0e6443d97eba1a1b338657ca66c->leave($__internal_a31516f9fc12e6466c70a4d3ba27d71bec15f0e6443d97eba1a1b338657ca66c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
