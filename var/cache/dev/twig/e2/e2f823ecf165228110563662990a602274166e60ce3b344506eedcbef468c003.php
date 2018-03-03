<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5765ca4c76e276710628fa1debfc7888bd462e00d536ca4afd91f3e51561d4a6 extends Twig_Template
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
        $__internal_05d51133d634fa3a76df36e1b5501cbd835d8702b7889b9dc1d1f612db30dac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d51133d634fa3a76df36e1b5501cbd835d8702b7889b9dc1d1f612db30dac1->enter($__internal_05d51133d634fa3a76df36e1b5501cbd835d8702b7889b9dc1d1f612db30dac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_d1602062622268382b23a6585fb026ea7f30b8bd41110269290af0480bdf706e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1602062622268382b23a6585fb026ea7f30b8bd41110269290af0480bdf706e->enter($__internal_d1602062622268382b23a6585fb026ea7f30b8bd41110269290af0480bdf706e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_05d51133d634fa3a76df36e1b5501cbd835d8702b7889b9dc1d1f612db30dac1->leave($__internal_05d51133d634fa3a76df36e1b5501cbd835d8702b7889b9dc1d1f612db30dac1_prof);

        
        $__internal_d1602062622268382b23a6585fb026ea7f30b8bd41110269290af0480bdf706e->leave($__internal_d1602062622268382b23a6585fb026ea7f30b8bd41110269290af0480bdf706e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
