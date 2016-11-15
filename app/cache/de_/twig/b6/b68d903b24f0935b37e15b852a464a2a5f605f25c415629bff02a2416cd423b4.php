<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5a86a185466be6affc052e4b2e796fbe9a1bf7862a3c61f19822839a1ce90c52 extends Twig_Template
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
        $__internal_62bde982e5d5a6e5384312ba949a3ece230c488ecde9666b6fb73d6f43699c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62bde982e5d5a6e5384312ba949a3ece230c488ecde9666b6fb73d6f43699c66->enter($__internal_62bde982e5d5a6e5384312ba949a3ece230c488ecde9666b6fb73d6f43699c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_62bde982e5d5a6e5384312ba949a3ece230c488ecde9666b6fb73d6f43699c66->leave($__internal_62bde982e5d5a6e5384312ba949a3ece230c488ecde9666b6fb73d6f43699c66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
