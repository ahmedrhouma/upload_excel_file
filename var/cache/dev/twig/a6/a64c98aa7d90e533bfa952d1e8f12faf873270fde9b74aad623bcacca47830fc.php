<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_483abe94f8c7e7fe784e7d4664e0bedbd6a336cc20b4afa1062db9d19386d707 extends Twig_Template
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
        $__internal_95125a384c498c4e4b776bf0b21963a3ce711983a2fb6986c48dc60548663ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95125a384c498c4e4b776bf0b21963a3ce711983a2fb6986c48dc60548663ec4->enter($__internal_95125a384c498c4e4b776bf0b21963a3ce711983a2fb6986c48dc60548663ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_476393303807eb2f3d48f590625da719c3c2b8ec33cf9bdbbb5c8a55d4f2cc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476393303807eb2f3d48f590625da719c3c2b8ec33cf9bdbbb5c8a55d4f2cc66->enter($__internal_476393303807eb2f3d48f590625da719c3c2b8ec33cf9bdbbb5c8a55d4f2cc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_95125a384c498c4e4b776bf0b21963a3ce711983a2fb6986c48dc60548663ec4->leave($__internal_95125a384c498c4e4b776bf0b21963a3ce711983a2fb6986c48dc60548663ec4_prof);

        
        $__internal_476393303807eb2f3d48f590625da719c3c2b8ec33cf9bdbbb5c8a55d4f2cc66->leave($__internal_476393303807eb2f3d48f590625da719c3c2b8ec33cf9bdbbb5c8a55d4f2cc66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
