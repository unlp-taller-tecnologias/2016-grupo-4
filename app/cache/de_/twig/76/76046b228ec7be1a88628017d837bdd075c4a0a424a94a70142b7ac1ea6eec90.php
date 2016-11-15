<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_4a42aa099470479fd00603046210a68f1d12f3bb5e7f46df2c8aee29eeabfd92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_71452fc28e176a7ec9cfb4ce542b4fafbfd9aa88564441bf942e315df9c7c18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71452fc28e176a7ec9cfb4ce542b4fafbfd9aa88564441bf942e315df9c7c18e->enter($__internal_71452fc28e176a7ec9cfb4ce542b4fafbfd9aa88564441bf942e315df9c7c18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71452fc28e176a7ec9cfb4ce542b4fafbfd9aa88564441bf942e315df9c7c18e->leave($__internal_71452fc28e176a7ec9cfb4ce542b4fafbfd9aa88564441bf942e315df9c7c18e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74b1dd331651da55b2456274a58ae1f50ac84eb0dbe6de2a38e3aa53715b2c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b1dd331651da55b2456274a58ae1f50ac84eb0dbe6de2a38e3aa53715b2c35->enter($__internal_74b1dd331651da55b2456274a58ae1f50ac84eb0dbe6de2a38e3aa53715b2c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_74b1dd331651da55b2456274a58ae1f50ac84eb0dbe6de2a38e3aa53715b2c35->leave($__internal_74b1dd331651da55b2456274a58ae1f50ac84eb0dbe6de2a38e3aa53715b2c35_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
