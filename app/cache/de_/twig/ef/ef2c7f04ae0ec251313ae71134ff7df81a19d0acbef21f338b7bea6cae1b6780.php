<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_27f7cd6c92425102f897369760e557f1e67084add8d53a974c2068a982c96184 extends Twig_Template
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
        $__internal_19488aa7dc840e7b596c44d4fac1d1a9860cfb263721de2cf5f9f4bf2ceba20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19488aa7dc840e7b596c44d4fac1d1a9860cfb263721de2cf5f9f4bf2ceba20c->enter($__internal_19488aa7dc840e7b596c44d4fac1d1a9860cfb263721de2cf5f9f4bf2ceba20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_19488aa7dc840e7b596c44d4fac1d1a9860cfb263721de2cf5f9f4bf2ceba20c->leave($__internal_19488aa7dc840e7b596c44d4fac1d1a9860cfb263721de2cf5f9f4bf2ceba20c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
