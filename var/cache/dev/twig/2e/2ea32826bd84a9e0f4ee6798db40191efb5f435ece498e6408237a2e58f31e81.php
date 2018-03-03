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
        $__internal_2a55ae55ca49e883ee1216e75c806f275f1e773fe690de32154e98eac357f374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a55ae55ca49e883ee1216e75c806f275f1e773fe690de32154e98eac357f374->enter($__internal_2a55ae55ca49e883ee1216e75c806f275f1e773fe690de32154e98eac357f374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_be5e70f822388681ad70412ba7c51f05871345f3ed0c6e38105fd39216728ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5e70f822388681ad70412ba7c51f05871345f3ed0c6e38105fd39216728ff2->enter($__internal_be5e70f822388681ad70412ba7c51f05871345f3ed0c6e38105fd39216728ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2a55ae55ca49e883ee1216e75c806f275f1e773fe690de32154e98eac357f374->leave($__internal_2a55ae55ca49e883ee1216e75c806f275f1e773fe690de32154e98eac357f374_prof);

        
        $__internal_be5e70f822388681ad70412ba7c51f05871345f3ed0c6e38105fd39216728ff2->leave($__internal_be5e70f822388681ad70412ba7c51f05871345f3ed0c6e38105fd39216728ff2_prof);

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
