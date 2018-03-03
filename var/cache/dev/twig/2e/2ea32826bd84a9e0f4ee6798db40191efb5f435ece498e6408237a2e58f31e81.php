<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1a8cb6eb143647e8919d7e9c0dd1993e249828bdf6e94f4ac0229d83d00eb8e6 extends Twig_Template
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
        $__internal_102e07f54563498dc080f8473eaf95bf45a5b1dccf9cfcc1d48ff1f6021636d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_102e07f54563498dc080f8473eaf95bf45a5b1dccf9cfcc1d48ff1f6021636d9->enter($__internal_102e07f54563498dc080f8473eaf95bf45a5b1dccf9cfcc1d48ff1f6021636d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d06ff1ab742b89113b1c05f719823547ffa0d7e5d75c71261d21ee9f5dcbc0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06ff1ab742b89113b1c05f719823547ffa0d7e5d75c71261d21ee9f5dcbc0ca->enter($__internal_d06ff1ab742b89113b1c05f719823547ffa0d7e5d75c71261d21ee9f5dcbc0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_102e07f54563498dc080f8473eaf95bf45a5b1dccf9cfcc1d48ff1f6021636d9->leave($__internal_102e07f54563498dc080f8473eaf95bf45a5b1dccf9cfcc1d48ff1f6021636d9_prof);

        
        $__internal_d06ff1ab742b89113b1c05f719823547ffa0d7e5d75c71261d21ee9f5dcbc0ca->leave($__internal_d06ff1ab742b89113b1c05f719823547ffa0d7e5d75c71261d21ee9f5dcbc0ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
