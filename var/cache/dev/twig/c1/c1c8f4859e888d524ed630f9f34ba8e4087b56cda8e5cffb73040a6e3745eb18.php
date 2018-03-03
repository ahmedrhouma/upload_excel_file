<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2c9f0f033b5b190d13518e02a334cddbf081d903c20ebd0801a376a72afbdd8b extends Twig_Template
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
        $__internal_41e6b850ca8b80447189b0c2aef225d5e181adadf950100acce22743f6019949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e6b850ca8b80447189b0c2aef225d5e181adadf950100acce22743f6019949->enter($__internal_41e6b850ca8b80447189b0c2aef225d5e181adadf950100acce22743f6019949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_deb79730f4e7db91533f9fb19d6f7eaa8cc72915feaa2a40dd7566066cd3823d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb79730f4e7db91533f9fb19d6f7eaa8cc72915feaa2a40dd7566066cd3823d->enter($__internal_deb79730f4e7db91533f9fb19d6f7eaa8cc72915feaa2a40dd7566066cd3823d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_41e6b850ca8b80447189b0c2aef225d5e181adadf950100acce22743f6019949->leave($__internal_41e6b850ca8b80447189b0c2aef225d5e181adadf950100acce22743f6019949_prof);

        
        $__internal_deb79730f4e7db91533f9fb19d6f7eaa8cc72915feaa2a40dd7566066cd3823d->leave($__internal_deb79730f4e7db91533f9fb19d6f7eaa8cc72915feaa2a40dd7566066cd3823d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
