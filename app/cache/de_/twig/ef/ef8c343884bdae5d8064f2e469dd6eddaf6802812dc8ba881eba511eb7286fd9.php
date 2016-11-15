<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_87dafebe3e54f778330661feaedf9fedb445388099d15ef9b3215cc3dd2634a1 extends Twig_Template
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
        $__internal_1278591cc2aeb400b68e7a89a6a8b83b33b259e87049fc62c4d588aaaecf5239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1278591cc2aeb400b68e7a89a6a8b83b33b259e87049fc62c4d588aaaecf5239->enter($__internal_1278591cc2aeb400b68e7a89a6a8b83b33b259e87049fc62c4d588aaaecf5239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_1278591cc2aeb400b68e7a89a6a8b83b33b259e87049fc62c4d588aaaecf5239->leave($__internal_1278591cc2aeb400b68e7a89a6a8b83b33b259e87049fc62c4d588aaaecf5239_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
