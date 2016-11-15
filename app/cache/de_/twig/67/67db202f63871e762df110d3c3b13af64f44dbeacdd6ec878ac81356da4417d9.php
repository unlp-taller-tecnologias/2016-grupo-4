<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_6cec14d50b1668faca6c75aa66133078e09e87a2063a9344c1678620c30a2686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_116e43ccbbfaee39cf3d272c3bc6ed9faa331ca9c664fb92342a4b8350e3e718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116e43ccbbfaee39cf3d272c3bc6ed9faa331ca9c664fb92342a4b8350e3e718->enter($__internal_116e43ccbbfaee39cf3d272c3bc6ed9faa331ca9c664fb92342a4b8350e3e718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_116e43ccbbfaee39cf3d272c3bc6ed9faa331ca9c664fb92342a4b8350e3e718->leave($__internal_116e43ccbbfaee39cf3d272c3bc6ed9faa331ca9c664fb92342a4b8350e3e718_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07b24d3d0442d3e81b1ed0c15a4f0b1a85501ed4faf73c12d84f12620edfd9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b24d3d0442d3e81b1ed0c15a4f0b1a85501ed4faf73c12d84f12620edfd9e1->enter($__internal_07b24d3d0442d3e81b1ed0c15a4f0b1a85501ed4faf73c12d84f12620edfd9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_07b24d3d0442d3e81b1ed0c15a4f0b1a85501ed4faf73c12d84f12620edfd9e1->leave($__internal_07b24d3d0442d3e81b1ed0c15a4f0b1a85501ed4faf73c12d84f12620edfd9e1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
