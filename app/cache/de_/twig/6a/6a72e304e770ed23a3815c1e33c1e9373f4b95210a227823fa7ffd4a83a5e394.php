<?php

/* ::base.html.twig */
class __TwigTemplate_5b7a73ab72a82a2398ee4facf4aa2a5361eefe5c69299fe82478a9556bf514ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f36ca36561c8d08d403523c04bca05091f88d440bacf5689b67a3b1ba53b7aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36ca36561c8d08d403523c04bca05091f88d440bacf5689b67a3b1ba53b7aa1->enter($__internal_f36ca36561c8d08d403523c04bca05091f88d440bacf5689b67a3b1ba53b7aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f36ca36561c8d08d403523c04bca05091f88d440bacf5689b67a3b1ba53b7aa1->leave($__internal_f36ca36561c8d08d403523c04bca05091f88d440bacf5689b67a3b1ba53b7aa1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db1856185c038ba9d6ea7edf86b686012f638bc5ca6cd119c4ffd1e5e390dce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1856185c038ba9d6ea7edf86b686012f638bc5ca6cd119c4ffd1e5e390dce4->enter($__internal_db1856185c038ba9d6ea7edf86b686012f638bc5ca6cd119c4ffd1e5e390dce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_db1856185c038ba9d6ea7edf86b686012f638bc5ca6cd119c4ffd1e5e390dce4->leave($__internal_db1856185c038ba9d6ea7edf86b686012f638bc5ca6cd119c4ffd1e5e390dce4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_812609381532071228bf91e09f1da399a0f69d7e875986afdb315458b801b4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812609381532071228bf91e09f1da399a0f69d7e875986afdb315458b801b4dc->enter($__internal_812609381532071228bf91e09f1da399a0f69d7e875986afdb315458b801b4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_812609381532071228bf91e09f1da399a0f69d7e875986afdb315458b801b4dc->leave($__internal_812609381532071228bf91e09f1da399a0f69d7e875986afdb315458b801b4dc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c3f7a3b6b0cb42fae3c7f6854f094bf4a77e15ea28ad5549cf57afbba51221f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3f7a3b6b0cb42fae3c7f6854f094bf4a77e15ea28ad5549cf57afbba51221f->enter($__internal_8c3f7a3b6b0cb42fae3c7f6854f094bf4a77e15ea28ad5549cf57afbba51221f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_8c3f7a3b6b0cb42fae3c7f6854f094bf4a77e15ea28ad5549cf57afbba51221f->leave($__internal_8c3f7a3b6b0cb42fae3c7f6854f094bf4a77e15ea28ad5549cf57afbba51221f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bcda22b3e788d0b9b0ea2bc71ddd5891b2b8fbc3bd448faf2704f90d60cb6395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcda22b3e788d0b9b0ea2bc71ddd5891b2b8fbc3bd448faf2704f90d60cb6395->enter($__internal_bcda22b3e788d0b9b0ea2bc71ddd5891b2b8fbc3bd448faf2704f90d60cb6395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_bcda22b3e788d0b9b0ea2bc71ddd5891b2b8fbc3bd448faf2704f90d60cb6395->leave($__internal_bcda22b3e788d0b9b0ea2bc71ddd5891b2b8fbc3bd448faf2704f90d60cb6395_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\cenexa\\app/Resources\\views/base.html.twig");
    }
}
