<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8dea0865c27551e81c4769a0f9816a3920b398a75a9924e68acb27b56f2310f5 extends Twig_Template
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
        $__internal_fcbfcce970d231a7044917aa6472dd625c87ec7916ee8e84f95fa1d7854098e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbfcce970d231a7044917aa6472dd625c87ec7916ee8e84f95fa1d7854098e4->enter($__internal_fcbfcce970d231a7044917aa6472dd625c87ec7916ee8e84f95fa1d7854098e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_28a3b271138ecad2bc3fa71a51ecb5db08b6fef09c2fbce71f9ba2a5e061db93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a3b271138ecad2bc3fa71a51ecb5db08b6fef09c2fbce71f9ba2a5e061db93->enter($__internal_28a3b271138ecad2bc3fa71a51ecb5db08b6fef09c2fbce71f9ba2a5e061db93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fcbfcce970d231a7044917aa6472dd625c87ec7916ee8e84f95fa1d7854098e4->leave($__internal_fcbfcce970d231a7044917aa6472dd625c87ec7916ee8e84f95fa1d7854098e4_prof);

        
        $__internal_28a3b271138ecad2bc3fa71a51ecb5db08b6fef09c2fbce71f9ba2a5e061db93->leave($__internal_28a3b271138ecad2bc3fa71a51ecb5db08b6fef09c2fbce71f9ba2a5e061db93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
