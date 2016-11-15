<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_45bb3f578ee520e3d0d6a1253e9c94601c9967d45db23f5bafc5d728b1aaa299 extends Twig_Template
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
        $__internal_44faa3774723c1e3c15bd19ba814c00a15e992e9b478e5eaf8ef51582bcd8955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44faa3774723c1e3c15bd19ba814c00a15e992e9b478e5eaf8ef51582bcd8955->enter($__internal_44faa3774723c1e3c15bd19ba814c00a15e992e9b478e5eaf8ef51582bcd8955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_44faa3774723c1e3c15bd19ba814c00a15e992e9b478e5eaf8ef51582bcd8955->leave($__internal_44faa3774723c1e3c15bd19ba814c00a15e992e9b478e5eaf8ef51582bcd8955_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
