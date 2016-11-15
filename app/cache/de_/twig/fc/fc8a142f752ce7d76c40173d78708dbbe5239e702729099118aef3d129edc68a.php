<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_a9aaa52431333fe6afb423b659269483f8a93bab5d9e767ba6504173573a7a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_51c1cae262bda32491df5b59b1967e85db2a44b6ba22b3c9d02eff9017006832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c1cae262bda32491df5b59b1967e85db2a44b6ba22b3c9d02eff9017006832->enter($__internal_51c1cae262bda32491df5b59b1967e85db2a44b6ba22b3c9d02eff9017006832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51c1cae262bda32491df5b59b1967e85db2a44b6ba22b3c9d02eff9017006832->leave($__internal_51c1cae262bda32491df5b59b1967e85db2a44b6ba22b3c9d02eff9017006832_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dff78e5c58ede5596daca3def77741c253b6f265fc4f922f6118bfad9869423f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff78e5c58ede5596daca3def77741c253b6f265fc4f922f6118bfad9869423f->enter($__internal_dff78e5c58ede5596daca3def77741c253b6f265fc4f922f6118bfad9869423f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dff78e5c58ede5596daca3def77741c253b6f265fc4f922f6118bfad9869423f->leave($__internal_dff78e5c58ede5596daca3def77741c253b6f265fc4f922f6118bfad9869423f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
