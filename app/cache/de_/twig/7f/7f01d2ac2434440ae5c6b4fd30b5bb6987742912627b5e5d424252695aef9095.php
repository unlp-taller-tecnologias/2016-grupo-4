<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_f9f730a272bdb639a6d692914715509c0ff2ac0c4c2565c97e07060346f9bf0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_8d9dbaeab987e45ca4fb5a1b31f4f000ad2299ba09c0e0fd58544f0f17539872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9dbaeab987e45ca4fb5a1b31f4f000ad2299ba09c0e0fd58544f0f17539872->enter($__internal_8d9dbaeab987e45ca4fb5a1b31f4f000ad2299ba09c0e0fd58544f0f17539872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d9dbaeab987e45ca4fb5a1b31f4f000ad2299ba09c0e0fd58544f0f17539872->leave($__internal_8d9dbaeab987e45ca4fb5a1b31f4f000ad2299ba09c0e0fd58544f0f17539872_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f383b19a9ac9dc9641a33533b1a93da4bfa92def5e6606565fe0bee74ce75e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f383b19a9ac9dc9641a33533b1a93da4bfa92def5e6606565fe0bee74ce75e6a->enter($__internal_f383b19a9ac9dc9641a33533b1a93da4bfa92def5e6606565fe0bee74ce75e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f383b19a9ac9dc9641a33533b1a93da4bfa92def5e6606565fe0bee74ce75e6a->leave($__internal_f383b19a9ac9dc9641a33533b1a93da4bfa92def5e6606565fe0bee74ce75e6a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
", "FOSUserBundle:Resetting:checkEmail.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
