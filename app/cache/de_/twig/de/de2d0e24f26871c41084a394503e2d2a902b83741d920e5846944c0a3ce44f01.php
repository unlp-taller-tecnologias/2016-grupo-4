<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c8c205af832472ac06f5a5420d2b79dc0f84cc02a819d2dbd3290cd1e0d174c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_87e649e1f602591eb5dcc1fc0f5c962f2806a5208f57a125e534e71b982c777d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e649e1f602591eb5dcc1fc0f5c962f2806a5208f57a125e534e71b982c777d->enter($__internal_87e649e1f602591eb5dcc1fc0f5c962f2806a5208f57a125e534e71b982c777d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87e649e1f602591eb5dcc1fc0f5c962f2806a5208f57a125e534e71b982c777d->leave($__internal_87e649e1f602591eb5dcc1fc0f5c962f2806a5208f57a125e534e71b982c777d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78e31aa5c71c8ac77506cdee3a494ea01f9e7a404d63fd23d97f7908c37bbd05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e31aa5c71c8ac77506cdee3a494ea01f9e7a404d63fd23d97f7908c37bbd05->enter($__internal_78e31aa5c71c8ac77506cdee3a494ea01f9e7a404d63fd23d97f7908c37bbd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_78e31aa5c71c8ac77506cdee3a494ea01f9e7a404d63fd23d97f7908c37bbd05->leave($__internal_78e31aa5c71c8ac77506cdee3a494ea01f9e7a404d63fd23d97f7908c37bbd05_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_baad04808638dedb315fb8bef984829c3ffb51721de173630d1f79cc87c7c2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baad04808638dedb315fb8bef984829c3ffb51721de173630d1f79cc87c7c2ba->enter($__internal_baad04808638dedb315fb8bef984829c3ffb51721de173630d1f79cc87c7c2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_baad04808638dedb315fb8bef984829c3ffb51721de173630d1f79cc87c7c2ba->leave($__internal_baad04808638dedb315fb8bef984829c3ffb51721de173630d1f79cc87c7c2ba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_be7644e5cbee9418aa01049bf5101cb46767eb8f3c4d8107f978ca936dc1da28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7644e5cbee9418aa01049bf5101cb46767eb8f3c4d8107f978ca936dc1da28->enter($__internal_be7644e5cbee9418aa01049bf5101cb46767eb8f3c4d8107f978ca936dc1da28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_be7644e5cbee9418aa01049bf5101cb46767eb8f3c4d8107f978ca936dc1da28->leave($__internal_be7644e5cbee9418aa01049bf5101cb46767eb8f3c4d8107f978ca936dc1da28_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
