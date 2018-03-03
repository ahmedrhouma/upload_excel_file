<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d88370062857c6314168aa357572cb84ed9fdf24f2a6c4cc1c44c73b76adc68f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8bf69ad3a3889c09235fd743f10049b39b8c1193bd82eb2e8e252ef139a1c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8bf69ad3a3889c09235fd743f10049b39b8c1193bd82eb2e8e252ef139a1c29->enter($__internal_b8bf69ad3a3889c09235fd743f10049b39b8c1193bd82eb2e8e252ef139a1c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b9604e35fc6d62d0782d4c5024c494568551085ed3a600a55467d10cbf0a1c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9604e35fc6d62d0782d4c5024c494568551085ed3a600a55467d10cbf0a1c90->enter($__internal_b9604e35fc6d62d0782d4c5024c494568551085ed3a600a55467d10cbf0a1c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8bf69ad3a3889c09235fd743f10049b39b8c1193bd82eb2e8e252ef139a1c29->leave($__internal_b8bf69ad3a3889c09235fd743f10049b39b8c1193bd82eb2e8e252ef139a1c29_prof);

        
        $__internal_b9604e35fc6d62d0782d4c5024c494568551085ed3a600a55467d10cbf0a1c90->leave($__internal_b9604e35fc6d62d0782d4c5024c494568551085ed3a600a55467d10cbf0a1c90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76caf52fa20e923bb2c996e28b7ca4a91a5871021e4542ddbf5800e3a7ca1ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76caf52fa20e923bb2c996e28b7ca4a91a5871021e4542ddbf5800e3a7ca1ce0->enter($__internal_76caf52fa20e923bb2c996e28b7ca4a91a5871021e4542ddbf5800e3a7ca1ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0e47ec56c6a0c74e4d4094885153dc5cb47c5c97ec1c370dc5d40715f2be8e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e47ec56c6a0c74e4d4094885153dc5cb47c5c97ec1c370dc5d40715f2be8e5d->enter($__internal_0e47ec56c6a0c74e4d4094885153dc5cb47c5c97ec1c370dc5d40715f2be8e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0e47ec56c6a0c74e4d4094885153dc5cb47c5c97ec1c370dc5d40715f2be8e5d->leave($__internal_0e47ec56c6a0c74e4d4094885153dc5cb47c5c97ec1c370dc5d40715f2be8e5d_prof);

        
        $__internal_76caf52fa20e923bb2c996e28b7ca4a91a5871021e4542ddbf5800e3a7ca1ce0->leave($__internal_76caf52fa20e923bb2c996e28b7ca4a91a5871021e4542ddbf5800e3a7ca1ce0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac4af8d9ff0d2edcb7e237489143cb370a45d98b23c5d244ed5d220ebc89d12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4af8d9ff0d2edcb7e237489143cb370a45d98b23c5d244ed5d220ebc89d12f->enter($__internal_ac4af8d9ff0d2edcb7e237489143cb370a45d98b23c5d244ed5d220ebc89d12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2cf77a609efd104877402e60b6587ca253e3874d13c2e1a1193613d6d679ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cf77a609efd104877402e60b6587ca253e3874d13c2e1a1193613d6d679ba5->enter($__internal_e2cf77a609efd104877402e60b6587ca253e3874d13c2e1a1193613d6d679ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e2cf77a609efd104877402e60b6587ca253e3874d13c2e1a1193613d6d679ba5->leave($__internal_e2cf77a609efd104877402e60b6587ca253e3874d13c2e1a1193613d6d679ba5_prof);

        
        $__internal_ac4af8d9ff0d2edcb7e237489143cb370a45d98b23c5d244ed5d220ebc89d12f->leave($__internal_ac4af8d9ff0d2edcb7e237489143cb370a45d98b23c5d244ed5d220ebc89d12f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ace4a3a77989dda6b5bc4269e9be0e31e052ac525d81ce2287544d9c929a938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ace4a3a77989dda6b5bc4269e9be0e31e052ac525d81ce2287544d9c929a938->enter($__internal_9ace4a3a77989dda6b5bc4269e9be0e31e052ac525d81ce2287544d9c929a938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_798310d706ece405689f3412792b3479447c41815a26e0ba0fd558221f80fdf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798310d706ece405689f3412792b3479447c41815a26e0ba0fd558221f80fdf0->enter($__internal_798310d706ece405689f3412792b3479447c41815a26e0ba0fd558221f80fdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_798310d706ece405689f3412792b3479447c41815a26e0ba0fd558221f80fdf0->leave($__internal_798310d706ece405689f3412792b3479447c41815a26e0ba0fd558221f80fdf0_prof);

        
        $__internal_9ace4a3a77989dda6b5bc4269e9be0e31e052ac525d81ce2287544d9c929a938->leave($__internal_9ace4a3a77989dda6b5bc4269e9be0e31e052ac525d81ce2287544d9c929a938_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
