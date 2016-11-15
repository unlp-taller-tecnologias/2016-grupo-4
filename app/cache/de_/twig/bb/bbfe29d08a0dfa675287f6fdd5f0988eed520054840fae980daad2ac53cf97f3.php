<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_58212244301c497a435ac148f29fc47883818cb9af96c18de35bc5421b057a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_9f17722226de60435e5a801df1cf46ccf75de8be07ab09e6f65c51cc4751f754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f17722226de60435e5a801df1cf46ccf75de8be07ab09e6f65c51cc4751f754->enter($__internal_9f17722226de60435e5a801df1cf46ccf75de8be07ab09e6f65c51cc4751f754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f17722226de60435e5a801df1cf46ccf75de8be07ab09e6f65c51cc4751f754->leave($__internal_9f17722226de60435e5a801df1cf46ccf75de8be07ab09e6f65c51cc4751f754_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62b96d7a668e6b979eee9875ea17f22ac0d0790026028b0d0bd2b3409965da59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b96d7a668e6b979eee9875ea17f22ac0d0790026028b0d0bd2b3409965da59->enter($__internal_62b96d7a668e6b979eee9875ea17f22ac0d0790026028b0d0bd2b3409965da59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/ChangePassword/changePassword.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_62b96d7a668e6b979eee9875ea17f22ac0d0790026028b0d0bd2b3409965da59->leave($__internal_62b96d7a668e6b979eee9875ea17f22ac0d0790026028b0d0bd2b3409965da59_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/changePassword.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
