<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_eb6df98f0f59d9931e3d240029c74d920335c7ff1b676836303f51e968377516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad9bdc00b3101733a095f5a3311f9f5bbbac6242c559a6b67a955574416434cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9bdc00b3101733a095f5a3311f9f5bbbac6242c559a6b67a955574416434cb->enter($__internal_ad9bdc00b3101733a095f5a3311f9f5bbbac6242c559a6b67a955574416434cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ad9bdc00b3101733a095f5a3311f9f5bbbac6242c559a6b67a955574416434cb->leave($__internal_ad9bdc00b3101733a095f5a3311f9f5bbbac6242c559a6b67a955574416434cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
