<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_017e3b1d2e148b649ea383f594772d6c5e1e777b8142f1d79e54fc37ce91a7da extends Twig_Template
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
        $__internal_d7c4042cfcf8923c12d1fc6fedaabc4f94d7903cdfc27969cd2540050686dc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c4042cfcf8923c12d1fc6fedaabc4f94d7903cdfc27969cd2540050686dc73->enter($__internal_d7c4042cfcf8923c12d1fc6fedaabc4f94d7903cdfc27969cd2540050686dc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d7c4042cfcf8923c12d1fc6fedaabc4f94d7903cdfc27969cd2540050686dc73->leave($__internal_d7c4042cfcf8923c12d1fc6fedaabc4f94d7903cdfc27969cd2540050686dc73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
