<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0e36bc845fb785c781564bdb32e712f3b0c381c9c9226a9450e3b71a7308cb10 extends Twig_Template
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
        $__internal_0c903ad456e2086fffa79e85cfafb9272a33d641e3ff9860b7c502afe62c7807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c903ad456e2086fffa79e85cfafb9272a33d641e3ff9860b7c502afe62c7807->enter($__internal_0c903ad456e2086fffa79e85cfafb9272a33d641e3ff9860b7c502afe62c7807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7956204aa51080c742c53c8b7828343ce2f9ff28e94ef7ef6d3fd1769c14529d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7956204aa51080c742c53c8b7828343ce2f9ff28e94ef7ef6d3fd1769c14529d->enter($__internal_7956204aa51080c742c53c8b7828343ce2f9ff28e94ef7ef6d3fd1769c14529d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0c903ad456e2086fffa79e85cfafb9272a33d641e3ff9860b7c502afe62c7807->leave($__internal_0c903ad456e2086fffa79e85cfafb9272a33d641e3ff9860b7c502afe62c7807_prof);

        
        $__internal_7956204aa51080c742c53c8b7828343ce2f9ff28e94ef7ef6d3fd1769c14529d->leave($__internal_7956204aa51080c742c53c8b7828343ce2f9ff28e94ef7ef6d3fd1769c14529d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
