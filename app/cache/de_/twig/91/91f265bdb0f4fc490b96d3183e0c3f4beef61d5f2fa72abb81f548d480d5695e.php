<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_20b95d4294801c27cbbd4b433af6c8bbb6fe58e2f2a57c600bcde492194a1687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a33a19ab535fe155890f6df75e5117a49e1f6d3a7b3d9067380339206c56e2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33a19ab535fe155890f6df75e5117a49e1f6d3a7b3d9067380339206c56e2b2->enter($__internal_a33a19ab535fe155890f6df75e5117a49e1f6d3a7b3d9067380339206c56e2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a33a19ab535fe155890f6df75e5117a49e1f6d3a7b3d9067380339206c56e2b2->leave($__internal_a33a19ab535fe155890f6df75e5117a49e1f6d3a7b3d9067380339206c56e2b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecccc575ff3c59bd2d97802501f6e541dbe0d6826f901d99676a1a4589cddb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecccc575ff3c59bd2d97802501f6e541dbe0d6826f901d99676a1a4589cddb45->enter($__internal_ecccc575ff3c59bd2d97802501f6e541dbe0d6826f901d99676a1a4589cddb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ecccc575ff3c59bd2d97802501f6e541dbe0d6826f901d99676a1a4589cddb45->leave($__internal_ecccc575ff3c59bd2d97802501f6e541dbe0d6826f901d99676a1a4589cddb45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
