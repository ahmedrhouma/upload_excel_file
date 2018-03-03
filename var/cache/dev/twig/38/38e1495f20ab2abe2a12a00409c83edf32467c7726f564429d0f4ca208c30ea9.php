<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d22b98befa1601c8b7881bebfac41c27ffba23c532ad1c1750146b8e629b029b extends Twig_Template
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
        $__internal_f66f3724b25b4ebcb3885a214170844ce899245d2c78e1b60b42351f8896fcda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66f3724b25b4ebcb3885a214170844ce899245d2c78e1b60b42351f8896fcda->enter($__internal_f66f3724b25b4ebcb3885a214170844ce899245d2c78e1b60b42351f8896fcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ddfece16929bd62686c1ca674d30a41837990788d905bab15c2322334f7ddb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfece16929bd62686c1ca674d30a41837990788d905bab15c2322334f7ddb86->enter($__internal_ddfece16929bd62686c1ca674d30a41837990788d905bab15c2322334f7ddb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f66f3724b25b4ebcb3885a214170844ce899245d2c78e1b60b42351f8896fcda->leave($__internal_f66f3724b25b4ebcb3885a214170844ce899245d2c78e1b60b42351f8896fcda_prof);

        
        $__internal_ddfece16929bd62686c1ca674d30a41837990788d905bab15c2322334f7ddb86->leave($__internal_ddfece16929bd62686c1ca674d30a41837990788d905bab15c2322334f7ddb86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
