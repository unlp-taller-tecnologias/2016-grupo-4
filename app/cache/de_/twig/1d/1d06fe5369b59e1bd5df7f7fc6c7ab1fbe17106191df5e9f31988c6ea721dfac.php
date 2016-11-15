<?php

/* base.html.twig */
class __TwigTemplate_b78b4c091403525bb8850b68df086d151765bf68b87e777dc9b294b78ca359b4 extends Twig_Template
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
        $__internal_7c4fc1a42495c24c57ac4deeda5ea782574646238aeeda465ad116956315fc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4fc1a42495c24c57ac4deeda5ea782574646238aeeda465ad116956315fc91->enter($__internal_7c4fc1a42495c24c57ac4deeda5ea782574646238aeeda465ad116956315fc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7c4fc1a42495c24c57ac4deeda5ea782574646238aeeda465ad116956315fc91->leave($__internal_7c4fc1a42495c24c57ac4deeda5ea782574646238aeeda465ad116956315fc91_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0041ab4b40a957ca97bc44f51d3fd3c609010f9de3ccd787ccdb9dc11518912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0041ab4b40a957ca97bc44f51d3fd3c609010f9de3ccd787ccdb9dc11518912->enter($__internal_e0041ab4b40a957ca97bc44f51d3fd3c609010f9de3ccd787ccdb9dc11518912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_e0041ab4b40a957ca97bc44f51d3fd3c609010f9de3ccd787ccdb9dc11518912->leave($__internal_e0041ab4b40a957ca97bc44f51d3fd3c609010f9de3ccd787ccdb9dc11518912_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e813332dd91e7a900098393c1a86b61ced07cbd2170c627983666a53cee0af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e813332dd91e7a900098393c1a86b61ced07cbd2170c627983666a53cee0af7->enter($__internal_2e813332dd91e7a900098393c1a86b61ced07cbd2170c627983666a53cee0af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_2e813332dd91e7a900098393c1a86b61ced07cbd2170c627983666a53cee0af7->leave($__internal_2e813332dd91e7a900098393c1a86b61ced07cbd2170c627983666a53cee0af7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec351de6df76e8d712e3a35fec76babe9dd1b799d457b745f030fa83340597f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec351de6df76e8d712e3a35fec76babe9dd1b799d457b745f030fa83340597f3->enter($__internal_ec351de6df76e8d712e3a35fec76babe9dd1b799d457b745f030fa83340597f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_ec351de6df76e8d712e3a35fec76babe9dd1b799d457b745f030fa83340597f3->leave($__internal_ec351de6df76e8d712e3a35fec76babe9dd1b799d457b745f030fa83340597f3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7032db96e02809ae1ac09c6fd1eee28ea73ec4d8a2659299173a69a387223f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7032db96e02809ae1ac09c6fd1eee28ea73ec4d8a2659299173a69a387223f04->enter($__internal_7032db96e02809ae1ac09c6fd1eee28ea73ec4d8a2659299173a69a387223f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_7032db96e02809ae1ac09c6fd1eee28ea73ec4d8a2659299173a69a387223f04->leave($__internal_7032db96e02809ae1ac09c6fd1eee28ea73ec4d8a2659299173a69a387223f04_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp\\www\\cenexa\\app\\Resources\\views\\base.html.twig");
    }
}
