<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_bd1c91d27d9e5eba8f55fa3f80723603e5b96de11d5aa892e5e9033c939c65eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_5ba0250a8c57ff7922b5c2430593ece1ce22c8fd028f0e16d502eb57f00b9f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba0250a8c57ff7922b5c2430593ece1ce22c8fd028f0e16d502eb57f00b9f55->enter($__internal_5ba0250a8c57ff7922b5c2430593ece1ce22c8fd028f0e16d502eb57f00b9f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ba0250a8c57ff7922b5c2430593ece1ce22c8fd028f0e16d502eb57f00b9f55->leave($__internal_5ba0250a8c57ff7922b5c2430593ece1ce22c8fd028f0e16d502eb57f00b9f55_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5dad30f14923851149abdfccea5650aa6155e9d37763989c309141c6b5e24ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5dad30f14923851149abdfccea5650aa6155e9d37763989c309141c6b5e24ad->enter($__internal_d5dad30f14923851149abdfccea5650aa6155e9d37763989c309141c6b5e24ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/checkEmail.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d5dad30f14923851149abdfccea5650aa6155e9d37763989c309141c6b5e24ad->leave($__internal_d5dad30f14923851149abdfccea5650aa6155e9d37763989c309141c6b5e24ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "@FOSUser/Resetting/checkEmail.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
