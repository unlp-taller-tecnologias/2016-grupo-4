<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e19928073ef9b03de10ece285107048302bbc85d98ccd4720329a75b3c098b02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_cfb6b63c453b4d1b6daeab788119f04ec68a0148201678338ead70296f9e492d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb6b63c453b4d1b6daeab788119f04ec68a0148201678338ead70296f9e492d->enter($__internal_cfb6b63c453b4d1b6daeab788119f04ec68a0148201678338ead70296f9e492d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfb6b63c453b4d1b6daeab788119f04ec68a0148201678338ead70296f9e492d->leave($__internal_cfb6b63c453b4d1b6daeab788119f04ec68a0148201678338ead70296f9e492d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_188208ff19ac42f66407f5db98bfc06a089e1d6f29efcc722193e44d4c3dcd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188208ff19ac42f66407f5db98bfc06a089e1d6f29efcc722193e44d4c3dcd17->enter($__internal_188208ff19ac42f66407f5db98bfc06a089e1d6f29efcc722193e44d4c3dcd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:checkEmail.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_188208ff19ac42f66407f5db98bfc06a089e1d6f29efcc722193e44d4c3dcd17->leave($__internal_188208ff19ac42f66407f5db98bfc06a089e1d6f29efcc722193e44d4c3dcd17_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
