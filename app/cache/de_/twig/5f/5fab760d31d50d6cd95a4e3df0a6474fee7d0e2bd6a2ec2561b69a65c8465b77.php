<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_7e4f6966824b46de570347ec7e1c2bb78a84cd28e4b7b8b9b7c369f83091f5b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_4f1e1288508fc3bab1b1ed3091d35a4aba94248c0bc5dd0461e5ba574988b613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1e1288508fc3bab1b1ed3091d35a4aba94248c0bc5dd0461e5ba574988b613->enter($__internal_4f1e1288508fc3bab1b1ed3091d35a4aba94248c0bc5dd0461e5ba574988b613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f1e1288508fc3bab1b1ed3091d35a4aba94248c0bc5dd0461e5ba574988b613->leave($__internal_4f1e1288508fc3bab1b1ed3091d35a4aba94248c0bc5dd0461e5ba574988b613_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3148a24d7f25da3b940ea5d5957555c854f6c94bc54fda0305fd72d2b19a6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3148a24d7f25da3b940ea5d5957555c854f6c94bc54fda0305fd72d2b19a6e7->enter($__internal_b3148a24d7f25da3b940ea5d5957555c854f6c94bc54fda0305fd72d2b19a6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_b3148a24d7f25da3b940ea5d5957555c854f6c94bc54fda0305fd72d2b19a6e7->leave($__internal_b3148a24d7f25da3b940ea5d5957555c854f6c94bc54fda0305fd72d2b19a6e7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
