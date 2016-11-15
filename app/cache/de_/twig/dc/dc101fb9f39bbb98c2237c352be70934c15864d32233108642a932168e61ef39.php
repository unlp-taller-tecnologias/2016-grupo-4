<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_d1bc57cb0e365cca199c0f02b721a0e6d329dda59526a80b7fde1aac76f08912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_fd7f69b76c61b014a4c16509321fd2f9d63361737b20363dc296fa85ac4323bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7f69b76c61b014a4c16509321fd2f9d63361737b20363dc296fa85ac4323bc->enter($__internal_fd7f69b76c61b014a4c16509321fd2f9d63361737b20363dc296fa85ac4323bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd7f69b76c61b014a4c16509321fd2f9d63361737b20363dc296fa85ac4323bc->leave($__internal_fd7f69b76c61b014a4c16509321fd2f9d63361737b20363dc296fa85ac4323bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31768bc0d0584c3519c344d60f86a243ef3f67f73e510c0cbdbd266cd15d69f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31768bc0d0584c3519c344d60f86a243ef3f67f73e510c0cbdbd266cd15d69f0->enter($__internal_31768bc0d0584c3519c344d60f86a243ef3f67f73e510c0cbdbd266cd15d69f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_31768bc0d0584c3519c344d60f86a243ef3f67f73e510c0cbdbd266cd15d69f0->leave($__internal_31768bc0d0584c3519c344d60f86a243ef3f67f73e510c0cbdbd266cd15d69f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
