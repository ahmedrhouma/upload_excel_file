<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_dee80470241b8bcdaab58e4d12d1e5f4b85c33c5c570c9bf67e8ca8a94292c33 extends Twig_Template
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
        $__internal_20ef7d87f25c983c445e93102b4dc1a3a30dc63070df91f01ce2c05f8e59ea81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ef7d87f25c983c445e93102b4dc1a3a30dc63070df91f01ce2c05f8e59ea81->enter($__internal_20ef7d87f25c983c445e93102b4dc1a3a30dc63070df91f01ce2c05f8e59ea81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2e90d9e3f2ecaeacf72cd44e39a9705d8581423de73f973e675bf199da6caba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e90d9e3f2ecaeacf72cd44e39a9705d8581423de73f973e675bf199da6caba3->enter($__internal_2e90d9e3f2ecaeacf72cd44e39a9705d8581423de73f973e675bf199da6caba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_20ef7d87f25c983c445e93102b4dc1a3a30dc63070df91f01ce2c05f8e59ea81->leave($__internal_20ef7d87f25c983c445e93102b4dc1a3a30dc63070df91f01ce2c05f8e59ea81_prof);

        
        $__internal_2e90d9e3f2ecaeacf72cd44e39a9705d8581423de73f973e675bf199da6caba3->leave($__internal_2e90d9e3f2ecaeacf72cd44e39a9705d8581423de73f973e675bf199da6caba3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
