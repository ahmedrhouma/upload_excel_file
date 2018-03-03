<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_a345effac9ceaf8d48e1738f1fba82f0d3fe0634485f9992e32eca0ce49b06cc extends Twig_Template
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
        $__internal_cc3badc30c4e11ee89e5b1d72803d1771fe7bf86d66bdf8270494e6ef2588105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3badc30c4e11ee89e5b1d72803d1771fe7bf86d66bdf8270494e6ef2588105->enter($__internal_cc3badc30c4e11ee89e5b1d72803d1771fe7bf86d66bdf8270494e6ef2588105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_a8e3dc06cfdd34249419af5e54e43d039ed85ae146159ce3c583c3a574d238a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e3dc06cfdd34249419af5e54e43d039ed85ae146159ce3c583c3a574d238a3->enter($__internal_a8e3dc06cfdd34249419af5e54e43d039ed85ae146159ce3c583c3a574d238a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_cc3badc30c4e11ee89e5b1d72803d1771fe7bf86d66bdf8270494e6ef2588105->leave($__internal_cc3badc30c4e11ee89e5b1d72803d1771fe7bf86d66bdf8270494e6ef2588105_prof);

        
        $__internal_a8e3dc06cfdd34249419af5e54e43d039ed85ae146159ce3c583c3a574d238a3->leave($__internal_a8e3dc06cfdd34249419af5e54e43d039ed85ae146159ce3c583c3a574d238a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\color_widget.html.php");
    }
}
