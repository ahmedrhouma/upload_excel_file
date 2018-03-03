<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_483abe94f8c7e7fe784e7d4664e0bedbd6a336cc20b4afa1062db9d19386d707 extends Twig_Template
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
        $__internal_00d5d0a5b17a4fd474c9825b91f9b3b1733bd3e302475f2b1d03bb32d9d25f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d5d0a5b17a4fd474c9825b91f9b3b1733bd3e302475f2b1d03bb32d9d25f37->enter($__internal_00d5d0a5b17a4fd474c9825b91f9b3b1733bd3e302475f2b1d03bb32d9d25f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8559f66252e00d4b5efdf885bb85c655ec4eb15ec1008afdcd4eb69d074637f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8559f66252e00d4b5efdf885bb85c655ec4eb15ec1008afdcd4eb69d074637f3->enter($__internal_8559f66252e00d4b5efdf885bb85c655ec4eb15ec1008afdcd4eb69d074637f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_00d5d0a5b17a4fd474c9825b91f9b3b1733bd3e302475f2b1d03bb32d9d25f37->leave($__internal_00d5d0a5b17a4fd474c9825b91f9b3b1733bd3e302475f2b1d03bb32d9d25f37_prof);

        
        $__internal_8559f66252e00d4b5efdf885bb85c655ec4eb15ec1008afdcd4eb69d074637f3->leave($__internal_8559f66252e00d4b5efdf885bb85c655ec4eb15ec1008afdcd4eb69d074637f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
