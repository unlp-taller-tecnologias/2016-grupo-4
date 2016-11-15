<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_ecc6a045f3ebcda403aa9c0f85dc6c504de0986bdf3a3ef9d18ed754de753e73 extends Twig_Template
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
        $__internal_2afc751ef7748d4d6ad948de6ae2084bc07a1e99315d0564dec077d5479a10d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afc751ef7748d4d6ad948de6ae2084bc07a1e99315d0564dec077d5479a10d8->enter($__internal_2afc751ef7748d4d6ad948de6ae2084bc07a1e99315d0564dec077d5479a10d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2afc751ef7748d4d6ad948de6ae2084bc07a1e99315d0564dec077d5479a10d8->leave($__internal_2afc751ef7748d4d6ad948de6ae2084bc07a1e99315d0564dec077d5479a10d8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3a3c303275da471c5a95859f1f5cfec056aca97a3c4a633965b4add9af86967f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3c303275da471c5a95859f1f5cfec056aca97a3c4a633965b4add9af86967f->enter($__internal_3a3c303275da471c5a95859f1f5cfec056aca97a3c4a633965b4add9af86967f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3a3c303275da471c5a95859f1f5cfec056aca97a3c4a633965b4add9af86967f->leave($__internal_3a3c303275da471c5a95859f1f5cfec056aca97a3c4a633965b4add9af86967f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6953ff14c27996687ada8b932a0c5bf8b37f03407065a7d974c29e69665b049e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6953ff14c27996687ada8b932a0c5bf8b37f03407065a7d974c29e69665b049e->enter($__internal_6953ff14c27996687ada8b932a0c5bf8b37f03407065a7d974c29e69665b049e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6953ff14c27996687ada8b932a0c5bf8b37f03407065a7d974c29e69665b049e->leave($__internal_6953ff14c27996687ada8b932a0c5bf8b37f03407065a7d974c29e69665b049e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_460ad16f6fe8e187314f34daa7e566c268bac3bde2d2e1687aea28c4747772be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460ad16f6fe8e187314f34daa7e566c268bac3bde2d2e1687aea28c4747772be->enter($__internal_460ad16f6fe8e187314f34daa7e566c268bac3bde2d2e1687aea28c4747772be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        
        $__internal_460ad16f6fe8e187314f34daa7e566c268bac3bde2d2e1687aea28c4747772be->leave($__internal_460ad16f6fe8e187314f34daa7e566c268bac3bde2d2e1687aea28c4747772be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
