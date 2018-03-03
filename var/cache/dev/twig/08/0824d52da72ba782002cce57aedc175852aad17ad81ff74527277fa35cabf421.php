<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f1f98607879070955a6bdc239c1b2e304f33f43868d2d3653bbdc110f73749df extends Twig_Template
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
        $__internal_18753da5a4316d1a23f3cb02552dbc855a8591bedc7fa5821989d11a0a6f412f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18753da5a4316d1a23f3cb02552dbc855a8591bedc7fa5821989d11a0a6f412f->enter($__internal_18753da5a4316d1a23f3cb02552dbc855a8591bedc7fa5821989d11a0a6f412f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_b7ecfccf1f6b8ceeed6f572ebb2529068376396c94bf03d23f4f2c2cbbd109a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ecfccf1f6b8ceeed6f572ebb2529068376396c94bf03d23f4f2c2cbbd109a8->enter($__internal_b7ecfccf1f6b8ceeed6f572ebb2529068376396c94bf03d23f4f2c2cbbd109a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_18753da5a4316d1a23f3cb02552dbc855a8591bedc7fa5821989d11a0a6f412f->leave($__internal_18753da5a4316d1a23f3cb02552dbc855a8591bedc7fa5821989d11a0a6f412f_prof);

        
        $__internal_b7ecfccf1f6b8ceeed6f572ebb2529068376396c94bf03d23f4f2c2cbbd109a8->leave($__internal_b7ecfccf1f6b8ceeed6f572ebb2529068376396c94bf03d23f4f2c2cbbd109a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
