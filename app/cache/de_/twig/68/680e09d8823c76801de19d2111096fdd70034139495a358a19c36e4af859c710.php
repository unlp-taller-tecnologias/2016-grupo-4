<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e365354b5e12a1d64830ae0663ccc4b684e81383059633696f984a28c33a377b extends Twig_Template
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
        $__internal_728392fa09c6c58c8cc33ec4353e3e82097ba70dfdcc20aeb68cf4ecc19cc04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728392fa09c6c58c8cc33ec4353e3e82097ba70dfdcc20aeb68cf4ecc19cc04f->enter($__internal_728392fa09c6c58c8cc33ec4353e3e82097ba70dfdcc20aeb68cf4ecc19cc04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_728392fa09c6c58c8cc33ec4353e3e82097ba70dfdcc20aeb68cf4ecc19cc04f->leave($__internal_728392fa09c6c58c8cc33ec4353e3e82097ba70dfdcc20aeb68cf4ecc19cc04f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
