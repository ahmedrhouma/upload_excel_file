<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ed9fca52ebb831851066ef2bce1cf8e1262e0c89a2d0e9b0eb7581965362cad0 extends Twig_Template
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
        $__internal_ed3e94e37413d15133ac936639f9e60c0c969580a26b6200d35edbc856a10ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3e94e37413d15133ac936639f9e60c0c969580a26b6200d35edbc856a10ba2->enter($__internal_ed3e94e37413d15133ac936639f9e60c0c969580a26b6200d35edbc856a10ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1ba0a56cd69deafbee84c3f415a725183dbd146e6aeb5e313668b83fb5d67a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba0a56cd69deafbee84c3f415a725183dbd146e6aeb5e313668b83fb5d67a45->enter($__internal_1ba0a56cd69deafbee84c3f415a725183dbd146e6aeb5e313668b83fb5d67a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ed3e94e37413d15133ac936639f9e60c0c969580a26b6200d35edbc856a10ba2->leave($__internal_ed3e94e37413d15133ac936639f9e60c0c969580a26b6200d35edbc856a10ba2_prof);

        
        $__internal_1ba0a56cd69deafbee84c3f415a725183dbd146e6aeb5e313668b83fb5d67a45->leave($__internal_1ba0a56cd69deafbee84c3f415a725183dbd146e6aeb5e313668b83fb5d67a45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
