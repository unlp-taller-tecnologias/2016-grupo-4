<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_aefc4ed9a76745e4942ad1c40e8211b430c6b7492a05ef7e4e52fdf1ffb8b4d8 extends Twig_Template
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
        $__internal_d0a9f5ed79859e7bd1ec157eeed25d91e2e17f03cdc43b443a6055e625a84b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a9f5ed79859e7bd1ec157eeed25d91e2e17f03cdc43b443a6055e625a84b76->enter($__internal_d0a9f5ed79859e7bd1ec157eeed25d91e2e17f03cdc43b443a6055e625a84b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d0a9f5ed79859e7bd1ec157eeed25d91e2e17f03cdc43b443a6055e625a84b76->leave($__internal_d0a9f5ed79859e7bd1ec157eeed25d91e2e17f03cdc43b443a6055e625a84b76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
