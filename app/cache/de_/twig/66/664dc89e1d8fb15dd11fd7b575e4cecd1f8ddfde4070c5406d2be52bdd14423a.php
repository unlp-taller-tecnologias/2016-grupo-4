<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0c14d6d3f24dd10d04c0929126230f562fc895fabaec52e72339f90c84e45a1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bd791d4e50dffd2c5744551bdf19116d85570c2f0064c93d7cc1e93d823c771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd791d4e50dffd2c5744551bdf19116d85570c2f0064c93d7cc1e93d823c771->enter($__internal_1bd791d4e50dffd2c5744551bdf19116d85570c2f0064c93d7cc1e93d823c771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bd791d4e50dffd2c5744551bdf19116d85570c2f0064c93d7cc1e93d823c771->leave($__internal_1bd791d4e50dffd2c5744551bdf19116d85570c2f0064c93d7cc1e93d823c771_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e32babe0a3b463fedfd977de55c7a9e9a579b00e9871e48a314df1336ea2f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e32babe0a3b463fedfd977de55c7a9e9a579b00e9871e48a314df1336ea2f97->enter($__internal_8e32babe0a3b463fedfd977de55c7a9e9a579b00e9871e48a314df1336ea2f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_8e32babe0a3b463fedfd977de55c7a9e9a579b00e9871e48a314df1336ea2f97->leave($__internal_8e32babe0a3b463fedfd977de55c7a9e9a579b00e9871e48a314df1336ea2f97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd6a1e701fd051785b3cdd24b9a7aab954ed1e003640ccf0f5dc8fbc6d09d34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6a1e701fd051785b3cdd24b9a7aab954ed1e003640ccf0f5dc8fbc6d09d34b->enter($__internal_bd6a1e701fd051785b3cdd24b9a7aab954ed1e003640ccf0f5dc8fbc6d09d34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd6a1e701fd051785b3cdd24b9a7aab954ed1e003640ccf0f5dc8fbc6d09d34b->leave($__internal_bd6a1e701fd051785b3cdd24b9a7aab954ed1e003640ccf0f5dc8fbc6d09d34b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1c4d38c966e697a5fe7afb5984c7cb3b4ec8be6bac30bb586d67e497bd99c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c4d38c966e697a5fe7afb5984c7cb3b4ec8be6bac30bb586d67e497bd99c78->enter($__internal_b1c4d38c966e697a5fe7afb5984c7cb3b4ec8be6bac30bb586d67e497bd99c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b1c4d38c966e697a5fe7afb5984c7cb3b4ec8be6bac30bb586d67e497bd99c78->leave($__internal_b1c4d38c966e697a5fe7afb5984c7cb3b4ec8be6bac30bb586d67e497bd99c78_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
