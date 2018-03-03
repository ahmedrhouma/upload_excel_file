<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_44dcca73067e8cc0985d3c36382825e53f63b5a0eba6265fc4036ed208d64e8c extends Twig_Template
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
        $__internal_f02b3cf5103af2213ce4f109801bd78cdeefa64e91586aae8044ff39c7f63107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02b3cf5103af2213ce4f109801bd78cdeefa64e91586aae8044ff39c7f63107->enter($__internal_f02b3cf5103af2213ce4f109801bd78cdeefa64e91586aae8044ff39c7f63107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8ad30d058ade0ef1c8d7e390e95e8f59a5c272c63877db5c0bc561a609da328e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad30d058ade0ef1c8d7e390e95e8f59a5c272c63877db5c0bc561a609da328e->enter($__internal_8ad30d058ade0ef1c8d7e390e95e8f59a5c272c63877db5c0bc561a609da328e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f02b3cf5103af2213ce4f109801bd78cdeefa64e91586aae8044ff39c7f63107->leave($__internal_f02b3cf5103af2213ce4f109801bd78cdeefa64e91586aae8044ff39c7f63107_prof);

        
        $__internal_8ad30d058ade0ef1c8d7e390e95e8f59a5c272c63877db5c0bc561a609da328e->leave($__internal_8ad30d058ade0ef1c8d7e390e95e8f59a5c272c63877db5c0bc561a609da328e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
