<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5bac4df1372e0a754273f890da7834f6d8376e256808e59b7aa7dfea0f1c4945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_34caa6b88909acfca4e38fccdf2c56080ee6dd0503acec6eb9a011345471c476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34caa6b88909acfca4e38fccdf2c56080ee6dd0503acec6eb9a011345471c476->enter($__internal_34caa6b88909acfca4e38fccdf2c56080ee6dd0503acec6eb9a011345471c476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34caa6b88909acfca4e38fccdf2c56080ee6dd0503acec6eb9a011345471c476->leave($__internal_34caa6b88909acfca4e38fccdf2c56080ee6dd0503acec6eb9a011345471c476_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ae60d242773c2cf4e90d21ad84004d5425a9785749797d4bb94d67a004b043d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae60d242773c2cf4e90d21ad84004d5425a9785749797d4bb94d67a004b043d->enter($__internal_5ae60d242773c2cf4e90d21ad84004d5425a9785749797d4bb94d67a004b043d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5ae60d242773c2cf4e90d21ad84004d5425a9785749797d4bb94d67a004b043d->leave($__internal_5ae60d242773c2cf4e90d21ad84004d5425a9785749797d4bb94d67a004b043d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
