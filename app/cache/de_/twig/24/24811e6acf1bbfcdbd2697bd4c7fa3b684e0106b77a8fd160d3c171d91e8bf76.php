<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6f1d7b69904630e89a18bdedb5d50187e28b0690f866fe05ab4605c4f30dd48c extends Twig_Template
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
        $__internal_099222de9c930462287ecb400462706e013714d3cb408c96da3f0b2ea9e40d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099222de9c930462287ecb400462706e013714d3cb408c96da3f0b2ea9e40d17->enter($__internal_099222de9c930462287ecb400462706e013714d3cb408c96da3f0b2ea9e40d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_099222de9c930462287ecb400462706e013714d3cb408c96da3f0b2ea9e40d17->leave($__internal_099222de9c930462287ecb400462706e013714d3cb408c96da3f0b2ea9e40d17_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e0c20ccce22db6dc22f0ceb13d2fb44d2146323feab6564c24092e9b9b8cb0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c20ccce22db6dc22f0ceb13d2fb44d2146323feab6564c24092e9b9b8cb0b2->enter($__internal_e0c20ccce22db6dc22f0ceb13d2fb44d2146323feab6564c24092e9b9b8cb0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e0c20ccce22db6dc22f0ceb13d2fb44d2146323feab6564c24092e9b9b8cb0b2->leave($__internal_e0c20ccce22db6dc22f0ceb13d2fb44d2146323feab6564c24092e9b9b8cb0b2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_770a2c96acb88d3728af8aaee7fcd899991551f1e4e6aa7ab08d8eed80556a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770a2c96acb88d3728af8aaee7fcd899991551f1e4e6aa7ab08d8eed80556a92->enter($__internal_770a2c96acb88d3728af8aaee7fcd899991551f1e4e6aa7ab08d8eed80556a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_770a2c96acb88d3728af8aaee7fcd899991551f1e4e6aa7ab08d8eed80556a92->leave($__internal_770a2c96acb88d3728af8aaee7fcd899991551f1e4e6aa7ab08d8eed80556a92_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4a7f6927eec7b912e19105e4ff8498a23218edd173327358f9cb82a12ce97828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7f6927eec7b912e19105e4ff8498a23218edd173327358f9cb82a12ce97828->enter($__internal_4a7f6927eec7b912e19105e4ff8498a23218edd173327358f9cb82a12ce97828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_4a7f6927eec7b912e19105e4ff8498a23218edd173327358f9cb82a12ce97828->leave($__internal_4a7f6927eec7b912e19105e4ff8498a23218edd173327358f9cb82a12ce97828_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
