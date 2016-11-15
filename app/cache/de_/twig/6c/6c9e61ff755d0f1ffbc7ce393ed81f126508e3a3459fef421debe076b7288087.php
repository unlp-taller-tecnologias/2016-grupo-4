<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e4566df66585d0d953248dce6d76ba69b0e23149a9b49d6f4aae49a6d57d59dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_8cead4dbab419b220ea220594290c3210a4b641886a8e0e2296d2b58fb1ae385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cead4dbab419b220ea220594290c3210a4b641886a8e0e2296d2b58fb1ae385->enter($__internal_8cead4dbab419b220ea220594290c3210a4b641886a8e0e2296d2b58fb1ae385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cead4dbab419b220ea220594290c3210a4b641886a8e0e2296d2b58fb1ae385->leave($__internal_8cead4dbab419b220ea220594290c3210a4b641886a8e0e2296d2b58fb1ae385_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1bff4a60a6fafc14318dc59d296471fb4665b435990b3a87b1d6cb27b2a5dfa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bff4a60a6fafc14318dc59d296471fb4665b435990b3a87b1d6cb27b2a5dfa7->enter($__internal_1bff4a60a6fafc14318dc59d296471fb4665b435990b3a87b1d6cb27b2a5dfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_1bff4a60a6fafc14318dc59d296471fb4665b435990b3a87b1d6cb27b2a5dfa7->leave($__internal_1bff4a60a6fafc14318dc59d296471fb4665b435990b3a87b1d6cb27b2a5dfa7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19c1afabccf330ddc060fa1f27f5bc4abc9720ce802af40b9d4af43791ab61a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c1afabccf330ddc060fa1f27f5bc4abc9720ce802af40b9d4af43791ab61a4->enter($__internal_19c1afabccf330ddc060fa1f27f5bc4abc9720ce802af40b9d4af43791ab61a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_19c1afabccf330ddc060fa1f27f5bc4abc9720ce802af40b9d4af43791ab61a4->leave($__internal_19c1afabccf330ddc060fa1f27f5bc4abc9720ce802af40b9d4af43791ab61a4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12983903d7e78d95a643a25a87ecfa9be2e7500b8436caca5a4a6b33454bc7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12983903d7e78d95a643a25a87ecfa9be2e7500b8436caca5a4a6b33454bc7cc->enter($__internal_12983903d7e78d95a643a25a87ecfa9be2e7500b8436caca5a4a6b33454bc7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_12983903d7e78d95a643a25a87ecfa9be2e7500b8436caca5a4a6b33454bc7cc->leave($__internal_12983903d7e78d95a643a25a87ecfa9be2e7500b8436caca5a4a6b33454bc7cc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
