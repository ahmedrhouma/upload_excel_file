<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_46633ba74875e42abae74fbe3f2fe1e9f612c5cd52fe68ef667294d62f7e0fb2 extends Twig_Template
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
        $__internal_4cd5f88caef73dc9a694078624dfc5ca0ed3baee9b7c6d2983328319a113b1aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd5f88caef73dc9a694078624dfc5ca0ed3baee9b7c6d2983328319a113b1aa->enter($__internal_4cd5f88caef73dc9a694078624dfc5ca0ed3baee9b7c6d2983328319a113b1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_73c8ffc77aa76ea0ea50ed8aa121073dd6985fd30151bb2d691c7487d0358715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c8ffc77aa76ea0ea50ed8aa121073dd6985fd30151bb2d691c7487d0358715->enter($__internal_73c8ffc77aa76ea0ea50ed8aa121073dd6985fd30151bb2d691c7487d0358715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4cd5f88caef73dc9a694078624dfc5ca0ed3baee9b7c6d2983328319a113b1aa->leave($__internal_4cd5f88caef73dc9a694078624dfc5ca0ed3baee9b7c6d2983328319a113b1aa_prof);

        
        $__internal_73c8ffc77aa76ea0ea50ed8aa121073dd6985fd30151bb2d691c7487d0358715->leave($__internal_73c8ffc77aa76ea0ea50ed8aa121073dd6985fd30151bb2d691c7487d0358715_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
