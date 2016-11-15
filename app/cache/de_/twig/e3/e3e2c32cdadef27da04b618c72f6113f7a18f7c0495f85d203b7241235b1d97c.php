<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a1e82049aa333deef8497cf3d813fb44a7dbfb66c1b3a536ca0a7896a79a08d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_4ed635ceaf6aef01f9995efffd99c6b93da5b14be388d33c4fb162fe8fb98f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed635ceaf6aef01f9995efffd99c6b93da5b14be388d33c4fb162fe8fb98f52->enter($__internal_4ed635ceaf6aef01f9995efffd99c6b93da5b14be388d33c4fb162fe8fb98f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ed635ceaf6aef01f9995efffd99c6b93da5b14be388d33c4fb162fe8fb98f52->leave($__internal_4ed635ceaf6aef01f9995efffd99c6b93da5b14be388d33c4fb162fe8fb98f52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9404336dc2f21ab9e4b91a86d1fe1382fbbfd5d5563d198574de278885626ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9404336dc2f21ab9e4b91a86d1fe1382fbbfd5d5563d198574de278885626ffd->enter($__internal_9404336dc2f21ab9e4b91a86d1fe1382fbbfd5d5563d198574de278885626ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9404336dc2f21ab9e4b91a86d1fe1382fbbfd5d5563d198574de278885626ffd->leave($__internal_9404336dc2f21ab9e4b91a86d1fe1382fbbfd5d5563d198574de278885626ffd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11e0c3c67efa64f877d449e1664e8bd8f17fe0181bc412d1cf00276535515c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e0c3c67efa64f877d449e1664e8bd8f17fe0181bc412d1cf00276535515c49->enter($__internal_11e0c3c67efa64f877d449e1664e8bd8f17fe0181bc412d1cf00276535515c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_11e0c3c67efa64f877d449e1664e8bd8f17fe0181bc412d1cf00276535515c49->leave($__internal_11e0c3c67efa64f877d449e1664e8bd8f17fe0181bc412d1cf00276535515c49_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3305358387a0998bd30581dde08352ed3da2f71a2993535b08f90b63cc2a5bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3305358387a0998bd30581dde08352ed3da2f71a2993535b08f90b63cc2a5bc2->enter($__internal_3305358387a0998bd30581dde08352ed3da2f71a2993535b08f90b63cc2a5bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3305358387a0998bd30581dde08352ed3da2f71a2993535b08f90b63cc2a5bc2->leave($__internal_3305358387a0998bd30581dde08352ed3da2f71a2993535b08f90b63cc2a5bc2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
