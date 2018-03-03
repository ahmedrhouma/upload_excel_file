<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_9467fba267cdf670dd2f675d061723ee1439af1ec731981c82712c896e8e67e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a49655fe0681416cc14dea0b96eb0a7255e71484761e30956770b79890ae0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a49655fe0681416cc14dea0b96eb0a7255e71484761e30956770b79890ae0cd->enter($__internal_5a49655fe0681416cc14dea0b96eb0a7255e71484761e30956770b79890ae0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_5d610f4759e8555d8924360306d911aab00fdd2a97632a171fd5470852d6b05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d610f4759e8555d8924360306d911aab00fdd2a97632a171fd5470852d6b05d->enter($__internal_5d610f4759e8555d8924360306d911aab00fdd2a97632a171fd5470852d6b05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a49655fe0681416cc14dea0b96eb0a7255e71484761e30956770b79890ae0cd->leave($__internal_5a49655fe0681416cc14dea0b96eb0a7255e71484761e30956770b79890ae0cd_prof);

        
        $__internal_5d610f4759e8555d8924360306d911aab00fdd2a97632a171fd5470852d6b05d->leave($__internal_5d610f4759e8555d8924360306d911aab00fdd2a97632a171fd5470852d6b05d_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_380d477fb51b36fd45d3e2361a536e7cf64df11a9dac1e190ea69479aa3ea565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_380d477fb51b36fd45d3e2361a536e7cf64df11a9dac1e190ea69479aa3ea565->enter($__internal_380d477fb51b36fd45d3e2361a536e7cf64df11a9dac1e190ea69479aa3ea565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_bfa204bf65858dc74e0ae7a95b74b54c37a925dce94b29678fa8b41b92f6a44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa204bf65858dc74e0ae7a95b74b54c37a925dce94b29678fa8b41b92f6a44a->enter($__internal_bfa204bf65858dc74e0ae7a95b74b54c37a925dce94b29678fa8b41b92f6a44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bfa204bf65858dc74e0ae7a95b74b54c37a925dce94b29678fa8b41b92f6a44a->leave($__internal_bfa204bf65858dc74e0ae7a95b74b54c37a925dce94b29678fa8b41b92f6a44a_prof);

        
        $__internal_380d477fb51b36fd45d3e2361a536e7cf64df11a9dac1e190ea69479aa3ea565->leave($__internal_380d477fb51b36fd45d3e2361a536e7cf64df11a9dac1e190ea69479aa3ea565_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_05387a2ae9c5715f364114ffca751e357b4403db915e297ce662d6da9998eb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05387a2ae9c5715f364114ffca751e357b4403db915e297ce662d6da9998eb9d->enter($__internal_05387a2ae9c5715f364114ffca751e357b4403db915e297ce662d6da9998eb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_41aabc9810d37340121dbfc968a7b3e84e9d36992b00f60fba0fd12b00ba0246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41aabc9810d37340121dbfc968a7b3e84e9d36992b00f60fba0fd12b00ba0246->enter($__internal_41aabc9810d37340121dbfc968a7b3e84e9d36992b00f60fba0fd12b00ba0246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_41aabc9810d37340121dbfc968a7b3e84e9d36992b00f60fba0fd12b00ba0246->leave($__internal_41aabc9810d37340121dbfc968a7b3e84e9d36992b00f60fba0fd12b00ba0246_prof);

        
        $__internal_05387a2ae9c5715f364114ffca751e357b4403db915e297ce662d6da9998eb9d->leave($__internal_05387a2ae9c5715f364114ffca751e357b4403db915e297ce662d6da9998eb9d_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_4635c1a65ea5363f00fac6e53029b3d7eea20a316ce3edf54cdf71851da68877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4635c1a65ea5363f00fac6e53029b3d7eea20a316ce3edf54cdf71851da68877->enter($__internal_4635c1a65ea5363f00fac6e53029b3d7eea20a316ce3edf54cdf71851da68877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_85ac0bf784c76b4bc18be38da14e489aa0a22128083a01bdf9d8302169670e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ac0bf784c76b4bc18be38da14e489aa0a22128083a01bdf9d8302169670e7b->enter($__internal_85ac0bf784c76b4bc18be38da14e489aa0a22128083a01bdf9d8302169670e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_85ac0bf784c76b4bc18be38da14e489aa0a22128083a01bdf9d8302169670e7b->leave($__internal_85ac0bf784c76b4bc18be38da14e489aa0a22128083a01bdf9d8302169670e7b_prof);

        
        $__internal_4635c1a65ea5363f00fac6e53029b3d7eea20a316ce3edf54cdf71851da68877->leave($__internal_4635c1a65ea5363f00fac6e53029b3d7eea20a316ce3edf54cdf71851da68877_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e89517718656fc041520bba57ea31570b38c89971910b07d002217f7f5739b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e89517718656fc041520bba57ea31570b38c89971910b07d002217f7f5739b69->enter($__internal_e89517718656fc041520bba57ea31570b38c89971910b07d002217f7f5739b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_db2ed12042981a9651fbceaa86eb108dcce3cd7c7b19b348a3fcd6e4d02e4743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2ed12042981a9651fbceaa86eb108dcce3cd7c7b19b348a3fcd6e4d02e4743->enter($__internal_db2ed12042981a9651fbceaa86eb108dcce3cd7c7b19b348a3fcd6e4d02e4743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_db2ed12042981a9651fbceaa86eb108dcce3cd7c7b19b348a3fcd6e4d02e4743->leave($__internal_db2ed12042981a9651fbceaa86eb108dcce3cd7c7b19b348a3fcd6e4d02e4743_prof);

        
        $__internal_e89517718656fc041520bba57ea31570b38c89971910b07d002217f7f5739b69->leave($__internal_e89517718656fc041520bba57ea31570b38c89971910b07d002217f7f5739b69_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a4062edae13045cdb1486e9dc8b6ee3a6c11e98cd9864be24c734e7b462796c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4062edae13045cdb1486e9dc8b6ee3a6c11e98cd9864be24c734e7b462796c0->enter($__internal_a4062edae13045cdb1486e9dc8b6ee3a6c11e98cd9864be24c734e7b462796c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_5a3d3a8fca7d55673adbb15885390dcf5d16f4ac93900e353bef05c6d3d8a58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3d3a8fca7d55673adbb15885390dcf5d16f4ac93900e353bef05c6d3d8a58e->enter($__internal_5a3d3a8fca7d55673adbb15885390dcf5d16f4ac93900e353bef05c6d3d8a58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_5a3d3a8fca7d55673adbb15885390dcf5d16f4ac93900e353bef05c6d3d8a58e->leave($__internal_5a3d3a8fca7d55673adbb15885390dcf5d16f4ac93900e353bef05c6d3d8a58e_prof);

        
        $__internal_a4062edae13045cdb1486e9dc8b6ee3a6c11e98cd9864be24c734e7b462796c0->leave($__internal_a4062edae13045cdb1486e9dc8b6ee3a6c11e98cd9864be24c734e7b462796c0_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_023dfff72b9df315e5e6eb5bcf85fb1c2200f9f4e5c0da09b6a18258106187a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023dfff72b9df315e5e6eb5bcf85fb1c2200f9f4e5c0da09b6a18258106187a5->enter($__internal_023dfff72b9df315e5e6eb5bcf85fb1c2200f9f4e5c0da09b6a18258106187a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_57afba054325e7705f8e484779c76d412cb475a87034c030028ec635e72e9157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57afba054325e7705f8e484779c76d412cb475a87034c030028ec635e72e9157->enter($__internal_57afba054325e7705f8e484779c76d412cb475a87034c030028ec635e72e9157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_57afba054325e7705f8e484779c76d412cb475a87034c030028ec635e72e9157->leave($__internal_57afba054325e7705f8e484779c76d412cb475a87034c030028ec635e72e9157_prof);

        
        $__internal_023dfff72b9df315e5e6eb5bcf85fb1c2200f9f4e5c0da09b6a18258106187a5->leave($__internal_023dfff72b9df315e5e6eb5bcf85fb1c2200f9f4e5c0da09b6a18258106187a5_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5a2d5b6ba6a931b690c5f6924e33ec84498033a13ce0284efd701287720ec186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2d5b6ba6a931b690c5f6924e33ec84498033a13ce0284efd701287720ec186->enter($__internal_5a2d5b6ba6a931b690c5f6924e33ec84498033a13ce0284efd701287720ec186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_36511a7874a010f75e97203bf6770da71276d0f9b627a20319c0dd72ad44ff40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36511a7874a010f75e97203bf6770da71276d0f9b627a20319c0dd72ad44ff40->enter($__internal_36511a7874a010f75e97203bf6770da71276d0f9b627a20319c0dd72ad44ff40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_36511a7874a010f75e97203bf6770da71276d0f9b627a20319c0dd72ad44ff40->leave($__internal_36511a7874a010f75e97203bf6770da71276d0f9b627a20319c0dd72ad44ff40_prof);

        
        $__internal_5a2d5b6ba6a931b690c5f6924e33ec84498033a13ce0284efd701287720ec186->leave($__internal_5a2d5b6ba6a931b690c5f6924e33ec84498033a13ce0284efd701287720ec186_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_09f9848a0e361249b74ecc788c5b2a410bf33129a67adb3d008a97f78e0e936d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f9848a0e361249b74ecc788c5b2a410bf33129a67adb3d008a97f78e0e936d->enter($__internal_09f9848a0e361249b74ecc788c5b2a410bf33129a67adb3d008a97f78e0e936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_ee932ccbc6f1d1d4033f47146458eea0b8ce977da317790d2202c4c009912421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee932ccbc6f1d1d4033f47146458eea0b8ce977da317790d2202c4c009912421->enter($__internal_ee932ccbc6f1d1d4033f47146458eea0b8ce977da317790d2202c4c009912421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_ee932ccbc6f1d1d4033f47146458eea0b8ce977da317790d2202c4c009912421->leave($__internal_ee932ccbc6f1d1d4033f47146458eea0b8ce977da317790d2202c4c009912421_prof);

        
        $__internal_09f9848a0e361249b74ecc788c5b2a410bf33129a67adb3d008a97f78e0e936d->leave($__internal_09f9848a0e361249b74ecc788c5b2a410bf33129a67adb3d008a97f78e0e936d_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4ecdaf7d868dacd07690d88821b2238ecd85b4b9255ca589755c126cd7e667f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ecdaf7d868dacd07690d88821b2238ecd85b4b9255ca589755c126cd7e667f2->enter($__internal_4ecdaf7d868dacd07690d88821b2238ecd85b4b9255ca589755c126cd7e667f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0e8765611179dbf11eb4f5ea5996af4d1777a96c4371d8606e1d4298cab84cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8765611179dbf11eb4f5ea5996af4d1777a96c4371d8606e1d4298cab84cd7->enter($__internal_0e8765611179dbf11eb4f5ea5996af4d1777a96c4371d8606e1d4298cab84cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_0e8765611179dbf11eb4f5ea5996af4d1777a96c4371d8606e1d4298cab84cd7->leave($__internal_0e8765611179dbf11eb4f5ea5996af4d1777a96c4371d8606e1d4298cab84cd7_prof);

        
        $__internal_4ecdaf7d868dacd07690d88821b2238ecd85b4b9255ca589755c126cd7e667f2->leave($__internal_4ecdaf7d868dacd07690d88821b2238ecd85b4b9255ca589755c126cd7e667f2_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_052554557a9fbc7722ee71442002b88f68c841a20e084000744781bb795fac0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052554557a9fbc7722ee71442002b88f68c841a20e084000744781bb795fac0f->enter($__internal_052554557a9fbc7722ee71442002b88f68c841a20e084000744781bb795fac0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f8a411550537cf4ee0863d4803642cce87fb654730d87011c1565575ac3962fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a411550537cf4ee0863d4803642cce87fb654730d87011c1565575ac3962fe->enter($__internal_f8a411550537cf4ee0863d4803642cce87fb654730d87011c1565575ac3962fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_f8a411550537cf4ee0863d4803642cce87fb654730d87011c1565575ac3962fe->leave($__internal_f8a411550537cf4ee0863d4803642cce87fb654730d87011c1565575ac3962fe_prof);

        
        $__internal_052554557a9fbc7722ee71442002b88f68c841a20e084000744781bb795fac0f->leave($__internal_052554557a9fbc7722ee71442002b88f68c841a20e084000744781bb795fac0f_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_58ec4b98f54102cc4c4743b9804c4bf07da351aa260e7ddbb21d281116e2a2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ec4b98f54102cc4c4743b9804c4bf07da351aa260e7ddbb21d281116e2a2d3->enter($__internal_58ec4b98f54102cc4c4743b9804c4bf07da351aa260e7ddbb21d281116e2a2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2a8afdb8893c0009a508e742efbe7b661cf9ae85735fe2c5506e021183f9b15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8afdb8893c0009a508e742efbe7b661cf9ae85735fe2c5506e021183f9b15b->enter($__internal_2a8afdb8893c0009a508e742efbe7b661cf9ae85735fe2c5506e021183f9b15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_2a8afdb8893c0009a508e742efbe7b661cf9ae85735fe2c5506e021183f9b15b->leave($__internal_2a8afdb8893c0009a508e742efbe7b661cf9ae85735fe2c5506e021183f9b15b_prof);

        
        $__internal_58ec4b98f54102cc4c4743b9804c4bf07da351aa260e7ddbb21d281116e2a2d3->leave($__internal_58ec4b98f54102cc4c4743b9804c4bf07da351aa260e7ddbb21d281116e2a2d3_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c82d224e5ffaefff17aee8e3cd4783a82878e280c5576dc614a58305ddde796e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82d224e5ffaefff17aee8e3cd4783a82878e280c5576dc614a58305ddde796e->enter($__internal_c82d224e5ffaefff17aee8e3cd4783a82878e280c5576dc614a58305ddde796e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_578056b0ab8d2db58b3cf2581eadfcb9ffbecc5a7cbe82b8cde119f3b5921341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578056b0ab8d2db58b3cf2581eadfcb9ffbecc5a7cbe82b8cde119f3b5921341->enter($__internal_578056b0ab8d2db58b3cf2581eadfcb9ffbecc5a7cbe82b8cde119f3b5921341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_578056b0ab8d2db58b3cf2581eadfcb9ffbecc5a7cbe82b8cde119f3b5921341->leave($__internal_578056b0ab8d2db58b3cf2581eadfcb9ffbecc5a7cbe82b8cde119f3b5921341_prof);

        
        $__internal_c82d224e5ffaefff17aee8e3cd4783a82878e280c5576dc614a58305ddde796e->leave($__internal_c82d224e5ffaefff17aee8e3cd4783a82878e280c5576dc614a58305ddde796e_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9697dafeb91d1601133c64830ffb1976e6f2fc9187fa81baf22445174918a114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9697dafeb91d1601133c64830ffb1976e6f2fc9187fa81baf22445174918a114->enter($__internal_9697dafeb91d1601133c64830ffb1976e6f2fc9187fa81baf22445174918a114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b8e9f65470d2e00180e8fad9253f196988bff83e90676b76227eb7800c0462ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e9f65470d2e00180e8fad9253f196988bff83e90676b76227eb7800c0462ed->enter($__internal_b8e9f65470d2e00180e8fad9253f196988bff83e90676b76227eb7800c0462ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_b8e9f65470d2e00180e8fad9253f196988bff83e90676b76227eb7800c0462ed->leave($__internal_b8e9f65470d2e00180e8fad9253f196988bff83e90676b76227eb7800c0462ed_prof);

        
        $__internal_9697dafeb91d1601133c64830ffb1976e6f2fc9187fa81baf22445174918a114->leave($__internal_9697dafeb91d1601133c64830ffb1976e6f2fc9187fa81baf22445174918a114_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_cdf28550ac8c97018437e05e3dbb2a7e6485338a0baca18496256d30d64c78db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf28550ac8c97018437e05e3dbb2a7e6485338a0baca18496256d30d64c78db->enter($__internal_cdf28550ac8c97018437e05e3dbb2a7e6485338a0baca18496256d30d64c78db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f036899a9d38c52d947e61343cc45e5f7697ddd902857662da44f73ab4af23af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f036899a9d38c52d947e61343cc45e5f7697ddd902857662da44f73ab4af23af->enter($__internal_f036899a9d38c52d947e61343cc45e5f7697ddd902857662da44f73ab4af23af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f036899a9d38c52d947e61343cc45e5f7697ddd902857662da44f73ab4af23af->leave($__internal_f036899a9d38c52d947e61343cc45e5f7697ddd902857662da44f73ab4af23af_prof);

        
        $__internal_cdf28550ac8c97018437e05e3dbb2a7e6485338a0baca18496256d30d64c78db->leave($__internal_cdf28550ac8c97018437e05e3dbb2a7e6485338a0baca18496256d30d64c78db_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ebd1db12b9fe65ab69ed281bf1256540e62ca47ec85d94033277be39f198e21b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd1db12b9fe65ab69ed281bf1256540e62ca47ec85d94033277be39f198e21b->enter($__internal_ebd1db12b9fe65ab69ed281bf1256540e62ca47ec85d94033277be39f198e21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a0cbe9b30ada48db3e371ce51f61c41f390bbe0a7638db38be08dc3f9fa789ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cbe9b30ada48db3e371ce51f61c41f390bbe0a7638db38be08dc3f9fa789ec->enter($__internal_a0cbe9b30ada48db3e371ce51f61c41f390bbe0a7638db38be08dc3f9fa789ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a0cbe9b30ada48db3e371ce51f61c41f390bbe0a7638db38be08dc3f9fa789ec->leave($__internal_a0cbe9b30ada48db3e371ce51f61c41f390bbe0a7638db38be08dc3f9fa789ec_prof);

        
        $__internal_ebd1db12b9fe65ab69ed281bf1256540e62ca47ec85d94033277be39f198e21b->leave($__internal_ebd1db12b9fe65ab69ed281bf1256540e62ca47ec85d94033277be39f198e21b_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_d55dad646bc492d6c7d3236cd55b0c18a742b3530f98092e7da774d106efa420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55dad646bc492d6c7d3236cd55b0c18a742b3530f98092e7da774d106efa420->enter($__internal_d55dad646bc492d6c7d3236cd55b0c18a742b3530f98092e7da774d106efa420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_a61bd59d682356a1a690cf60083425496ffea0c66d67b8f1dad611e705fb5d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61bd59d682356a1a690cf60083425496ffea0c66d67b8f1dad611e705fb5d08->enter($__internal_a61bd59d682356a1a690cf60083425496ffea0c66d67b8f1dad611e705fb5d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a61bd59d682356a1a690cf60083425496ffea0c66d67b8f1dad611e705fb5d08->leave($__internal_a61bd59d682356a1a690cf60083425496ffea0c66d67b8f1dad611e705fb5d08_prof);

        
        $__internal_d55dad646bc492d6c7d3236cd55b0c18a742b3530f98092e7da774d106efa420->leave($__internal_d55dad646bc492d6c7d3236cd55b0c18a742b3530f98092e7da774d106efa420_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_93dfd9a28d6c770b0038b1ac8555573ab29be67da6d70ee6927534bc29c676b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93dfd9a28d6c770b0038b1ac8555573ab29be67da6d70ee6927534bc29c676b4->enter($__internal_93dfd9a28d6c770b0038b1ac8555573ab29be67da6d70ee6927534bc29c676b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_7e3ceda9f35125d27e26d7b125cb0d7bad23dc9ded8bef16ab605a522a2432a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3ceda9f35125d27e26d7b125cb0d7bad23dc9ded8bef16ab605a522a2432a6->enter($__internal_7e3ceda9f35125d27e26d7b125cb0d7bad23dc9ded8bef16ab605a522a2432a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_7e3ceda9f35125d27e26d7b125cb0d7bad23dc9ded8bef16ab605a522a2432a6->leave($__internal_7e3ceda9f35125d27e26d7b125cb0d7bad23dc9ded8bef16ab605a522a2432a6_prof);

        
        $__internal_93dfd9a28d6c770b0038b1ac8555573ab29be67da6d70ee6927534bc29c676b4->leave($__internal_93dfd9a28d6c770b0038b1ac8555573ab29be67da6d70ee6927534bc29c676b4_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_44f3c58112829d435a84d25f4e21c79c92d0addfadb2f73706ada8e278eb9ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f3c58112829d435a84d25f4e21c79c92d0addfadb2f73706ada8e278eb9ba5->enter($__internal_44f3c58112829d435a84d25f4e21c79c92d0addfadb2f73706ada8e278eb9ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4824285168aad936b62f043ac00e874186c08d8c577a5c9b85d7ae2abbb615f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4824285168aad936b62f043ac00e874186c08d8c577a5c9b85d7ae2abbb615f0->enter($__internal_4824285168aad936b62f043ac00e874186c08d8c577a5c9b85d7ae2abbb615f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_4824285168aad936b62f043ac00e874186c08d8c577a5c9b85d7ae2abbb615f0->leave($__internal_4824285168aad936b62f043ac00e874186c08d8c577a5c9b85d7ae2abbb615f0_prof);

        
        $__internal_44f3c58112829d435a84d25f4e21c79c92d0addfadb2f73706ada8e278eb9ba5->leave($__internal_44f3c58112829d435a84d25f4e21c79c92d0addfadb2f73706ada8e278eb9ba5_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_26481f86fc50c88fba4dfc85f093bebaa9cd91b0cc2b117575657d6548ecf05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26481f86fc50c88fba4dfc85f093bebaa9cd91b0cc2b117575657d6548ecf05c->enter($__internal_26481f86fc50c88fba4dfc85f093bebaa9cd91b0cc2b117575657d6548ecf05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ae064d727283251bb07f68d02929cbc315c60db86a088c5df7437619d315ecef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae064d727283251bb07f68d02929cbc315c60db86a088c5df7437619d315ecef->enter($__internal_ae064d727283251bb07f68d02929cbc315c60db86a088c5df7437619d315ecef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ae064d727283251bb07f68d02929cbc315c60db86a088c5df7437619d315ecef->leave($__internal_ae064d727283251bb07f68d02929cbc315c60db86a088c5df7437619d315ecef_prof);

        
        $__internal_26481f86fc50c88fba4dfc85f093bebaa9cd91b0cc2b117575657d6548ecf05c->leave($__internal_26481f86fc50c88fba4dfc85f093bebaa9cd91b0cc2b117575657d6548ecf05c_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_969873804a20d5b6e487f49eb7f95782ed8c566babb0849f2d9e0b8c6be715f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969873804a20d5b6e487f49eb7f95782ed8c566babb0849f2d9e0b8c6be715f1->enter($__internal_969873804a20d5b6e487f49eb7f95782ed8c566babb0849f2d9e0b8c6be715f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9c7710643a20a31bb06ba49a9c7b020c836690e0ba54ec1ce4def7a8db9bf7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7710643a20a31bb06ba49a9c7b020c836690e0ba54ec1ce4def7a8db9bf7cf->enter($__internal_9c7710643a20a31bb06ba49a9c7b020c836690e0ba54ec1ce4def7a8db9bf7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9c7710643a20a31bb06ba49a9c7b020c836690e0ba54ec1ce4def7a8db9bf7cf->leave($__internal_9c7710643a20a31bb06ba49a9c7b020c836690e0ba54ec1ce4def7a8db9bf7cf_prof);

        
        $__internal_969873804a20d5b6e487f49eb7f95782ed8c566babb0849f2d9e0b8c6be715f1->leave($__internal_969873804a20d5b6e487f49eb7f95782ed8c566babb0849f2d9e0b8c6be715f1_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_9afebbb371f8fccfb26274611cd226446fc1d57240e694e85dc3066d80cb6ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9afebbb371f8fccfb26274611cd226446fc1d57240e694e85dc3066d80cb6ba0->enter($__internal_9afebbb371f8fccfb26274611cd226446fc1d57240e694e85dc3066d80cb6ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_110265af6828d165191a2680fa13b629a50e4e248e73904154364a4b938ac9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110265af6828d165191a2680fa13b629a50e4e248e73904154364a4b938ac9f7->enter($__internal_110265af6828d165191a2680fa13b629a50e4e248e73904154364a4b938ac9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_110265af6828d165191a2680fa13b629a50e4e248e73904154364a4b938ac9f7->leave($__internal_110265af6828d165191a2680fa13b629a50e4e248e73904154364a4b938ac9f7_prof);

        
        $__internal_9afebbb371f8fccfb26274611cd226446fc1d57240e694e85dc3066d80cb6ba0->leave($__internal_9afebbb371f8fccfb26274611cd226446fc1d57240e694e85dc3066d80cb6ba0_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_a78a6f1eff6b9248858abf0cc9326c34c0497caf9e8235303d3db8c65da53b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78a6f1eff6b9248858abf0cc9326c34c0497caf9e8235303d3db8c65da53b22->enter($__internal_a78a6f1eff6b9248858abf0cc9326c34c0497caf9e8235303d3db8c65da53b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_42b09266f6db926293b9f34a51bad70ef7e759bc6102311214df6e9a24393a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b09266f6db926293b9f34a51bad70ef7e759bc6102311214df6e9a24393a5d->enter($__internal_42b09266f6db926293b9f34a51bad70ef7e759bc6102311214df6e9a24393a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_42b09266f6db926293b9f34a51bad70ef7e759bc6102311214df6e9a24393a5d->leave($__internal_42b09266f6db926293b9f34a51bad70ef7e759bc6102311214df6e9a24393a5d_prof);

        
        $__internal_a78a6f1eff6b9248858abf0cc9326c34c0497caf9e8235303d3db8c65da53b22->leave($__internal_a78a6f1eff6b9248858abf0cc9326c34c0497caf9e8235303d3db8c65da53b22_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_dd29b3e0026f9274167c7ae79a066fef611c312891bde002915190219a5ef573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd29b3e0026f9274167c7ae79a066fef611c312891bde002915190219a5ef573->enter($__internal_dd29b3e0026f9274167c7ae79a066fef611c312891bde002915190219a5ef573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e764b692ea8d9aa46cb27c6797bcbfd2cb9453c00e3c126b1531160326c8439d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e764b692ea8d9aa46cb27c6797bcbfd2cb9453c00e3c126b1531160326c8439d->enter($__internal_e764b692ea8d9aa46cb27c6797bcbfd2cb9453c00e3c126b1531160326c8439d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_e764b692ea8d9aa46cb27c6797bcbfd2cb9453c00e3c126b1531160326c8439d->leave($__internal_e764b692ea8d9aa46cb27c6797bcbfd2cb9453c00e3c126b1531160326c8439d_prof);

        
        $__internal_dd29b3e0026f9274167c7ae79a066fef611c312891bde002915190219a5ef573->leave($__internal_dd29b3e0026f9274167c7ae79a066fef611c312891bde002915190219a5ef573_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a7db8d13245f7a082ac5acae0366ca978e986f4659f672cea4a4d4c837041eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7db8d13245f7a082ac5acae0366ca978e986f4659f672cea4a4d4c837041eeb->enter($__internal_a7db8d13245f7a082ac5acae0366ca978e986f4659f672cea4a4d4c837041eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_fd6e8e76fae842916d8272c2c13857605cdbd9330009cc5331d73e4254c42fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6e8e76fae842916d8272c2c13857605cdbd9330009cc5331d73e4254c42fe3->enter($__internal_fd6e8e76fae842916d8272c2c13857605cdbd9330009cc5331d73e4254c42fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_fd6e8e76fae842916d8272c2c13857605cdbd9330009cc5331d73e4254c42fe3->leave($__internal_fd6e8e76fae842916d8272c2c13857605cdbd9330009cc5331d73e4254c42fe3_prof);

        
        $__internal_a7db8d13245f7a082ac5acae0366ca978e986f4659f672cea4a4d4c837041eeb->leave($__internal_a7db8d13245f7a082ac5acae0366ca978e986f4659f672cea4a4d4c837041eeb_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d62aa4bba0552507477ad890f1e739299f83ddcca0587da016fae788252f6cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62aa4bba0552507477ad890f1e739299f83ddcca0587da016fae788252f6cf4->enter($__internal_d62aa4bba0552507477ad890f1e739299f83ddcca0587da016fae788252f6cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_680f76042e8f3d189f4eddbcf48ddfa7c471d714cd65af3304a329e5ef3a3c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680f76042e8f3d189f4eddbcf48ddfa7c471d714cd65af3304a329e5ef3a3c0c->enter($__internal_680f76042e8f3d189f4eddbcf48ddfa7c471d714cd65af3304a329e5ef3a3c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_680f76042e8f3d189f4eddbcf48ddfa7c471d714cd65af3304a329e5ef3a3c0c->leave($__internal_680f76042e8f3d189f4eddbcf48ddfa7c471d714cd65af3304a329e5ef3a3c0c_prof);

        
        $__internal_d62aa4bba0552507477ad890f1e739299f83ddcca0587da016fae788252f6cf4->leave($__internal_d62aa4bba0552507477ad890f1e739299f83ddcca0587da016fae788252f6cf4_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\wamp\\www\\test\\projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
