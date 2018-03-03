<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_79635547a3b3a0544288f4210aea8b1204ea22f8a5b5daf756ddfd0cd49c0c73 extends Twig_Template
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
        $__internal_3a36ffca612e84327917eb7ad1a42377e59d6a28616b9ca724ec7a3439b476d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a36ffca612e84327917eb7ad1a42377e59d6a28616b9ca724ec7a3439b476d1->enter($__internal_3a36ffca612e84327917eb7ad1a42377e59d6a28616b9ca724ec7a3439b476d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c9bbaccbeccebccf831e2fbb9f2efd9bcc5f8281cd7d3544e1ae6a4cf2524914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bbaccbeccebccf831e2fbb9f2efd9bcc5f8281cd7d3544e1ae6a4cf2524914->enter($__internal_c9bbaccbeccebccf831e2fbb9f2efd9bcc5f8281cd7d3544e1ae6a4cf2524914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3a36ffca612e84327917eb7ad1a42377e59d6a28616b9ca724ec7a3439b476d1->leave($__internal_3a36ffca612e84327917eb7ad1a42377e59d6a28616b9ca724ec7a3439b476d1_prof);

        
        $__internal_c9bbaccbeccebccf831e2fbb9f2efd9bcc5f8281cd7d3544e1ae6a4cf2524914->leave($__internal_c9bbaccbeccebccf831e2fbb9f2efd9bcc5f8281cd7d3544e1ae6a4cf2524914_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
