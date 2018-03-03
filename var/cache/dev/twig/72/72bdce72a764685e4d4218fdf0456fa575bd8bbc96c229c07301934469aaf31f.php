<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_26a00c1bd31cc0dc41a45e2ea5ee920311942bc78d1687806e1fc8375b7c238e extends Twig_Template
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
        $__internal_97019654854bdfb738d6d8f2bd6329304bcbf0898c5c93a2e482debd5778be85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97019654854bdfb738d6d8f2bd6329304bcbf0898c5c93a2e482debd5778be85->enter($__internal_97019654854bdfb738d6d8f2bd6329304bcbf0898c5c93a2e482debd5778be85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_00a3ad436caca338a7b53514b292bbfb3a0504c3a4e9be48cae660e8d82d918f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a3ad436caca338a7b53514b292bbfb3a0504c3a4e9be48cae660e8d82d918f->enter($__internal_00a3ad436caca338a7b53514b292bbfb3a0504c3a4e9be48cae660e8d82d918f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_97019654854bdfb738d6d8f2bd6329304bcbf0898c5c93a2e482debd5778be85->leave($__internal_97019654854bdfb738d6d8f2bd6329304bcbf0898c5c93a2e482debd5778be85_prof);

        
        $__internal_00a3ad436caca338a7b53514b292bbfb3a0504c3a4e9be48cae660e8d82d918f->leave($__internal_00a3ad436caca338a7b53514b292bbfb3a0504c3a4e9be48cae660e8d82d918f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
