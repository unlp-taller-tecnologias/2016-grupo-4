<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b6d850397d9a9822cfc7d36aa0f87fdf82c4c7612b787a5d1302ad13c50ec69d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72d29e0afb1233ec707ff1a43068f123b690692ecc28ad1b7a4584bab7bc74fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d29e0afb1233ec707ff1a43068f123b690692ecc28ad1b7a4584bab7bc74fa->enter($__internal_72d29e0afb1233ec707ff1a43068f123b690692ecc28ad1b7a4584bab7bc74fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_72d29e0afb1233ec707ff1a43068f123b690692ecc28ad1b7a4584bab7bc74fa->leave($__internal_72d29e0afb1233ec707ff1a43068f123b690692ecc28ad1b7a4584bab7bc74fa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c1b6439066c554c608e040528e51a423795f77f16f16fba845601c93b4b226f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1b6439066c554c608e040528e51a423795f77f16f16fba845601c93b4b226f->enter($__internal_6c1b6439066c554c608e040528e51a423795f77f16f16fba845601c93b4b226f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        echo "";
        
        $__internal_6c1b6439066c554c608e040528e51a423795f77f16f16fba845601c93b4b226f->leave($__internal_6c1b6439066c554c608e040528e51a423795f77f16f16fba845601c93b4b226f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
