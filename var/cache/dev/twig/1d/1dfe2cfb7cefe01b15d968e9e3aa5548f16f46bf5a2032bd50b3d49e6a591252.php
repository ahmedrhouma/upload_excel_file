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
        $__internal_8901c179b1bcb6b6c5b0184d6c1d0dcfb2970626447d9ba6f873852e0b9bd65c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8901c179b1bcb6b6c5b0184d6c1d0dcfb2970626447d9ba6f873852e0b9bd65c->enter($__internal_8901c179b1bcb6b6c5b0184d6c1d0dcfb2970626447d9ba6f873852e0b9bd65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_82db608f925040081fd63618a5abcb551e7563da128d44c08f5d4404bc33eb30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82db608f925040081fd63618a5abcb551e7563da128d44c08f5d4404bc33eb30->enter($__internal_82db608f925040081fd63618a5abcb551e7563da128d44c08f5d4404bc33eb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8901c179b1bcb6b6c5b0184d6c1d0dcfb2970626447d9ba6f873852e0b9bd65c->leave($__internal_8901c179b1bcb6b6c5b0184d6c1d0dcfb2970626447d9ba6f873852e0b9bd65c_prof);

        
        $__internal_82db608f925040081fd63618a5abcb551e7563da128d44c08f5d4404bc33eb30->leave($__internal_82db608f925040081fd63618a5abcb551e7563da128d44c08f5d4404bc33eb30_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8796d812fa2f4c845eddecf84d38868b2124d7cbb73a1713f34c7d1a33395139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8796d812fa2f4c845eddecf84d38868b2124d7cbb73a1713f34c7d1a33395139->enter($__internal_8796d812fa2f4c845eddecf84d38868b2124d7cbb73a1713f34c7d1a33395139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25cbd3202bfc30a365c1a94e7f216d5b4a969388389e6c998c9c0b6cb020b84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cbd3202bfc30a365c1a94e7f216d5b4a969388389e6c998c9c0b6cb020b84d->enter($__internal_25cbd3202bfc30a365c1a94e7f216d5b4a969388389e6c998c9c0b6cb020b84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_25cbd3202bfc30a365c1a94e7f216d5b4a969388389e6c998c9c0b6cb020b84d->leave($__internal_25cbd3202bfc30a365c1a94e7f216d5b4a969388389e6c998c9c0b6cb020b84d_prof);

        
        $__internal_8796d812fa2f4c845eddecf84d38868b2124d7cbb73a1713f34c7d1a33395139->leave($__internal_8796d812fa2f4c845eddecf84d38868b2124d7cbb73a1713f34c7d1a33395139_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_68033befa95d67c76b479932b60be81d5fbb3bafac31aee2781fd6a7482e3397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68033befa95d67c76b479932b60be81d5fbb3bafac31aee2781fd6a7482e3397->enter($__internal_68033befa95d67c76b479932b60be81d5fbb3bafac31aee2781fd6a7482e3397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03280a249ed108e825eb7c44c52fea07e878190b76a4b1efe4f372588d3fc5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03280a249ed108e825eb7c44c52fea07e878190b76a4b1efe4f372588d3fc5ec->enter($__internal_03280a249ed108e825eb7c44c52fea07e878190b76a4b1efe4f372588d3fc5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_03280a249ed108e825eb7c44c52fea07e878190b76a4b1efe4f372588d3fc5ec->leave($__internal_03280a249ed108e825eb7c44c52fea07e878190b76a4b1efe4f372588d3fc5ec_prof);

        
        $__internal_68033befa95d67c76b479932b60be81d5fbb3bafac31aee2781fd6a7482e3397->leave($__internal_68033befa95d67c76b479932b60be81d5fbb3bafac31aee2781fd6a7482e3397_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8ed6a7cf20340a9dab8e77b225d2fdc8b63a54ddf317524d3b17cb13075e844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ed6a7cf20340a9dab8e77b225d2fdc8b63a54ddf317524d3b17cb13075e844->enter($__internal_f8ed6a7cf20340a9dab8e77b225d2fdc8b63a54ddf317524d3b17cb13075e844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82281dbb0a02db564b7e4b0138951511be85b00b856f0f62d7dedcc5665a41ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82281dbb0a02db564b7e4b0138951511be85b00b856f0f62d7dedcc5665a41ca->enter($__internal_82281dbb0a02db564b7e4b0138951511be85b00b856f0f62d7dedcc5665a41ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_82281dbb0a02db564b7e4b0138951511be85b00b856f0f62d7dedcc5665a41ca->leave($__internal_82281dbb0a02db564b7e4b0138951511be85b00b856f0f62d7dedcc5665a41ca_prof);

        
        $__internal_f8ed6a7cf20340a9dab8e77b225d2fdc8b63a54ddf317524d3b17cb13075e844->leave($__internal_f8ed6a7cf20340a9dab8e77b225d2fdc8b63a54ddf317524d3b17cb13075e844_prof);

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
