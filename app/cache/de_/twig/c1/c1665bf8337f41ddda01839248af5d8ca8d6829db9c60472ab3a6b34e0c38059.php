<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_99d766d2857dcee158c63b753400de26e19c733c94f9db9372c0ac588df05897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfd00e577de27e665d7afb8a2432994123c46d3ec9bedc798523a095c9640b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd00e577de27e665d7afb8a2432994123c46d3ec9bedc798523a095c9640b48->enter($__internal_cfd00e577de27e665d7afb8a2432994123c46d3ec9bedc798523a095c9640b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cfd00e577de27e665d7afb8a2432994123c46d3ec9bedc798523a095c9640b48->leave($__internal_cfd00e577de27e665d7afb8a2432994123c46d3ec9bedc798523a095c9640b48_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2ea3a63ad8210d3542d7752333e589a8142fe972fa14755be3bdf33261f84201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea3a63ad8210d3542d7752333e589a8142fe972fa14755be3bdf33261f84201->enter($__internal_2ea3a63ad8210d3542d7752333e589a8142fe972fa14755be3bdf33261f84201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_2ea3a63ad8210d3542d7752333e589a8142fe972fa14755be3bdf33261f84201->leave($__internal_2ea3a63ad8210d3542d7752333e589a8142fe972fa14755be3bdf33261f84201_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_88909c155fb520a6c01d58cdf456053687b25e4192b1e7a010dae1082480be81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88909c155fb520a6c01d58cdf456053687b25e4192b1e7a010dae1082480be81->enter($__internal_88909c155fb520a6c01d58cdf456053687b25e4192b1e7a010dae1082480be81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_88909c155fb520a6c01d58cdf456053687b25e4192b1e7a010dae1082480be81->leave($__internal_88909c155fb520a6c01d58cdf456053687b25e4192b1e7a010dae1082480be81_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0f48988f4bdcbbfbfafcb3fc0eacc6ae0a81799e06774d07f4b4ffeae01d112e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f48988f4bdcbbfbfafcb3fc0eacc6ae0a81799e06774d07f4b4ffeae01d112e->enter($__internal_0f48988f4bdcbbfbfafcb3fc0eacc6ae0a81799e06774d07f4b4ffeae01d112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        
        $__internal_0f48988f4bdcbbfbfafcb3fc0eacc6ae0a81799e06774d07f4b4ffeae01d112e->leave($__internal_0f48988f4bdcbbfbfafcb3fc0eacc6ae0a81799e06774d07f4b4ffeae01d112e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
