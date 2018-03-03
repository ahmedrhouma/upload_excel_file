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
        $__internal_2304a7eb5413ebe60d4ba8a63fc1095a24c5f365386185ba8ae3488623b11f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2304a7eb5413ebe60d4ba8a63fc1095a24c5f365386185ba8ae3488623b11f08->enter($__internal_2304a7eb5413ebe60d4ba8a63fc1095a24c5f365386185ba8ae3488623b11f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6b927c3643767b1ad78e9983602b1f03e62cf2d9fd9f4e221dfaf78d2c3af075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b927c3643767b1ad78e9983602b1f03e62cf2d9fd9f4e221dfaf78d2c3af075->enter($__internal_6b927c3643767b1ad78e9983602b1f03e62cf2d9fd9f4e221dfaf78d2c3af075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2304a7eb5413ebe60d4ba8a63fc1095a24c5f365386185ba8ae3488623b11f08->leave($__internal_2304a7eb5413ebe60d4ba8a63fc1095a24c5f365386185ba8ae3488623b11f08_prof);

        
        $__internal_6b927c3643767b1ad78e9983602b1f03e62cf2d9fd9f4e221dfaf78d2c3af075->leave($__internal_6b927c3643767b1ad78e9983602b1f03e62cf2d9fd9f4e221dfaf78d2c3af075_prof);

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
