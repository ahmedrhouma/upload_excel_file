<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b121a95cff9753905148ec33a6863f30f11e3b018a766539049058e288c83d55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_258387077dfea30a7a24a15aa3cfa0f35ed01cced9889e46ffa8353e585cf8f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258387077dfea30a7a24a15aa3cfa0f35ed01cced9889e46ffa8353e585cf8f2->enter($__internal_258387077dfea30a7a24a15aa3cfa0f35ed01cced9889e46ffa8353e585cf8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2d16232f89db50d9f1f0e77441b54801bd615912ae3bfbf7888b710755f74f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d16232f89db50d9f1f0e77441b54801bd615912ae3bfbf7888b710755f74f66->enter($__internal_2d16232f89db50d9f1f0e77441b54801bd615912ae3bfbf7888b710755f74f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_258387077dfea30a7a24a15aa3cfa0f35ed01cced9889e46ffa8353e585cf8f2->leave($__internal_258387077dfea30a7a24a15aa3cfa0f35ed01cced9889e46ffa8353e585cf8f2_prof);

        
        $__internal_2d16232f89db50d9f1f0e77441b54801bd615912ae3bfbf7888b710755f74f66->leave($__internal_2d16232f89db50d9f1f0e77441b54801bd615912ae3bfbf7888b710755f74f66_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9acb45625945ba68047900692f0b325eadd85af655c71e8707a50f8550e51369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9acb45625945ba68047900692f0b325eadd85af655c71e8707a50f8550e51369->enter($__internal_9acb45625945ba68047900692f0b325eadd85af655c71e8707a50f8550e51369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51214948559a1fcb2453ddfe4834b2af46d64c663a1739e0543de73f2663979a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51214948559a1fcb2453ddfe4834b2af46d64c663a1739e0543de73f2663979a->enter($__internal_51214948559a1fcb2453ddfe4834b2af46d64c663a1739e0543de73f2663979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_51214948559a1fcb2453ddfe4834b2af46d64c663a1739e0543de73f2663979a->leave($__internal_51214948559a1fcb2453ddfe4834b2af46d64c663a1739e0543de73f2663979a_prof);

        
        $__internal_9acb45625945ba68047900692f0b325eadd85af655c71e8707a50f8550e51369->leave($__internal_9acb45625945ba68047900692f0b325eadd85af655c71e8707a50f8550e51369_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7d962beab59332ee2b1ab3becb191ebfa85913cd7ecda99d560537746c9e2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d962beab59332ee2b1ab3becb191ebfa85913cd7ecda99d560537746c9e2fd->enter($__internal_b7d962beab59332ee2b1ab3becb191ebfa85913cd7ecda99d560537746c9e2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1a82cc1a475a032d2eadccd122c337a1d299d8e3cf44dfd7c72b0c59d3f0aca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a82cc1a475a032d2eadccd122c337a1d299d8e3cf44dfd7c72b0c59d3f0aca6->enter($__internal_1a82cc1a475a032d2eadccd122c337a1d299d8e3cf44dfd7c72b0c59d3f0aca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1a82cc1a475a032d2eadccd122c337a1d299d8e3cf44dfd7c72b0c59d3f0aca6->leave($__internal_1a82cc1a475a032d2eadccd122c337a1d299d8e3cf44dfd7c72b0c59d3f0aca6_prof);

        
        $__internal_b7d962beab59332ee2b1ab3becb191ebfa85913cd7ecda99d560537746c9e2fd->leave($__internal_b7d962beab59332ee2b1ab3becb191ebfa85913cd7ecda99d560537746c9e2fd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_96f20aae18f25b6b82c680c0a3beb7818a6f99dbb8b90c473b5f0da05ff231d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f20aae18f25b6b82c680c0a3beb7818a6f99dbb8b90c473b5f0da05ff231d5->enter($__internal_96f20aae18f25b6b82c680c0a3beb7818a6f99dbb8b90c473b5f0da05ff231d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71881ac889156892612d857ae852e73dbe0f2ccdfbba1e57d583cda0d5188f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71881ac889156892612d857ae852e73dbe0f2ccdfbba1e57d583cda0d5188f5e->enter($__internal_71881ac889156892612d857ae852e73dbe0f2ccdfbba1e57d583cda0d5188f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_71881ac889156892612d857ae852e73dbe0f2ccdfbba1e57d583cda0d5188f5e->leave($__internal_71881ac889156892612d857ae852e73dbe0f2ccdfbba1e57d583cda0d5188f5e_prof);

        
        $__internal_96f20aae18f25b6b82c680c0a3beb7818a6f99dbb8b90c473b5f0da05ff231d5->leave($__internal_96f20aae18f25b6b82c680c0a3beb7818a6f99dbb8b90c473b5f0da05ff231d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
