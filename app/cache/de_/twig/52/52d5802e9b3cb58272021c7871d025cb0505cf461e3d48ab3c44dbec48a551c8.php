<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1cca2705a3517ad835a1319ec2b385d8a7c8ac8229e983acc19593df3b664a62 extends Twig_Template
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
        $__internal_42a1bcd10a46c9ec2ef760062a7d37e89d8e248febdd9bb50eb166cb0ad5d06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a1bcd10a46c9ec2ef760062a7d37e89d8e248febdd9bb50eb166cb0ad5d06e->enter($__internal_42a1bcd10a46c9ec2ef760062a7d37e89d8e248febdd9bb50eb166cb0ad5d06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_42a1bcd10a46c9ec2ef760062a7d37e89d8e248febdd9bb50eb166cb0ad5d06e->leave($__internal_42a1bcd10a46c9ec2ef760062a7d37e89d8e248febdd9bb50eb166cb0ad5d06e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
