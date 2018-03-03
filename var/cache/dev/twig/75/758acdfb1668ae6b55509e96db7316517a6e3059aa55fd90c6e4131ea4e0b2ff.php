<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_28de2938f2d9a7233d484dfa04df108e02e35913bc8c6f782f3dde9d8a2b6bd7 extends Twig_Template
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
        $__internal_a0266bd54d62d13adcca2c302efb496945b3fd93af3442e95dcc37ec842f5f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0266bd54d62d13adcca2c302efb496945b3fd93af3442e95dcc37ec842f5f0e->enter($__internal_a0266bd54d62d13adcca2c302efb496945b3fd93af3442e95dcc37ec842f5f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_529afa080550314cb7123528ec6bc0458dbe9d128394459b8710a2d8d89dced0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529afa080550314cb7123528ec6bc0458dbe9d128394459b8710a2d8d89dced0->enter($__internal_529afa080550314cb7123528ec6bc0458dbe9d128394459b8710a2d8d89dced0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a0266bd54d62d13adcca2c302efb496945b3fd93af3442e95dcc37ec842f5f0e->leave($__internal_a0266bd54d62d13adcca2c302efb496945b3fd93af3442e95dcc37ec842f5f0e_prof);

        
        $__internal_529afa080550314cb7123528ec6bc0458dbe9d128394459b8710a2d8d89dced0->leave($__internal_529afa080550314cb7123528ec6bc0458dbe9d128394459b8710a2d8d89dced0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
