<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_c78066047d9fa7ba6404c96bed707bc955df02202d8d004a14d9b356a54bd345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_9fcb184f98dbbad00b18fb89127c79fec8c2dd39d233aeedff9d8370fa1f7877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcb184f98dbbad00b18fb89127c79fec8c2dd39d233aeedff9d8370fa1f7877->enter($__internal_9fcb184f98dbbad00b18fb89127c79fec8c2dd39d233aeedff9d8370fa1f7877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fcb184f98dbbad00b18fb89127c79fec8c2dd39d233aeedff9d8370fa1f7877->leave($__internal_9fcb184f98dbbad00b18fb89127c79fec8c2dd39d233aeedff9d8370fa1f7877_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cafe8eeb7b1087d263d3a90aacf7ce63b34d72485521ddf2893ca005bab3ebed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cafe8eeb7b1087d263d3a90aacf7ce63b34d72485521ddf2893ca005bab3ebed->enter($__internal_cafe8eeb7b1087d263d3a90aacf7ce63b34d72485521ddf2893ca005bab3ebed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_cafe8eeb7b1087d263d3a90aacf7ce63b34d72485521ddf2893ca005bab3ebed->leave($__internal_cafe8eeb7b1087d263d3a90aacf7ce63b34d72485521ddf2893ca005bab3ebed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
