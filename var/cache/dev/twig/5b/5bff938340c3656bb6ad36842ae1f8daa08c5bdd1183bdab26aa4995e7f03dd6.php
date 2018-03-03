<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0e46d1b8e73c0d1a2176e49724e968ec977879d272c768edb9b404eb5bce9471 extends Twig_Template
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
        $__internal_eb4f39f06c5ddcd4debf71a6cb196c76763b9b9bc7c3c63d9d02ae63a729f4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4f39f06c5ddcd4debf71a6cb196c76763b9b9bc7c3c63d9d02ae63a729f4c1->enter($__internal_eb4f39f06c5ddcd4debf71a6cb196c76763b9b9bc7c3c63d9d02ae63a729f4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_58fc6c30943f366c3f39a856dd50ca8a56b32a47f810b98694b9588ad751e75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fc6c30943f366c3f39a856dd50ca8a56b32a47f810b98694b9588ad751e75f->enter($__internal_58fc6c30943f366c3f39a856dd50ca8a56b32a47f810b98694b9588ad751e75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_eb4f39f06c5ddcd4debf71a6cb196c76763b9b9bc7c3c63d9d02ae63a729f4c1->leave($__internal_eb4f39f06c5ddcd4debf71a6cb196c76763b9b9bc7c3c63d9d02ae63a729f4c1_prof);

        
        $__internal_58fc6c30943f366c3f39a856dd50ca8a56b32a47f810b98694b9588ad751e75f->leave($__internal_58fc6c30943f366c3f39a856dd50ca8a56b32a47f810b98694b9588ad751e75f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
