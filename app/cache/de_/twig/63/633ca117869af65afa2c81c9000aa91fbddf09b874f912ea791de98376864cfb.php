<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_3917d55bc35a1f01dc99fdcb823dfce4761e94fce74dcdbbee265ad9fe7302ae extends Twig_Template
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
        $__internal_b9279b4c3e846c0c58603d42ffcee7a64631bbdc8de00b614a6539ebe06b9c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9279b4c3e846c0c58603d42ffcee7a64631bbdc8de00b614a6539ebe06b9c68->enter($__internal_b9279b4c3e846c0c58603d42ffcee7a64631bbdc8de00b614a6539ebe06b9c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b9279b4c3e846c0c58603d42ffcee7a64631bbdc8de00b614a6539ebe06b9c68->leave($__internal_b9279b4c3e846c0c58603d42ffcee7a64631bbdc8de00b614a6539ebe06b9c68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
