<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_6e6cd9b6897479cb2710be5a7e5a9306cc53baa2e305d440e64148f0f6b0505d extends Twig_Template
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
        $__internal_e9d4e6a85070dc26c152b946a2fb4b1f2a8e13668efe74e841f305536012fd18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d4e6a85070dc26c152b946a2fb4b1f2a8e13668efe74e841f305536012fd18->enter($__internal_e9d4e6a85070dc26c152b946a2fb4b1f2a8e13668efe74e841f305536012fd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_68c90bb49607815e78fec4587a5db8a9db9601125b62cbb8c5b0051ff103aa77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c90bb49607815e78fec4587a5db8a9db9601125b62cbb8c5b0051ff103aa77->enter($__internal_68c90bb49607815e78fec4587a5db8a9db9601125b62cbb8c5b0051ff103aa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e9d4e6a85070dc26c152b946a2fb4b1f2a8e13668efe74e841f305536012fd18->leave($__internal_e9d4e6a85070dc26c152b946a2fb4b1f2a8e13668efe74e841f305536012fd18_prof);

        
        $__internal_68c90bb49607815e78fec4587a5db8a9db9601125b62cbb8c5b0051ff103aa77->leave($__internal_68c90bb49607815e78fec4587a5db8a9db9601125b62cbb8c5b0051ff103aa77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
