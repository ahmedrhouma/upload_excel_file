<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_dee80470241b8bcdaab58e4d12d1e5f4b85c33c5c570c9bf67e8ca8a94292c33 extends Twig_Template
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
        $__internal_f23b693cce730fe174dcf4d1873a630af89daff68303603b4c0b1ef6b1de7165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23b693cce730fe174dcf4d1873a630af89daff68303603b4c0b1ef6b1de7165->enter($__internal_f23b693cce730fe174dcf4d1873a630af89daff68303603b4c0b1ef6b1de7165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1bba640ac07f615522d58ea8717e1308ab4af3ebcc9f556f45e533e860f30a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bba640ac07f615522d58ea8717e1308ab4af3ebcc9f556f45e533e860f30a9b->enter($__internal_1bba640ac07f615522d58ea8717e1308ab4af3ebcc9f556f45e533e860f30a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f23b693cce730fe174dcf4d1873a630af89daff68303603b4c0b1ef6b1de7165->leave($__internal_f23b693cce730fe174dcf4d1873a630af89daff68303603b4c0b1ef6b1de7165_prof);

        
        $__internal_1bba640ac07f615522d58ea8717e1308ab4af3ebcc9f556f45e533e860f30a9b->leave($__internal_1bba640ac07f615522d58ea8717e1308ab4af3ebcc9f556f45e533e860f30a9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
