<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8de3616d63dd02ebdd7588647daefb01355a3019789b9e61e4bbfca3bdb7a102 extends Twig_Template
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
        $__internal_ce2264115b76bc13ef88b17d00c764b65520ea6d69d8272a5cc5ce86f0a33a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2264115b76bc13ef88b17d00c764b65520ea6d69d8272a5cc5ce86f0a33a41->enter($__internal_ce2264115b76bc13ef88b17d00c764b65520ea6d69d8272a5cc5ce86f0a33a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ce2264115b76bc13ef88b17d00c764b65520ea6d69d8272a5cc5ce86f0a33a41->leave($__internal_ce2264115b76bc13ef88b17d00c764b65520ea6d69d8272a5cc5ce86f0a33a41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
