<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2002a4fb0c355d53ede6fde3a6d45fef9b20289e7045d76549e91cef2b79c81f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_dab9f14dc522005a4bbdc16022cb13e89dfe5a37f5ba753fd037d8e9f9b2d22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab9f14dc522005a4bbdc16022cb13e89dfe5a37f5ba753fd037d8e9f9b2d22a->enter($__internal_dab9f14dc522005a4bbdc16022cb13e89dfe5a37f5ba753fd037d8e9f9b2d22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dab9f14dc522005a4bbdc16022cb13e89dfe5a37f5ba753fd037d8e9f9b2d22a->leave($__internal_dab9f14dc522005a4bbdc16022cb13e89dfe5a37f5ba753fd037d8e9f9b2d22a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47ae39e50540fcbc9999dd801e21ae4126f46865ca0a1da844186e8b9cc33aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ae39e50540fcbc9999dd801e21ae4126f46865ca0a1da844186e8b9cc33aec->enter($__internal_47ae39e50540fcbc9999dd801e21ae4126f46865ca0a1da844186e8b9cc33aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_47ae39e50540fcbc9999dd801e21ae4126f46865ca0a1da844186e8b9cc33aec->leave($__internal_47ae39e50540fcbc9999dd801e21ae4126f46865ca0a1da844186e8b9cc33aec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
