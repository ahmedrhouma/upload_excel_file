<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8fd790ef010d7dd90498f794a0ff0adc6e470cb075af5b68deadc6f957356f95 extends Twig_Template
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
        $__internal_c0c10cef1153bc3e6932d9fb0d011b3e1361ccbcf79fcb31f5a80b3c8c60b801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c10cef1153bc3e6932d9fb0d011b3e1361ccbcf79fcb31f5a80b3c8c60b801->enter($__internal_c0c10cef1153bc3e6932d9fb0d011b3e1361ccbcf79fcb31f5a80b3c8c60b801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4fd081f2f9ac3e5d742aab6f902380e2a8e72a13d95d68276414b22799bca77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd081f2f9ac3e5d742aab6f902380e2a8e72a13d95d68276414b22799bca77c->enter($__internal_4fd081f2f9ac3e5d742aab6f902380e2a8e72a13d95d68276414b22799bca77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c0c10cef1153bc3e6932d9fb0d011b3e1361ccbcf79fcb31f5a80b3c8c60b801->leave($__internal_c0c10cef1153bc3e6932d9fb0d011b3e1361ccbcf79fcb31f5a80b3c8c60b801_prof);

        
        $__internal_4fd081f2f9ac3e5d742aab6f902380e2a8e72a13d95d68276414b22799bca77c->leave($__internal_4fd081f2f9ac3e5d742aab6f902380e2a8e72a13d95d68276414b22799bca77c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
