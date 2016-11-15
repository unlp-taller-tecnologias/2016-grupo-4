<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b0e944f146ab3222b70066f6beaf90f07035baff7c296e4079dee4cabcb0594c extends Twig_Template
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
        $__internal_7443bd8b27a787c185bd818dd57525dca94f2cf4185cec586e4569b9a7b72eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7443bd8b27a787c185bd818dd57525dca94f2cf4185cec586e4569b9a7b72eb4->enter($__internal_7443bd8b27a787c185bd818dd57525dca94f2cf4185cec586e4569b9a7b72eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7443bd8b27a787c185bd818dd57525dca94f2cf4185cec586e4569b9a7b72eb4->leave($__internal_7443bd8b27a787c185bd818dd57525dca94f2cf4185cec586e4569b9a7b72eb4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c61e14d5612a5bc72756b4f22e613feafdc31444854cc08c6d6a90a7671735ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61e14d5612a5bc72756b4f22e613feafdc31444854cc08c6d6a90a7671735ba->enter($__internal_c61e14d5612a5bc72756b4f22e613feafdc31444854cc08c6d6a90a7671735ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_c61e14d5612a5bc72756b4f22e613feafdc31444854cc08c6d6a90a7671735ba->leave($__internal_c61e14d5612a5bc72756b4f22e613feafdc31444854cc08c6d6a90a7671735ba_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_300a235c5a9bd827f7959a18511d61b86e20f45e8996144161a5264bbff7de9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300a235c5a9bd827f7959a18511d61b86e20f45e8996144161a5264bbff7de9a->enter($__internal_300a235c5a9bd827f7959a18511d61b86e20f45e8996144161a5264bbff7de9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_300a235c5a9bd827f7959a18511d61b86e20f45e8996144161a5264bbff7de9a->leave($__internal_300a235c5a9bd827f7959a18511d61b86e20f45e8996144161a5264bbff7de9a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0618bccb2f6794011593ac602f5413c743b8cc0fd467e1be479810093bcfab1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0618bccb2f6794011593ac602f5413c743b8cc0fd467e1be479810093bcfab1d->enter($__internal_0618bccb2f6794011593ac602f5413c743b8cc0fd467e1be479810093bcfab1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_0618bccb2f6794011593ac602f5413c743b8cc0fd467e1be479810093bcfab1d->leave($__internal_0618bccb2f6794011593ac602f5413c743b8cc0fd467e1be479810093bcfab1d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
