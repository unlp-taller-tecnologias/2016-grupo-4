<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_41e41386db2f21f75c7369abc41fcae931352eef955753125f4cb6d87c4be9d8 extends Twig_Template
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
        $__internal_674b739135ae516022fa8c2e35e2c69bbc7cb6902d58101b1db5e1c73d812c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674b739135ae516022fa8c2e35e2c69bbc7cb6902d58101b1db5e1c73d812c32->enter($__internal_674b739135ae516022fa8c2e35e2c69bbc7cb6902d58101b1db5e1c73d812c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_674b739135ae516022fa8c2e35e2c69bbc7cb6902d58101b1db5e1c73d812c32->leave($__internal_674b739135ae516022fa8c2e35e2c69bbc7cb6902d58101b1db5e1c73d812c32_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_35ba359d5a24bb466cbb6135a7274e92903831c1a3bd834fec5e1d3488b76d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ba359d5a24bb466cbb6135a7274e92903831c1a3bd834fec5e1d3488b76d4b->enter($__internal_35ba359d5a24bb466cbb6135a7274e92903831c1a3bd834fec5e1d3488b76d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_35ba359d5a24bb466cbb6135a7274e92903831c1a3bd834fec5e1d3488b76d4b->leave($__internal_35ba359d5a24bb466cbb6135a7274e92903831c1a3bd834fec5e1d3488b76d4b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
