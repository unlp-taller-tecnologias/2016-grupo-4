<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3b4dbecf18ff0191466fa0d7f98991e9795f7bff975014f5ee43e8659c65a966 extends Twig_Template
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
        $__internal_967662e2225e0005246c1cc206a4ff429d75179b94137c0236fd7ccc7637b664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967662e2225e0005246c1cc206a4ff429d75179b94137c0236fd7ccc7637b664->enter($__internal_967662e2225e0005246c1cc206a4ff429d75179b94137c0236fd7ccc7637b664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_967662e2225e0005246c1cc206a4ff429d75179b94137c0236fd7ccc7637b664->leave($__internal_967662e2225e0005246c1cc206a4ff429d75179b94137c0236fd7ccc7637b664_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
