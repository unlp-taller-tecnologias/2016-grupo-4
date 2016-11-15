<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_280429e54218d0882510d721605e4bf687c4f10016f6ab599f6aca0cfa380d35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdd274782860cf43ba21dd6783856449592bd8d20bc0a3c2aa13529294c5890c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd274782860cf43ba21dd6783856449592bd8d20bc0a3c2aa13529294c5890c->enter($__internal_cdd274782860cf43ba21dd6783856449592bd8d20bc0a3c2aa13529294c5890c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdd274782860cf43ba21dd6783856449592bd8d20bc0a3c2aa13529294c5890c->leave($__internal_cdd274782860cf43ba21dd6783856449592bd8d20bc0a3c2aa13529294c5890c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66c81606fe0113135eae32e33b71f6b234b29ede6f253e970da7e785649183d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c81606fe0113135eae32e33b71f6b234b29ede6f253e970da7e785649183d9->enter($__internal_66c81606fe0113135eae32e33b71f6b234b29ede6f253e970da7e785649183d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_66c81606fe0113135eae32e33b71f6b234b29ede6f253e970da7e785649183d9->leave($__internal_66c81606fe0113135eae32e33b71f6b234b29ede6f253e970da7e785649183d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "C:\\wamp\\www\\cenexa\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
