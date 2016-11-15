<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_e0c6372f98c6f4ade56cd6881e780f650a65c0a80196e9ba36732a507e90896f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_e0c7aa202543a7a73c4ee31590855639246762dcc7ac5d0b8cea81debecae69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c7aa202543a7a73c4ee31590855639246762dcc7ac5d0b8cea81debecae69a->enter($__internal_e0c7aa202543a7a73c4ee31590855639246762dcc7ac5d0b8cea81debecae69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0c7aa202543a7a73c4ee31590855639246762dcc7ac5d0b8cea81debecae69a->leave($__internal_e0c7aa202543a7a73c4ee31590855639246762dcc7ac5d0b8cea81debecae69a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71c3437d278a57374e18903b9e75c96ff8a14080480ef8a1d263a4640f246d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c3437d278a57374e18903b9e75c96ff8a14080480ef8a1d263a4640f246d94->enter($__internal_71c3437d278a57374e18903b9e75c96ff8a14080480ef8a1d263a4640f246d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/checkEmail.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_71c3437d278a57374e18903b9e75c96ff8a14080480ef8a1d263a4640f246d94->leave($__internal_71c3437d278a57374e18903b9e75c96ff8a14080480ef8a1d263a4640f246d94_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/checkEmail.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
