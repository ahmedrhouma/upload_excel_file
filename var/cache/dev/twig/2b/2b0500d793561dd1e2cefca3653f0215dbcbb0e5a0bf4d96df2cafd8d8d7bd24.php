<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ed5155d20c20b51e557c6829acee6bf06d5e27282ac9e783ab65296182fa2813 extends Twig_Template
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
        $__internal_f68b77de6289b2e0fa2596bc5b38a91006638f77e0ad57e4da39267ce9d317d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68b77de6289b2e0fa2596bc5b38a91006638f77e0ad57e4da39267ce9d317d2->enter($__internal_f68b77de6289b2e0fa2596bc5b38a91006638f77e0ad57e4da39267ce9d317d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4dfb7c8e01dbd0bd2c51c2a2661b0f95efa0e02ba465095db4a8c8841b859e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfb7c8e01dbd0bd2c51c2a2661b0f95efa0e02ba465095db4a8c8841b859e04->enter($__internal_4dfb7c8e01dbd0bd2c51c2a2661b0f95efa0e02ba465095db4a8c8841b859e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f68b77de6289b2e0fa2596bc5b38a91006638f77e0ad57e4da39267ce9d317d2->leave($__internal_f68b77de6289b2e0fa2596bc5b38a91006638f77e0ad57e4da39267ce9d317d2_prof);

        
        $__internal_4dfb7c8e01dbd0bd2c51c2a2661b0f95efa0e02ba465095db4a8c8841b859e04->leave($__internal_4dfb7c8e01dbd0bd2c51c2a2661b0f95efa0e02ba465095db4a8c8841b859e04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
