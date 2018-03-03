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
        $__internal_3d0799b1f1e7d403697c07fa49e59a0e078ec3a1674b14a0e2fffbcc6745c92f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0799b1f1e7d403697c07fa49e59a0e078ec3a1674b14a0e2fffbcc6745c92f->enter($__internal_3d0799b1f1e7d403697c07fa49e59a0e078ec3a1674b14a0e2fffbcc6745c92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_da2985ad558f36953d6e63eaca370bbe9f50a652791c9401287bda32ba52c6b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2985ad558f36953d6e63eaca370bbe9f50a652791c9401287bda32ba52c6b5->enter($__internal_da2985ad558f36953d6e63eaca370bbe9f50a652791c9401287bda32ba52c6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3d0799b1f1e7d403697c07fa49e59a0e078ec3a1674b14a0e2fffbcc6745c92f->leave($__internal_3d0799b1f1e7d403697c07fa49e59a0e078ec3a1674b14a0e2fffbcc6745c92f_prof);

        
        $__internal_da2985ad558f36953d6e63eaca370bbe9f50a652791c9401287bda32ba52c6b5->leave($__internal_da2985ad558f36953d6e63eaca370bbe9f50a652791c9401287bda32ba52c6b5_prof);

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
