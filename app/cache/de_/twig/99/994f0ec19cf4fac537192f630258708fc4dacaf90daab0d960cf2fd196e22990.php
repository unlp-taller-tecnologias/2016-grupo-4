<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_b51a84db49c55613ac789732cfc8bd9c02e4b3a2833bc1718bea6817ff6d7e41 extends Twig_Template
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
        $__internal_1be7194dff0c45a5c5030df89fc82a1c48496b2d818cc172b104cc13fed3161a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be7194dff0c45a5c5030df89fc82a1c48496b2d818cc172b104cc13fed3161a->enter($__internal_1be7194dff0c45a5c5030df89fc82a1c48496b2d818cc172b104cc13fed3161a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_1be7194dff0c45a5c5030df89fc82a1c48496b2d818cc172b104cc13fed3161a->leave($__internal_1be7194dff0c45a5c5030df89fc82a1c48496b2d818cc172b104cc13fed3161a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
