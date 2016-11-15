<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_dfe5f2e03579f21c67217f0a403260b7c4e108aebf1573527034226c7a35e7ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_7f60cb106d892c123498afc46e3b18c5a4052c696fa43bc849bc05b40f538531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f60cb106d892c123498afc46e3b18c5a4052c696fa43bc849bc05b40f538531->enter($__internal_7f60cb106d892c123498afc46e3b18c5a4052c696fa43bc849bc05b40f538531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f60cb106d892c123498afc46e3b18c5a4052c696fa43bc849bc05b40f538531->leave($__internal_7f60cb106d892c123498afc46e3b18c5a4052c696fa43bc849bc05b40f538531_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b2d8b7ee01bad84bead5f5252a995a6a13cbbdc1999a2bcc9d0f82302269947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2d8b7ee01bad84bead5f5252a995a6a13cbbdc1999a2bcc9d0f82302269947->enter($__internal_3b2d8b7ee01bad84bead5f5252a995a6a13cbbdc1999a2bcc9d0f82302269947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_3b2d8b7ee01bad84bead5f5252a995a6a13cbbdc1999a2bcc9d0f82302269947->leave($__internal_3b2d8b7ee01bad84bead5f5252a995a6a13cbbdc1999a2bcc9d0f82302269947_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_40ae256c25029c4654e2e650b4f5e683d1d967bc04ca05736183aa828bdf0772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ae256c25029c4654e2e650b4f5e683d1d967bc04ca05736183aa828bdf0772->enter($__internal_40ae256c25029c4654e2e650b4f5e683d1d967bc04ca05736183aa828bdf0772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

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
        
        $__internal_40ae256c25029c4654e2e650b4f5e683d1d967bc04ca05736183aa828bdf0772->leave($__internal_40ae256c25029c4654e2e650b4f5e683d1d967bc04ca05736183aa828bdf0772_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
