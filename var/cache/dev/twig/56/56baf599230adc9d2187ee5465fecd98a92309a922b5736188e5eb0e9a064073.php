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
        $__internal_80b5a37658f80bc66376104744cb1e10861e18644c0837aac3d88323490cefdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b5a37658f80bc66376104744cb1e10861e18644c0837aac3d88323490cefdb->enter($__internal_80b5a37658f80bc66376104744cb1e10861e18644c0837aac3d88323490cefdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5dcced5f296568101d299de5f0860c10e0e1510ff6d7010b92d9394ae8c4eab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcced5f296568101d299de5f0860c10e0e1510ff6d7010b92d9394ae8c4eab6->enter($__internal_5dcced5f296568101d299de5f0860c10e0e1510ff6d7010b92d9394ae8c4eab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80b5a37658f80bc66376104744cb1e10861e18644c0837aac3d88323490cefdb->leave($__internal_80b5a37658f80bc66376104744cb1e10861e18644c0837aac3d88323490cefdb_prof);

        
        $__internal_5dcced5f296568101d299de5f0860c10e0e1510ff6d7010b92d9394ae8c4eab6->leave($__internal_5dcced5f296568101d299de5f0860c10e0e1510ff6d7010b92d9394ae8c4eab6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4de141aac15bc9010374ae033eaa8c1e607a5720e961daa044f7482f2630d5c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de141aac15bc9010374ae033eaa8c1e607a5720e961daa044f7482f2630d5c7->enter($__internal_4de141aac15bc9010374ae033eaa8c1e607a5720e961daa044f7482f2630d5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fc60e6926d7cc0e862ea5bdbc8c697c551e6f7a7af12b71a7d0113d085ad59b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc60e6926d7cc0e862ea5bdbc8c697c551e6f7a7af12b71a7d0113d085ad59b8->enter($__internal_fc60e6926d7cc0e862ea5bdbc8c697c551e6f7a7af12b71a7d0113d085ad59b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fc60e6926d7cc0e862ea5bdbc8c697c551e6f7a7af12b71a7d0113d085ad59b8->leave($__internal_fc60e6926d7cc0e862ea5bdbc8c697c551e6f7a7af12b71a7d0113d085ad59b8_prof);

        
        $__internal_4de141aac15bc9010374ae033eaa8c1e607a5720e961daa044f7482f2630d5c7->leave($__internal_4de141aac15bc9010374ae033eaa8c1e607a5720e961daa044f7482f2630d5c7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f33ed684ec03778a95f0a41e3ef2d48c3a377f8b67e53de36ce638b5e753bc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33ed684ec03778a95f0a41e3ef2d48c3a377f8b67e53de36ce638b5e753bc45->enter($__internal_f33ed684ec03778a95f0a41e3ef2d48c3a377f8b67e53de36ce638b5e753bc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_386558cc04c749da4794cf0fae020b3654c812a928c28e7197bb03feca494e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386558cc04c749da4794cf0fae020b3654c812a928c28e7197bb03feca494e30->enter($__internal_386558cc04c749da4794cf0fae020b3654c812a928c28e7197bb03feca494e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_386558cc04c749da4794cf0fae020b3654c812a928c28e7197bb03feca494e30->leave($__internal_386558cc04c749da4794cf0fae020b3654c812a928c28e7197bb03feca494e30_prof);

        
        $__internal_f33ed684ec03778a95f0a41e3ef2d48c3a377f8b67e53de36ce638b5e753bc45->leave($__internal_f33ed684ec03778a95f0a41e3ef2d48c3a377f8b67e53de36ce638b5e753bc45_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ced30b1fa9c3fd85efd6bb43c664b8ea14aec34ab2e3889473a81bdabad33d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced30b1fa9c3fd85efd6bb43c664b8ea14aec34ab2e3889473a81bdabad33d2c->enter($__internal_ced30b1fa9c3fd85efd6bb43c664b8ea14aec34ab2e3889473a81bdabad33d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_019b15702027a5766f7d939ee582c88dd97de4cbf5bcf153357881a4b69173b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019b15702027a5766f7d939ee582c88dd97de4cbf5bcf153357881a4b69173b0->enter($__internal_019b15702027a5766f7d939ee582c88dd97de4cbf5bcf153357881a4b69173b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_019b15702027a5766f7d939ee582c88dd97de4cbf5bcf153357881a4b69173b0->leave($__internal_019b15702027a5766f7d939ee582c88dd97de4cbf5bcf153357881a4b69173b0_prof);

        
        $__internal_ced30b1fa9c3fd85efd6bb43c664b8ea14aec34ab2e3889473a81bdabad33d2c->leave($__internal_ced30b1fa9c3fd85efd6bb43c664b8ea14aec34ab2e3889473a81bdabad33d2c_prof);

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
