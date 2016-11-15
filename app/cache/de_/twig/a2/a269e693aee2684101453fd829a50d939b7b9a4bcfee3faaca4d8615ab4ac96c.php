<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_c4cb3a8899801fc1f775aeff32d23a7fa40488268c951013839dccba6052c791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e96c0788713e597e8344cf3a261d64021398b0d585a796e94b9e5006e2de8000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96c0788713e597e8344cf3a261d64021398b0d585a796e94b9e5006e2de8000->enter($__internal_e96c0788713e597e8344cf3a261d64021398b0d585a796e94b9e5006e2de8000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e96c0788713e597e8344cf3a261d64021398b0d585a796e94b9e5006e2de8000->leave($__internal_e96c0788713e597e8344cf3a261d64021398b0d585a796e94b9e5006e2de8000_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab67e475005e8b8c4b894e9e58f536eba24e738e98da393b9d95667b3d6bf473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab67e475005e8b8c4b894e9e58f536eba24e738e98da393b9d95667b3d6bf473->enter($__internal_ab67e475005e8b8c4b894e9e58f536eba24e738e98da393b9d95667b3d6bf473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_ab67e475005e8b8c4b894e9e58f536eba24e738e98da393b9d95667b3d6bf473->leave($__internal_ab67e475005e8b8c4b894e9e58f536eba24e738e98da393b9d95667b3d6bf473_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
