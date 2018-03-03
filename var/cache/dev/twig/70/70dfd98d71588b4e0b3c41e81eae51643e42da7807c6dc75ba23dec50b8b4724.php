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
        $__internal_544cad5d6c2415c9c76e482f973667f47f578c6d54a44aae5c214c1c265c2b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544cad5d6c2415c9c76e482f973667f47f578c6d54a44aae5c214c1c265c2b55->enter($__internal_544cad5d6c2415c9c76e482f973667f47f578c6d54a44aae5c214c1c265c2b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_db072e34ea401f8e8b6dfe27079906cf565b74a8958385f7de234e1dfa8c8050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db072e34ea401f8e8b6dfe27079906cf565b74a8958385f7de234e1dfa8c8050->enter($__internal_db072e34ea401f8e8b6dfe27079906cf565b74a8958385f7de234e1dfa8c8050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_544cad5d6c2415c9c76e482f973667f47f578c6d54a44aae5c214c1c265c2b55->leave($__internal_544cad5d6c2415c9c76e482f973667f47f578c6d54a44aae5c214c1c265c2b55_prof);

        
        $__internal_db072e34ea401f8e8b6dfe27079906cf565b74a8958385f7de234e1dfa8c8050->leave($__internal_db072e34ea401f8e8b6dfe27079906cf565b74a8958385f7de234e1dfa8c8050_prof);

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
