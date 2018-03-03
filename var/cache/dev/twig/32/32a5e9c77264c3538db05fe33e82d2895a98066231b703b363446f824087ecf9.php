<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d576831101d5abf80561382ebaf83b7a410323c20ee76b3e4b08b595ec225ec1 extends Twig_Template
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
        $__internal_f8f7631fe5db2206363e908a47523d8c3afcac7898edfb3b75e8be9b087ca993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f7631fe5db2206363e908a47523d8c3afcac7898edfb3b75e8be9b087ca993->enter($__internal_f8f7631fe5db2206363e908a47523d8c3afcac7898edfb3b75e8be9b087ca993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_07d01718876f6200e002dcfa93be64ae1cfbbb36e91e7f598d609e59e1bf56f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d01718876f6200e002dcfa93be64ae1cfbbb36e91e7f598d609e59e1bf56f7->enter($__internal_07d01718876f6200e002dcfa93be64ae1cfbbb36e91e7f598d609e59e1bf56f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f8f7631fe5db2206363e908a47523d8c3afcac7898edfb3b75e8be9b087ca993->leave($__internal_f8f7631fe5db2206363e908a47523d8c3afcac7898edfb3b75e8be9b087ca993_prof);

        
        $__internal_07d01718876f6200e002dcfa93be64ae1cfbbb36e91e7f598d609e59e1bf56f7->leave($__internal_07d01718876f6200e002dcfa93be64ae1cfbbb36e91e7f598d609e59e1bf56f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
