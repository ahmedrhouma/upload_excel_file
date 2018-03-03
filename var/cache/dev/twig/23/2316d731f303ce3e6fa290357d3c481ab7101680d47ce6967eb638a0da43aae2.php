<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_76852d643d9d3e39453462b3b8700737f4430fc2259a48154fb41a1e5245712f extends Twig_Template
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
        $__internal_5474e928707a696b65537edb859833b19d24f173f877b92906129c1862cf97a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5474e928707a696b65537edb859833b19d24f173f877b92906129c1862cf97a3->enter($__internal_5474e928707a696b65537edb859833b19d24f173f877b92906129c1862cf97a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_83a9e8a72c175952d732fd24a69461008a1aafc8b35feaccf8a4bc8ccaeeca7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a9e8a72c175952d732fd24a69461008a1aafc8b35feaccf8a4bc8ccaeeca7f->enter($__internal_83a9e8a72c175952d732fd24a69461008a1aafc8b35feaccf8a4bc8ccaeeca7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5474e928707a696b65537edb859833b19d24f173f877b92906129c1862cf97a3->leave($__internal_5474e928707a696b65537edb859833b19d24f173f877b92906129c1862cf97a3_prof);

        
        $__internal_83a9e8a72c175952d732fd24a69461008a1aafc8b35feaccf8a4bc8ccaeeca7f->leave($__internal_83a9e8a72c175952d732fd24a69461008a1aafc8b35feaccf8a4bc8ccaeeca7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
