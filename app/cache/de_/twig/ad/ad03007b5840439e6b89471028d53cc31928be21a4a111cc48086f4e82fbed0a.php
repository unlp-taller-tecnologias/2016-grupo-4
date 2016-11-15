<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_67dc146b5b9b22118688850a1cde966d1e8ef99d271668ee7151cb926b810e0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_739ff9f0f85879f551f0e0bf5213ea7cb6c36f86d0d721bf72d5810ae0830695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739ff9f0f85879f551f0e0bf5213ea7cb6c36f86d0d721bf72d5810ae0830695->enter($__internal_739ff9f0f85879f551f0e0bf5213ea7cb6c36f86d0d721bf72d5810ae0830695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_739ff9f0f85879f551f0e0bf5213ea7cb6c36f86d0d721bf72d5810ae0830695->leave($__internal_739ff9f0f85879f551f0e0bf5213ea7cb6c36f86d0d721bf72d5810ae0830695_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ee80e5dfbf9f78094131b500036593cc4c0736fa8df069332ca3aac6d46fc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee80e5dfbf9f78094131b500036593cc4c0736fa8df069332ca3aac6d46fc36->enter($__internal_7ee80e5dfbf9f78094131b500036593cc4c0736fa8df069332ca3aac6d46fc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_7ee80e5dfbf9f78094131b500036593cc4c0736fa8df069332ca3aac6d46fc36->leave($__internal_7ee80e5dfbf9f78094131b500036593cc4c0736fa8df069332ca3aac6d46fc36_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4063e3d4c869846daea35d793b8e9ecc92c351dc480ffef0e3e06b64b5dd407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4063e3d4c869846daea35d793b8e9ecc92c351dc480ffef0e3e06b64b5dd407->enter($__internal_f4063e3d4c869846daea35d793b8e9ecc92c351dc480ffef0e3e06b64b5dd407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f4063e3d4c869846daea35d793b8e9ecc92c351dc480ffef0e3e06b64b5dd407->leave($__internal_f4063e3d4c869846daea35d793b8e9ecc92c351dc480ffef0e3e06b64b5dd407_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
