<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_95141f8d61c6dcad806768c0abc7afdd9ad62a2d887a60c86f74f816ec3bdf69 extends Twig_Template
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
        $__internal_bef801e24a04dcf198f586e28caf5b3fb986293f04c141a73e77bf66c4537c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef801e24a04dcf198f586e28caf5b3fb986293f04c141a73e77bf66c4537c07->enter($__internal_bef801e24a04dcf198f586e28caf5b3fb986293f04c141a73e77bf66c4537c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_adf2c8e2216f1d67855b3d75a470b8d4625480c79b37095c7b4c3ffdcdc1376a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf2c8e2216f1d67855b3d75a470b8d4625480c79b37095c7b4c3ffdcdc1376a->enter($__internal_adf2c8e2216f1d67855b3d75a470b8d4625480c79b37095c7b4c3ffdcdc1376a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_bef801e24a04dcf198f586e28caf5b3fb986293f04c141a73e77bf66c4537c07->leave($__internal_bef801e24a04dcf198f586e28caf5b3fb986293f04c141a73e77bf66c4537c07_prof);

        
        $__internal_adf2c8e2216f1d67855b3d75a470b8d4625480c79b37095c7b4c3ffdcdc1376a->leave($__internal_adf2c8e2216f1d67855b3d75a470b8d4625480c79b37095c7b4c3ffdcdc1376a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
