<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5a6223115306e6ed776887d1d9307cb57d6005d0c86810e54ee72334531f3c77 extends Twig_Template
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
        $__internal_53e1ab1f36cf8c46e9111334a0ef6186cbe90b9380d6ecc370689068030d416d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e1ab1f36cf8c46e9111334a0ef6186cbe90b9380d6ecc370689068030d416d->enter($__internal_53e1ab1f36cf8c46e9111334a0ef6186cbe90b9380d6ecc370689068030d416d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_589dc32a40a001acd0270eaac35da319f6ea636c03ec7579e5714a5c4cf1ae84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589dc32a40a001acd0270eaac35da319f6ea636c03ec7579e5714a5c4cf1ae84->enter($__internal_589dc32a40a001acd0270eaac35da319f6ea636c03ec7579e5714a5c4cf1ae84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_53e1ab1f36cf8c46e9111334a0ef6186cbe90b9380d6ecc370689068030d416d->leave($__internal_53e1ab1f36cf8c46e9111334a0ef6186cbe90b9380d6ecc370689068030d416d_prof);

        
        $__internal_589dc32a40a001acd0270eaac35da319f6ea636c03ec7579e5714a5c4cf1ae84->leave($__internal_589dc32a40a001acd0270eaac35da319f6ea636c03ec7579e5714a5c4cf1ae84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
