<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_00283caa55c511d25affc25c88bc12c5db59ec92c6b6c8d0c9a83088e4437ea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_60be3bba7f9c9a141fb7752f8d6e54787608d62fb74aa7d477d5d95334663db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60be3bba7f9c9a141fb7752f8d6e54787608d62fb74aa7d477d5d95334663db1->enter($__internal_60be3bba7f9c9a141fb7752f8d6e54787608d62fb74aa7d477d5d95334663db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60be3bba7f9c9a141fb7752f8d6e54787608d62fb74aa7d477d5d95334663db1->leave($__internal_60be3bba7f9c9a141fb7752f8d6e54787608d62fb74aa7d477d5d95334663db1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e1aeaee9ee65bd7ffcb029816cbeb31c6005820b887b743fee30d06852c142a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1aeaee9ee65bd7ffcb029816cbeb31c6005820b887b743fee30d06852c142a->enter($__internal_2e1aeaee9ee65bd7ffcb029816cbeb31c6005820b887b743fee30d06852c142a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_2e1aeaee9ee65bd7ffcb029816cbeb31c6005820b887b743fee30d06852c142a->leave($__internal_2e1aeaee9ee65bd7ffcb029816cbeb31c6005820b887b743fee30d06852c142a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
