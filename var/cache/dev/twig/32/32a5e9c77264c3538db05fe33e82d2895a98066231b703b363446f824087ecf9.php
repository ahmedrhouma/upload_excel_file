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
        $__internal_a12bfc3527eab1b17e25ad7245da619e25668b6a0f9757fca47d383cf6eea0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12bfc3527eab1b17e25ad7245da619e25668b6a0f9757fca47d383cf6eea0ae->enter($__internal_a12bfc3527eab1b17e25ad7245da619e25668b6a0f9757fca47d383cf6eea0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c4343649bc0e386f5b870d16b5c2b17fc814452a8be87bd4c2415efdc7a73a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4343649bc0e386f5b870d16b5c2b17fc814452a8be87bd4c2415efdc7a73a21->enter($__internal_c4343649bc0e386f5b870d16b5c2b17fc814452a8be87bd4c2415efdc7a73a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_a12bfc3527eab1b17e25ad7245da619e25668b6a0f9757fca47d383cf6eea0ae->leave($__internal_a12bfc3527eab1b17e25ad7245da619e25668b6a0f9757fca47d383cf6eea0ae_prof);

        
        $__internal_c4343649bc0e386f5b870d16b5c2b17fc814452a8be87bd4c2415efdc7a73a21->leave($__internal_c4343649bc0e386f5b870d16b5c2b17fc814452a8be87bd4c2415efdc7a73a21_prof);

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
