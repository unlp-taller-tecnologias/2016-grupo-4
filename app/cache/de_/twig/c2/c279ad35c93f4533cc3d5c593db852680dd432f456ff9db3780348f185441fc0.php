<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8de3173eb39733680adbfc92cc72f85295b34e110ad2fda1e3eeeaa30a0d2ab9 extends Twig_Template
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
        $__internal_695aa9613b49c78614f7239af091c8500690f68b80be53667ba38b8833bdb2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695aa9613b49c78614f7239af091c8500690f68b80be53667ba38b8833bdb2ac->enter($__internal_695aa9613b49c78614f7239af091c8500690f68b80be53667ba38b8833bdb2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_695aa9613b49c78614f7239af091c8500690f68b80be53667ba38b8833bdb2ac->leave($__internal_695aa9613b49c78614f7239af091c8500690f68b80be53667ba38b8833bdb2ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
