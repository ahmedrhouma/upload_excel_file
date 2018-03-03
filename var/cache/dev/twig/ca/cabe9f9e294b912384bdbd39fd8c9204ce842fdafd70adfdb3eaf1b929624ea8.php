<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0c025e0b359f45415ee6dd39756a8bfc08923b9c7f0d60f3ee98c67c59382bf5 extends Twig_Template
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
        $__internal_d44726a1fc4652001e69298c1dad7a95b822ff6434ee048cc969d00a9a013413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44726a1fc4652001e69298c1dad7a95b822ff6434ee048cc969d00a9a013413->enter($__internal_d44726a1fc4652001e69298c1dad7a95b822ff6434ee048cc969d00a9a013413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_79f7da09fcf1437d621d0435617a7968d5bb83ede038468e635d17fa4b030241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f7da09fcf1437d621d0435617a7968d5bb83ede038468e635d17fa4b030241->enter($__internal_79f7da09fcf1437d621d0435617a7968d5bb83ede038468e635d17fa4b030241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d44726a1fc4652001e69298c1dad7a95b822ff6434ee048cc969d00a9a013413->leave($__internal_d44726a1fc4652001e69298c1dad7a95b822ff6434ee048cc969d00a9a013413_prof);

        
        $__internal_79f7da09fcf1437d621d0435617a7968d5bb83ede038468e635d17fa4b030241->leave($__internal_79f7da09fcf1437d621d0435617a7968d5bb83ede038468e635d17fa4b030241_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
