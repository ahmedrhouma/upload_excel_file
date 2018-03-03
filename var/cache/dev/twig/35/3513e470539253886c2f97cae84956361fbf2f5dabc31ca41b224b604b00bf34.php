<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2dd2e0d97fddb681f3625bed7231a56cf467a82cd1332e13cf3c24ff3417bc56 extends Twig_Template
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
        $__internal_7f273c9694faea1597648c2dd26c2fcec7ebcd347fc9a0833389e1cca1044ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f273c9694faea1597648c2dd26c2fcec7ebcd347fc9a0833389e1cca1044ef3->enter($__internal_7f273c9694faea1597648c2dd26c2fcec7ebcd347fc9a0833389e1cca1044ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e41c764ecdb88308a78746117f55e3c1173084559c095b15c899575535813f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41c764ecdb88308a78746117f55e3c1173084559c095b15c899575535813f7e->enter($__internal_e41c764ecdb88308a78746117f55e3c1173084559c095b15c899575535813f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7f273c9694faea1597648c2dd26c2fcec7ebcd347fc9a0833389e1cca1044ef3->leave($__internal_7f273c9694faea1597648c2dd26c2fcec7ebcd347fc9a0833389e1cca1044ef3_prof);

        
        $__internal_e41c764ecdb88308a78746117f55e3c1173084559c095b15c899575535813f7e->leave($__internal_e41c764ecdb88308a78746117f55e3c1173084559c095b15c899575535813f7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
