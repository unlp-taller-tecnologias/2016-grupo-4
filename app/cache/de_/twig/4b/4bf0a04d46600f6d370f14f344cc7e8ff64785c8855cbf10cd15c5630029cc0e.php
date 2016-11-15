<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_21555dd18b85418e466510da8426a5746fa425d6f605a444797c9bb6d3723b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_c8044fc467a742a5285d66d8525463b50994e23b0369a9b24ebd74a133251329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8044fc467a742a5285d66d8525463b50994e23b0369a9b24ebd74a133251329->enter($__internal_c8044fc467a742a5285d66d8525463b50994e23b0369a9b24ebd74a133251329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8044fc467a742a5285d66d8525463b50994e23b0369a9b24ebd74a133251329->leave($__internal_c8044fc467a742a5285d66d8525463b50994e23b0369a9b24ebd74a133251329_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7da8b798e36f30ec413b4e29f376d631afe982a1efbf9259bcc68c2fe6af5651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da8b798e36f30ec413b4e29f376d631afe982a1efbf9259bcc68c2fe6af5651->enter($__internal_7da8b798e36f30ec413b4e29f376d631afe982a1efbf9259bcc68c2fe6af5651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7da8b798e36f30ec413b4e29f376d631afe982a1efbf9259bcc68c2fe6af5651->leave($__internal_7da8b798e36f30ec413b4e29f376d631afe982a1efbf9259bcc68c2fe6af5651_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
