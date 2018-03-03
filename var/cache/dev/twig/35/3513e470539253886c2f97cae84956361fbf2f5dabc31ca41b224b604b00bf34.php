<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2dd2e0d97fddb681f3625bed7231a56cf467a82cd1332e13cf3c24ff3417bc56 extends Twig_Template
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
        $__internal_485f189cbdfea34b8a31b9c0f7b55cac2e56ffe7ad3e0ba3296bc45af35609c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485f189cbdfea34b8a31b9c0f7b55cac2e56ffe7ad3e0ba3296bc45af35609c0->enter($__internal_485f189cbdfea34b8a31b9c0f7b55cac2e56ffe7ad3e0ba3296bc45af35609c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b3890c6c5c0799c7b80f0cbd0ec6983427d65d0773f5d81632298530affb190f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3890c6c5c0799c7b80f0cbd0ec6983427d65d0773f5d81632298530affb190f->enter($__internal_b3890c6c5c0799c7b80f0cbd0ec6983427d65d0773f5d81632298530affb190f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_485f189cbdfea34b8a31b9c0f7b55cac2e56ffe7ad3e0ba3296bc45af35609c0->leave($__internal_485f189cbdfea34b8a31b9c0f7b55cac2e56ffe7ad3e0ba3296bc45af35609c0_prof);

        
        $__internal_b3890c6c5c0799c7b80f0cbd0ec6983427d65d0773f5d81632298530affb190f->leave($__internal_b3890c6c5c0799c7b80f0cbd0ec6983427d65d0773f5d81632298530affb190f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
