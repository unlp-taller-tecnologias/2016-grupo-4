<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ffd4e5454ec134993d680f7465bb1939f51654e9c21c978c4c2cd2e4140ab438 extends Twig_Template
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
        $__internal_59bca28c7f4dfa08a92d8426942ffc4182d4dc84f7b285df96c9b34a7e5801f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bca28c7f4dfa08a92d8426942ffc4182d4dc84f7b285df96c9b34a7e5801f1->enter($__internal_59bca28c7f4dfa08a92d8426942ffc4182d4dc84f7b285df96c9b34a7e5801f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_59bca28c7f4dfa08a92d8426942ffc4182d4dc84f7b285df96c9b34a7e5801f1->leave($__internal_59bca28c7f4dfa08a92d8426942ffc4182d4dc84f7b285df96c9b34a7e5801f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
