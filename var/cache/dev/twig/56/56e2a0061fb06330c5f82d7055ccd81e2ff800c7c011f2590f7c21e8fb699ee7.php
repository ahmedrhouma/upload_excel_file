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
        $__internal_80c64f0e6589a57c3abcd69e7b00439ee72e4f9088cd812e6c8929a87417e6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c64f0e6589a57c3abcd69e7b00439ee72e4f9088cd812e6c8929a87417e6c6->enter($__internal_80c64f0e6589a57c3abcd69e7b00439ee72e4f9088cd812e6c8929a87417e6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8b90d7b8dd150b3a17a760f6b97e7619374ec6296550c6c60c0eda45399b53fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b90d7b8dd150b3a17a760f6b97e7619374ec6296550c6c60c0eda45399b53fe->enter($__internal_8b90d7b8dd150b3a17a760f6b97e7619374ec6296550c6c60c0eda45399b53fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_80c64f0e6589a57c3abcd69e7b00439ee72e4f9088cd812e6c8929a87417e6c6->leave($__internal_80c64f0e6589a57c3abcd69e7b00439ee72e4f9088cd812e6c8929a87417e6c6_prof);

        
        $__internal_8b90d7b8dd150b3a17a760f6b97e7619374ec6296550c6c60c0eda45399b53fe->leave($__internal_8b90d7b8dd150b3a17a760f6b97e7619374ec6296550c6c60c0eda45399b53fe_prof);

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
