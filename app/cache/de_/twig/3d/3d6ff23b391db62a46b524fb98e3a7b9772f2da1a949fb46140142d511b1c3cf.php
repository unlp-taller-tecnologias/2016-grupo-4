<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_03f35555f3861104558f7328b73ca0f05958cb012980aae9cf8a24842933472f extends Twig_Template
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
        $__internal_cc7015d2b43b82b220ffc7601c6d1ed4976774751bc81f0e9cbbdfb1ce7edc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7015d2b43b82b220ffc7601c6d1ed4976774751bc81f0e9cbbdfb1ce7edc97->enter($__internal_cc7015d2b43b82b220ffc7601c6d1ed4976774751bc81f0e9cbbdfb1ce7edc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_cc7015d2b43b82b220ffc7601c6d1ed4976774751bc81f0e9cbbdfb1ce7edc97->leave($__internal_cc7015d2b43b82b220ffc7601c6d1ed4976774751bc81f0e9cbbdfb1ce7edc97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\cenexa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
