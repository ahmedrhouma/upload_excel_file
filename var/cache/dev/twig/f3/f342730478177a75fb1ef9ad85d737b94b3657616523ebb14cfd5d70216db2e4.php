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
        $__internal_98ffef7f8c71a6948f8e17a3d7f4ec65ba98df3c13652bb5655c57a8dad538ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ffef7f8c71a6948f8e17a3d7f4ec65ba98df3c13652bb5655c57a8dad538ca->enter($__internal_98ffef7f8c71a6948f8e17a3d7f4ec65ba98df3c13652bb5655c57a8dad538ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e27cfa6392f0f1c8d0d43f989730e14c511283905fde07316224c2a099c7cacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27cfa6392f0f1c8d0d43f989730e14c511283905fde07316224c2a099c7cacb->enter($__internal_e27cfa6392f0f1c8d0d43f989730e14c511283905fde07316224c2a099c7cacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_98ffef7f8c71a6948f8e17a3d7f4ec65ba98df3c13652bb5655c57a8dad538ca->leave($__internal_98ffef7f8c71a6948f8e17a3d7f4ec65ba98df3c13652bb5655c57a8dad538ca_prof);

        
        $__internal_e27cfa6392f0f1c8d0d43f989730e14c511283905fde07316224c2a099c7cacb->leave($__internal_e27cfa6392f0f1c8d0d43f989730e14c511283905fde07316224c2a099c7cacb_prof);

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
