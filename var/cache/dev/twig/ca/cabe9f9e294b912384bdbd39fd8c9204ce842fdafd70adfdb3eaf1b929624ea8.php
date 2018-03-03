<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0c025e0b359f45415ee6dd39756a8bfc08923b9c7f0d60f3ee98c67c59382bf5 extends Twig_Template
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
        $__internal_16ef6882533ad37b6b40facd651f32c1af4b300169bb797494296816eb340af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ef6882533ad37b6b40facd651f32c1af4b300169bb797494296816eb340af8->enter($__internal_16ef6882533ad37b6b40facd651f32c1af4b300169bb797494296816eb340af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4d036550620bae23b858f41badc35d8fbb149f2b4076372d1e3e93d7188fec58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d036550620bae23b858f41badc35d8fbb149f2b4076372d1e3e93d7188fec58->enter($__internal_4d036550620bae23b858f41badc35d8fbb149f2b4076372d1e3e93d7188fec58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_16ef6882533ad37b6b40facd651f32c1af4b300169bb797494296816eb340af8->leave($__internal_16ef6882533ad37b6b40facd651f32c1af4b300169bb797494296816eb340af8_prof);

        
        $__internal_4d036550620bae23b858f41badc35d8fbb149f2b4076372d1e3e93d7188fec58->leave($__internal_4d036550620bae23b858f41badc35d8fbb149f2b4076372d1e3e93d7188fec58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
