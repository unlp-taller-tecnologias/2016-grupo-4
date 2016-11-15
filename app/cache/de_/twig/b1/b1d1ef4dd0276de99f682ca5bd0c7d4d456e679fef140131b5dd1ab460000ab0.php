<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_b1ae773fa551beca358c499df6a66d3a255ed31a2bde5ae8d8a910ccfcd180a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_69dc51821cdb7dd4a08365eb45be9b770c50b9ce6c7398f2188918f3650d4c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69dc51821cdb7dd4a08365eb45be9b770c50b9ce6c7398f2188918f3650d4c01->enter($__internal_69dc51821cdb7dd4a08365eb45be9b770c50b9ce6c7398f2188918f3650d4c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69dc51821cdb7dd4a08365eb45be9b770c50b9ce6c7398f2188918f3650d4c01->leave($__internal_69dc51821cdb7dd4a08365eb45be9b770c50b9ce6c7398f2188918f3650d4c01_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_069bfdb6126dec53cb9a5ba1b8344cef9b3a6e411439696061087757774259f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069bfdb6126dec53cb9a5ba1b8344cef9b3a6e411439696061087757774259f2->enter($__internal_069bfdb6126dec53cb9a5ba1b8344cef9b3a6e411439696061087757774259f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_069bfdb6126dec53cb9a5ba1b8344cef9b3a6e411439696061087757774259f2->leave($__internal_069bfdb6126dec53cb9a5ba1b8344cef9b3a6e411439696061087757774259f2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
