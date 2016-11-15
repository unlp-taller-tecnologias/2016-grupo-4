<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_de6220575438bb9cbd23e48518c416d499a7d279d3cb0b208b9f1521c2c73fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_e9752c4cccbee3d0cf5f973200cd62f7daa5102b4b781172c1e84594d14f9129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9752c4cccbee3d0cf5f973200cd62f7daa5102b4b781172c1e84594d14f9129->enter($__internal_e9752c4cccbee3d0cf5f973200cd62f7daa5102b4b781172c1e84594d14f9129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9752c4cccbee3d0cf5f973200cd62f7daa5102b4b781172c1e84594d14f9129->leave($__internal_e9752c4cccbee3d0cf5f973200cd62f7daa5102b4b781172c1e84594d14f9129_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6fb25469c694d6b9be0d9f51fdc183dcd09790c2858a2af2b5bd426e4b383564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb25469c694d6b9be0d9f51fdc183dcd09790c2858a2af2b5bd426e4b383564->enter($__internal_6fb25469c694d6b9be0d9f51fdc183dcd09790c2858a2af2b5bd426e4b383564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6fb25469c694d6b9be0d9f51fdc183dcd09790c2858a2af2b5bd426e4b383564->leave($__internal_6fb25469c694d6b9be0d9f51fdc183dcd09790c2858a2af2b5bd426e4b383564_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
