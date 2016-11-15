<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_145649ee81a677daac53b4e6ab57770c3267cd7ab8b5117d9f46d30a663e2e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4acaac947f2c0da819c6bc04e36cf7c558c393198984a19c8dd9001a0fbb2c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acaac947f2c0da819c6bc04e36cf7c558c393198984a19c8dd9001a0fbb2c44->enter($__internal_4acaac947f2c0da819c6bc04e36cf7c558c393198984a19c8dd9001a0fbb2c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4acaac947f2c0da819c6bc04e36cf7c558c393198984a19c8dd9001a0fbb2c44->leave($__internal_4acaac947f2c0da819c6bc04e36cf7c558c393198984a19c8dd9001a0fbb2c44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_243378bbbba1497b17d1e5476961963a8f00312185ed2300113175bb68167ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243378bbbba1497b17d1e5476961963a8f00312185ed2300113175bb68167ccf->enter($__internal_243378bbbba1497b17d1e5476961963a8f00312185ed2300113175bb68167ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_243378bbbba1497b17d1e5476961963a8f00312185ed2300113175bb68167ccf->leave($__internal_243378bbbba1497b17d1e5476961963a8f00312185ed2300113175bb68167ccf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
