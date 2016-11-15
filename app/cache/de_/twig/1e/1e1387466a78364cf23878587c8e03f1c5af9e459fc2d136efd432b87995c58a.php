<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_9f6cd66e10d3486e3f69f487c2d0d0634e0e44f43704c46582e51c8844d55d8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_9e38131ca0afef24c5b735ec5e5b98e4c16db407bf01f3676da01d4ad0779713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e38131ca0afef24c5b735ec5e5b98e4c16db407bf01f3676da01d4ad0779713->enter($__internal_9e38131ca0afef24c5b735ec5e5b98e4c16db407bf01f3676da01d4ad0779713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e38131ca0afef24c5b735ec5e5b98e4c16db407bf01f3676da01d4ad0779713->leave($__internal_9e38131ca0afef24c5b735ec5e5b98e4c16db407bf01f3676da01d4ad0779713_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e0275d9f81e41f738b445702c5c4bb0ed4439032a2f47ed1356a565b748819b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0275d9f81e41f738b445702c5c4bb0ed4439032a2f47ed1356a565b748819b->enter($__internal_2e0275d9f81e41f738b445702c5c4bb0ed4439032a2f47ed1356a565b748819b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_2e0275d9f81e41f738b445702c5c4bb0ed4439032a2f47ed1356a565b748819b->leave($__internal_2e0275d9f81e41f738b445702c5c4bb0ed4439032a2f47ed1356a565b748819b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
