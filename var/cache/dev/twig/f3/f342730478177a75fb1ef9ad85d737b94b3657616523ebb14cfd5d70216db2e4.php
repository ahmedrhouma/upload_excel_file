<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d2dc966e5d51619be607bf38a2e1b518878c78e746ff1f814abda834dc89157c extends Twig_Template
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
        $__internal_76e7ba10df6afc2454ed0f53259148aa7a592c0cea8b5c9671e8a645d23abfa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e7ba10df6afc2454ed0f53259148aa7a592c0cea8b5c9671e8a645d23abfa6->enter($__internal_76e7ba10df6afc2454ed0f53259148aa7a592c0cea8b5c9671e8a645d23abfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2291ba0bac7f706932c21b114715e630df79721e1a5cbb30e6e69f85eea23122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2291ba0bac7f706932c21b114715e630df79721e1a5cbb30e6e69f85eea23122->enter($__internal_2291ba0bac7f706932c21b114715e630df79721e1a5cbb30e6e69f85eea23122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_76e7ba10df6afc2454ed0f53259148aa7a592c0cea8b5c9671e8a645d23abfa6->leave($__internal_76e7ba10df6afc2454ed0f53259148aa7a592c0cea8b5c9671e8a645d23abfa6_prof);

        
        $__internal_2291ba0bac7f706932c21b114715e630df79721e1a5cbb30e6e69f85eea23122->leave($__internal_2291ba0bac7f706932c21b114715e630df79721e1a5cbb30e6e69f85eea23122_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
