<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_abdb88e6d67b6610afb46b40733cb83865ea47a67f0eed3e45f82e789260e510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2599c9195ee4e183dff752b7f5de3735dbe3c5a606b8a034e63b5d4935615b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2599c9195ee4e183dff752b7f5de3735dbe3c5a606b8a034e63b5d4935615b1->enter($__internal_b2599c9195ee4e183dff752b7f5de3735dbe3c5a606b8a034e63b5d4935615b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b2599c9195ee4e183dff752b7f5de3735dbe3c5a606b8a034e63b5d4935615b1->leave($__internal_b2599c9195ee4e183dff752b7f5de3735dbe3c5a606b8a034e63b5d4935615b1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
