<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_65aaaca25f4d0d196b68cbe40905e632176e194dac63a7ba30ade17166208692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_d19e782f23bcc454c7b76e0d36971c9d2a001c4a5d99a797c0f0720afd60fec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19e782f23bcc454c7b76e0d36971c9d2a001c4a5d99a797c0f0720afd60fec3->enter($__internal_d19e782f23bcc454c7b76e0d36971c9d2a001c4a5d99a797c0f0720afd60fec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d19e782f23bcc454c7b76e0d36971c9d2a001c4a5d99a797c0f0720afd60fec3->leave($__internal_d19e782f23bcc454c7b76e0d36971c9d2a001c4a5d99a797c0f0720afd60fec3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb049b1207f8108f7afe534b8008fc3034a84328693288eb6623a25b438080f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb049b1207f8108f7afe534b8008fc3034a84328693288eb6623a25b438080f0->enter($__internal_bb049b1207f8108f7afe534b8008fc3034a84328693288eb6623a25b438080f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_bb049b1207f8108f7afe534b8008fc3034a84328693288eb6623a25b438080f0->leave($__internal_bb049b1207f8108f7afe534b8008fc3034a84328693288eb6623a25b438080f0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
