<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_ad133a533605c3b39e335115c0639b4714d8d0d84e963f9b731c1b2c9753a883 extends Twig_Template
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
        $__internal_bf6c0cc9fd25f332be4d3990a3dc5f6835ed1f7b65587c1f882170ae7bf1ae89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6c0cc9fd25f332be4d3990a3dc5f6835ed1f7b65587c1f882170ae7bf1ae89->enter($__internal_bf6c0cc9fd25f332be4d3990a3dc5f6835ed1f7b65587c1f882170ae7bf1ae89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_bf6c0cc9fd25f332be4d3990a3dc5f6835ed1f7b65587c1f882170ae7bf1ae89->leave($__internal_bf6c0cc9fd25f332be4d3990a3dc5f6835ed1f7b65587c1f882170ae7bf1ae89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
