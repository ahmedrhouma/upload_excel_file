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
        $__internal_454d1c4919c0ddc7a5a6092c1da3c498cd224555abd961bbfc90907409b40934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454d1c4919c0ddc7a5a6092c1da3c498cd224555abd961bbfc90907409b40934->enter($__internal_454d1c4919c0ddc7a5a6092c1da3c498cd224555abd961bbfc90907409b40934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_6a0e8b98fd76be4e5596ca0c260e7971c6315d8a9dfbffc867f3055a88fe0b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0e8b98fd76be4e5596ca0c260e7971c6315d8a9dfbffc867f3055a88fe0b15->enter($__internal_6a0e8b98fd76be4e5596ca0c260e7971c6315d8a9dfbffc867f3055a88fe0b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_454d1c4919c0ddc7a5a6092c1da3c498cd224555abd961bbfc90907409b40934->leave($__internal_454d1c4919c0ddc7a5a6092c1da3c498cd224555abd961bbfc90907409b40934_prof);

        
        $__internal_6a0e8b98fd76be4e5596ca0c260e7971c6315d8a9dfbffc867f3055a88fe0b15->leave($__internal_6a0e8b98fd76be4e5596ca0c260e7971c6315d8a9dfbffc867f3055a88fe0b15_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_4f5885e05b0a2c712747433d74a758e8ebb2a29351746dc80367c4a74a79c194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5885e05b0a2c712747433d74a758e8ebb2a29351746dc80367c4a74a79c194->enter($__internal_4f5885e05b0a2c712747433d74a758e8ebb2a29351746dc80367c4a74a79c194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9142254b57b308c840c36fd381eaeb38399c5f50a5e794880859f0f66d8f4379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9142254b57b308c840c36fd381eaeb38399c5f50a5e794880859f0f66d8f4379->enter($__internal_9142254b57b308c840c36fd381eaeb38399c5f50a5e794880859f0f66d8f4379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9142254b57b308c840c36fd381eaeb38399c5f50a5e794880859f0f66d8f4379->leave($__internal_9142254b57b308c840c36fd381eaeb38399c5f50a5e794880859f0f66d8f4379_prof);

        
        $__internal_4f5885e05b0a2c712747433d74a758e8ebb2a29351746dc80367c4a74a79c194->leave($__internal_4f5885e05b0a2c712747433d74a758e8ebb2a29351746dc80367c4a74a79c194_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c1d7294185a1f092483c09b688ca38bf33a9c6938fb115317ecb1c9396813628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d7294185a1f092483c09b688ca38bf33a9c6938fb115317ecb1c9396813628->enter($__internal_c1d7294185a1f092483c09b688ca38bf33a9c6938fb115317ecb1c9396813628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a1a240682d6fa60ef474a2f48694ec7281d23b4f366fe941f342a0139f368854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a240682d6fa60ef474a2f48694ec7281d23b4f366fe941f342a0139f368854->enter($__internal_a1a240682d6fa60ef474a2f48694ec7281d23b4f366fe941f342a0139f368854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_a1a240682d6fa60ef474a2f48694ec7281d23b4f366fe941f342a0139f368854->leave($__internal_a1a240682d6fa60ef474a2f48694ec7281d23b4f366fe941f342a0139f368854_prof);

        
        $__internal_c1d7294185a1f092483c09b688ca38bf33a9c6938fb115317ecb1c9396813628->leave($__internal_c1d7294185a1f092483c09b688ca38bf33a9c6938fb115317ecb1c9396813628_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_305a5ac6eba2d126726017ab18c981b37819bcec56dca79199074bf79c6f51e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305a5ac6eba2d126726017ab18c981b37819bcec56dca79199074bf79c6f51e8->enter($__internal_305a5ac6eba2d126726017ab18c981b37819bcec56dca79199074bf79c6f51e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1dbc7c58565ded291be7d3c25de5dd74d4924e3204f42fbc1eb53961c0e05822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbc7c58565ded291be7d3c25de5dd74d4924e3204f42fbc1eb53961c0e05822->enter($__internal_1dbc7c58565ded291be7d3c25de5dd74d4924e3204f42fbc1eb53961c0e05822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1dbc7c58565ded291be7d3c25de5dd74d4924e3204f42fbc1eb53961c0e05822->leave($__internal_1dbc7c58565ded291be7d3c25de5dd74d4924e3204f42fbc1eb53961c0e05822_prof);

        
        $__internal_305a5ac6eba2d126726017ab18c981b37819bcec56dca79199074bf79c6f51e8->leave($__internal_305a5ac6eba2d126726017ab18c981b37819bcec56dca79199074bf79c6f51e8_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f16c3ea879d19fe60bcac51417d7b8f9653aa8c46120ed2e06c3dff3e0d78fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16c3ea879d19fe60bcac51417d7b8f9653aa8c46120ed2e06c3dff3e0d78fd8->enter($__internal_f16c3ea879d19fe60bcac51417d7b8f9653aa8c46120ed2e06c3dff3e0d78fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_9b45d1e0add3e4881a3c1ce215311817c4d4663c9e0f3563353b8671ad9ddc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b45d1e0add3e4881a3c1ce215311817c4d4663c9e0f3563353b8671ad9ddc55->enter($__internal_9b45d1e0add3e4881a3c1ce215311817c4d4663c9e0f3563353b8671ad9ddc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_9b45d1e0add3e4881a3c1ce215311817c4d4663c9e0f3563353b8671ad9ddc55->leave($__internal_9b45d1e0add3e4881a3c1ce215311817c4d4663c9e0f3563353b8671ad9ddc55_prof);

        
        $__internal_f16c3ea879d19fe60bcac51417d7b8f9653aa8c46120ed2e06c3dff3e0d78fd8->leave($__internal_f16c3ea879d19fe60bcac51417d7b8f9653aa8c46120ed2e06c3dff3e0d78fd8_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ba1a9326d49f4a3d375c40d7fdb82be91b1e2f2d373556f289962ed9630e8f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1a9326d49f4a3d375c40d7fdb82be91b1e2f2d373556f289962ed9630e8f8d->enter($__internal_ba1a9326d49f4a3d375c40d7fdb82be91b1e2f2d373556f289962ed9630e8f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_888cc343134e8af1c4ab2a00a14c56fdc4b62d1cd97132d8096e8304fa8a6950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888cc343134e8af1c4ab2a00a14c56fdc4b62d1cd97132d8096e8304fa8a6950->enter($__internal_888cc343134e8af1c4ab2a00a14c56fdc4b62d1cd97132d8096e8304fa8a6950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_888cc343134e8af1c4ab2a00a14c56fdc4b62d1cd97132d8096e8304fa8a6950->leave($__internal_888cc343134e8af1c4ab2a00a14c56fdc4b62d1cd97132d8096e8304fa8a6950_prof);

        
        $__internal_ba1a9326d49f4a3d375c40d7fdb82be91b1e2f2d373556f289962ed9630e8f8d->leave($__internal_ba1a9326d49f4a3d375c40d7fdb82be91b1e2f2d373556f289962ed9630e8f8d_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1591f7b6b14f87d20928fac6779be00e59f52aa94ed482006b97b52897cf2cfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1591f7b6b14f87d20928fac6779be00e59f52aa94ed482006b97b52897cf2cfd->enter($__internal_1591f7b6b14f87d20928fac6779be00e59f52aa94ed482006b97b52897cf2cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_cc95a3de745e751211230af75e1e59f7303150283e44353d57f77b39a9bd913a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc95a3de745e751211230af75e1e59f7303150283e44353d57f77b39a9bd913a->enter($__internal_cc95a3de745e751211230af75e1e59f7303150283e44353d57f77b39a9bd913a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_cc95a3de745e751211230af75e1e59f7303150283e44353d57f77b39a9bd913a->leave($__internal_cc95a3de745e751211230af75e1e59f7303150283e44353d57f77b39a9bd913a_prof);

        
        $__internal_1591f7b6b14f87d20928fac6779be00e59f52aa94ed482006b97b52897cf2cfd->leave($__internal_1591f7b6b14f87d20928fac6779be00e59f52aa94ed482006b97b52897cf2cfd_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6ffd66dcaf7cf37c04b1f11daf3d7a223e92a23343485acd5fa93bb1435b1b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ffd66dcaf7cf37c04b1f11daf3d7a223e92a23343485acd5fa93bb1435b1b78->enter($__internal_6ffd66dcaf7cf37c04b1f11daf3d7a223e92a23343485acd5fa93bb1435b1b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ce852178989ac1d966f0ff828efdc79f94c92826bf633acf28173b29ef178954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce852178989ac1d966f0ff828efdc79f94c92826bf633acf28173b29ef178954->enter($__internal_ce852178989ac1d966f0ff828efdc79f94c92826bf633acf28173b29ef178954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_ce852178989ac1d966f0ff828efdc79f94c92826bf633acf28173b29ef178954->leave($__internal_ce852178989ac1d966f0ff828efdc79f94c92826bf633acf28173b29ef178954_prof);

        
        $__internal_6ffd66dcaf7cf37c04b1f11daf3d7a223e92a23343485acd5fa93bb1435b1b78->leave($__internal_6ffd66dcaf7cf37c04b1f11daf3d7a223e92a23343485acd5fa93bb1435b1b78_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ab9054df8dc94c5f7398efb58420c2c8d155e672f1b3b7ac8b3dc51f95ab4dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9054df8dc94c5f7398efb58420c2c8d155e672f1b3b7ac8b3dc51f95ab4dfd->enter($__internal_ab9054df8dc94c5f7398efb58420c2c8d155e672f1b3b7ac8b3dc51f95ab4dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_d43e913cd8fd71b1c1040b9a873195fc65a5aab5e7c960792f8c0190b12a489c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43e913cd8fd71b1c1040b9a873195fc65a5aab5e7c960792f8c0190b12a489c->enter($__internal_d43e913cd8fd71b1c1040b9a873195fc65a5aab5e7c960792f8c0190b12a489c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_d43e913cd8fd71b1c1040b9a873195fc65a5aab5e7c960792f8c0190b12a489c->leave($__internal_d43e913cd8fd71b1c1040b9a873195fc65a5aab5e7c960792f8c0190b12a489c_prof);

        
        $__internal_ab9054df8dc94c5f7398efb58420c2c8d155e672f1b3b7ac8b3dc51f95ab4dfd->leave($__internal_ab9054df8dc94c5f7398efb58420c2c8d155e672f1b3b7ac8b3dc51f95ab4dfd_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c9d1b76be160fc035fb1ca31986c2cb6c9c775a87fcaeccbef34fdaca7ef6bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d1b76be160fc035fb1ca31986c2cb6c9c775a87fcaeccbef34fdaca7ef6bd1->enter($__internal_c9d1b76be160fc035fb1ca31986c2cb6c9c775a87fcaeccbef34fdaca7ef6bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_3908abc6491167ed41dfdc7b94ba9650c21e2ccb2a152e9292093dca1f18bd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3908abc6491167ed41dfdc7b94ba9650c21e2ccb2a152e9292093dca1f18bd6a->enter($__internal_3908abc6491167ed41dfdc7b94ba9650c21e2ccb2a152e9292093dca1f18bd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_3908abc6491167ed41dfdc7b94ba9650c21e2ccb2a152e9292093dca1f18bd6a->leave($__internal_3908abc6491167ed41dfdc7b94ba9650c21e2ccb2a152e9292093dca1f18bd6a_prof);

        
        $__internal_c9d1b76be160fc035fb1ca31986c2cb6c9c775a87fcaeccbef34fdaca7ef6bd1->leave($__internal_c9d1b76be160fc035fb1ca31986c2cb6c9c775a87fcaeccbef34fdaca7ef6bd1_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_104eab69e1bd0953324c5a65d96a86e52a8e04b32421db530f1669794ffc026b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104eab69e1bd0953324c5a65d96a86e52a8e04b32421db530f1669794ffc026b->enter($__internal_104eab69e1bd0953324c5a65d96a86e52a8e04b32421db530f1669794ffc026b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_713c1d24fae3f992f495cd0d468a1582ac71fcc5647fe6141c254393c02cc4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713c1d24fae3f992f495cd0d468a1582ac71fcc5647fe6141c254393c02cc4b7->enter($__internal_713c1d24fae3f992f495cd0d468a1582ac71fcc5647fe6141c254393c02cc4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_713c1d24fae3f992f495cd0d468a1582ac71fcc5647fe6141c254393c02cc4b7->leave($__internal_713c1d24fae3f992f495cd0d468a1582ac71fcc5647fe6141c254393c02cc4b7_prof);

        
        $__internal_104eab69e1bd0953324c5a65d96a86e52a8e04b32421db530f1669794ffc026b->leave($__internal_104eab69e1bd0953324c5a65d96a86e52a8e04b32421db530f1669794ffc026b_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_763606dfd3a9a4ead85def6cb3d63528192f2cf41da6e60a1b4ea1dc979f1de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763606dfd3a9a4ead85def6cb3d63528192f2cf41da6e60a1b4ea1dc979f1de1->enter($__internal_763606dfd3a9a4ead85def6cb3d63528192f2cf41da6e60a1b4ea1dc979f1de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2277ef1ed306b3019586eed27bdc0209cc3f0cf97aa321a0ec22e1b976b2a682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2277ef1ed306b3019586eed27bdc0209cc3f0cf97aa321a0ec22e1b976b2a682->enter($__internal_2277ef1ed306b3019586eed27bdc0209cc3f0cf97aa321a0ec22e1b976b2a682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_2277ef1ed306b3019586eed27bdc0209cc3f0cf97aa321a0ec22e1b976b2a682->leave($__internal_2277ef1ed306b3019586eed27bdc0209cc3f0cf97aa321a0ec22e1b976b2a682_prof);

        
        $__internal_763606dfd3a9a4ead85def6cb3d63528192f2cf41da6e60a1b4ea1dc979f1de1->leave($__internal_763606dfd3a9a4ead85def6cb3d63528192f2cf41da6e60a1b4ea1dc979f1de1_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a2390aea04c018167158ceac04d3377a6e2eefba469b2c52aa2ae4b3a4781101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2390aea04c018167158ceac04d3377a6e2eefba469b2c52aa2ae4b3a4781101->enter($__internal_a2390aea04c018167158ceac04d3377a6e2eefba469b2c52aa2ae4b3a4781101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a4d67dccdaf18b0a15f56f0a70ad445b1fc8b269a62e00ceba9796047d83764a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d67dccdaf18b0a15f56f0a70ad445b1fc8b269a62e00ceba9796047d83764a->enter($__internal_a4d67dccdaf18b0a15f56f0a70ad445b1fc8b269a62e00ceba9796047d83764a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_a4d67dccdaf18b0a15f56f0a70ad445b1fc8b269a62e00ceba9796047d83764a->leave($__internal_a4d67dccdaf18b0a15f56f0a70ad445b1fc8b269a62e00ceba9796047d83764a_prof);

        
        $__internal_a2390aea04c018167158ceac04d3377a6e2eefba469b2c52aa2ae4b3a4781101->leave($__internal_a2390aea04c018167158ceac04d3377a6e2eefba469b2c52aa2ae4b3a4781101_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c2c7fb05496088178aa64e29716116b40130f0cf0c99ca685176eb6bd843c2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c7fb05496088178aa64e29716116b40130f0cf0c99ca685176eb6bd843c2b0->enter($__internal_c2c7fb05496088178aa64e29716116b40130f0cf0c99ca685176eb6bd843c2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1f2c3a438b049918b22e5f4dc8825a58d2474f369fe8028942db899e0eb52a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2c3a438b049918b22e5f4dc8825a58d2474f369fe8028942db899e0eb52a91->enter($__internal_1f2c3a438b049918b22e5f4dc8825a58d2474f369fe8028942db899e0eb52a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1f2c3a438b049918b22e5f4dc8825a58d2474f369fe8028942db899e0eb52a91->leave($__internal_1f2c3a438b049918b22e5f4dc8825a58d2474f369fe8028942db899e0eb52a91_prof);

        
        $__internal_c2c7fb05496088178aa64e29716116b40130f0cf0c99ca685176eb6bd843c2b0->leave($__internal_c2c7fb05496088178aa64e29716116b40130f0cf0c99ca685176eb6bd843c2b0_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b364c76f2cd1053ddd54f46e4fb1b1c1f4b626e103b4268d98d2c9afaf4c2a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b364c76f2cd1053ddd54f46e4fb1b1c1f4b626e103b4268d98d2c9afaf4c2a9f->enter($__internal_b364c76f2cd1053ddd54f46e4fb1b1c1f4b626e103b4268d98d2c9afaf4c2a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_284caae41a7409816a5f51768d552a83abd03879f390dfa4a0c301dbff585478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284caae41a7409816a5f51768d552a83abd03879f390dfa4a0c301dbff585478->enter($__internal_284caae41a7409816a5f51768d552a83abd03879f390dfa4a0c301dbff585478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_284caae41a7409816a5f51768d552a83abd03879f390dfa4a0c301dbff585478->leave($__internal_284caae41a7409816a5f51768d552a83abd03879f390dfa4a0c301dbff585478_prof);

        
        $__internal_b364c76f2cd1053ddd54f46e4fb1b1c1f4b626e103b4268d98d2c9afaf4c2a9f->leave($__internal_b364c76f2cd1053ddd54f46e4fb1b1c1f4b626e103b4268d98d2c9afaf4c2a9f_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7f2ad2626acd34287b5e8ffba8689ab464512ea74c057d1673ffafe4bbbbd301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2ad2626acd34287b5e8ffba8689ab464512ea74c057d1673ffafe4bbbbd301->enter($__internal_7f2ad2626acd34287b5e8ffba8689ab464512ea74c057d1673ffafe4bbbbd301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_38c2645f02fabf177cd094ddd6b4e3e67faecefd752c09bd6a4d4cf4d4ade55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c2645f02fabf177cd094ddd6b4e3e67faecefd752c09bd6a4d4cf4d4ade55d->enter($__internal_38c2645f02fabf177cd094ddd6b4e3e67faecefd752c09bd6a4d4cf4d4ade55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_38c2645f02fabf177cd094ddd6b4e3e67faecefd752c09bd6a4d4cf4d4ade55d->leave($__internal_38c2645f02fabf177cd094ddd6b4e3e67faecefd752c09bd6a4d4cf4d4ade55d_prof);

        
        $__internal_7f2ad2626acd34287b5e8ffba8689ab464512ea74c057d1673ffafe4bbbbd301->leave($__internal_7f2ad2626acd34287b5e8ffba8689ab464512ea74c057d1673ffafe4bbbbd301_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_ef222dfccca608d27cc356892e84e3493d199c06db9acb3f6c3e4dce45ba1fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef222dfccca608d27cc356892e84e3493d199c06db9acb3f6c3e4dce45ba1fc3->enter($__internal_ef222dfccca608d27cc356892e84e3493d199c06db9acb3f6c3e4dce45ba1fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c0208794f93976f181f860223273b1148dfb492e2ed7a7cb33231a8df1a92602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0208794f93976f181f860223273b1148dfb492e2ed7a7cb33231a8df1a92602->enter($__internal_c0208794f93976f181f860223273b1148dfb492e2ed7a7cb33231a8df1a92602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c0208794f93976f181f860223273b1148dfb492e2ed7a7cb33231a8df1a92602->leave($__internal_c0208794f93976f181f860223273b1148dfb492e2ed7a7cb33231a8df1a92602_prof);

        
        $__internal_ef222dfccca608d27cc356892e84e3493d199c06db9acb3f6c3e4dce45ba1fc3->leave($__internal_ef222dfccca608d27cc356892e84e3493d199c06db9acb3f6c3e4dce45ba1fc3_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6fd2c682a3ae865cd02609424acdef40f53c5f01936f7c59e59ccf2a8e0fb72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd2c682a3ae865cd02609424acdef40f53c5f01936f7c59e59ccf2a8e0fb72b->enter($__internal_6fd2c682a3ae865cd02609424acdef40f53c5f01936f7c59e59ccf2a8e0fb72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6d9a429ec060d98cff8ea44273e431959540bf2b4128a774ce47f0f79fc7f549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9a429ec060d98cff8ea44273e431959540bf2b4128a774ce47f0f79fc7f549->enter($__internal_6d9a429ec060d98cff8ea44273e431959540bf2b4128a774ce47f0f79fc7f549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_6d9a429ec060d98cff8ea44273e431959540bf2b4128a774ce47f0f79fc7f549->leave($__internal_6d9a429ec060d98cff8ea44273e431959540bf2b4128a774ce47f0f79fc7f549_prof);

        
        $__internal_6fd2c682a3ae865cd02609424acdef40f53c5f01936f7c59e59ccf2a8e0fb72b->leave($__internal_6fd2c682a3ae865cd02609424acdef40f53c5f01936f7c59e59ccf2a8e0fb72b_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2ccc36a25457049c6d4ce65266f97cbd3b1b25988d4e4658aa592ae8527df953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ccc36a25457049c6d4ce65266f97cbd3b1b25988d4e4658aa592ae8527df953->enter($__internal_2ccc36a25457049c6d4ce65266f97cbd3b1b25988d4e4658aa592ae8527df953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c663e8466a87e9c2000e7da30e49283c132da6f0805d48e5b958323d19389c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c663e8466a87e9c2000e7da30e49283c132da6f0805d48e5b958323d19389c86->enter($__internal_c663e8466a87e9c2000e7da30e49283c132da6f0805d48e5b958323d19389c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_c663e8466a87e9c2000e7da30e49283c132da6f0805d48e5b958323d19389c86->leave($__internal_c663e8466a87e9c2000e7da30e49283c132da6f0805d48e5b958323d19389c86_prof);

        
        $__internal_2ccc36a25457049c6d4ce65266f97cbd3b1b25988d4e4658aa592ae8527df953->leave($__internal_2ccc36a25457049c6d4ce65266f97cbd3b1b25988d4e4658aa592ae8527df953_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a5b079985ad46e1c08f04804a49ffead0a0c1dba240bff7e486bb5ee5ee3d4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b079985ad46e1c08f04804a49ffead0a0c1dba240bff7e486bb5ee5ee3d4d1->enter($__internal_a5b079985ad46e1c08f04804a49ffead0a0c1dba240bff7e486bb5ee5ee3d4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7012527389869baa6ec500da22b08de93fb54e5f3672ad742cc5bbb356ee48a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7012527389869baa6ec500da22b08de93fb54e5f3672ad742cc5bbb356ee48a1->enter($__internal_7012527389869baa6ec500da22b08de93fb54e5f3672ad742cc5bbb356ee48a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7012527389869baa6ec500da22b08de93fb54e5f3672ad742cc5bbb356ee48a1->leave($__internal_7012527389869baa6ec500da22b08de93fb54e5f3672ad742cc5bbb356ee48a1_prof);

        
        $__internal_a5b079985ad46e1c08f04804a49ffead0a0c1dba240bff7e486bb5ee5ee3d4d1->leave($__internal_a5b079985ad46e1c08f04804a49ffead0a0c1dba240bff7e486bb5ee5ee3d4d1_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_4f8f5dcd738322359ee2dc118753ac38fb31d65913e3998f9e3a82a14bd8f4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8f5dcd738322359ee2dc118753ac38fb31d65913e3998f9e3a82a14bd8f4df->enter($__internal_4f8f5dcd738322359ee2dc118753ac38fb31d65913e3998f9e3a82a14bd8f4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9602eef38292866bd0e72618cbda9923146571053716ae2162fe21358519236b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9602eef38292866bd0e72618cbda9923146571053716ae2162fe21358519236b->enter($__internal_9602eef38292866bd0e72618cbda9923146571053716ae2162fe21358519236b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9602eef38292866bd0e72618cbda9923146571053716ae2162fe21358519236b->leave($__internal_9602eef38292866bd0e72618cbda9923146571053716ae2162fe21358519236b_prof);

        
        $__internal_4f8f5dcd738322359ee2dc118753ac38fb31d65913e3998f9e3a82a14bd8f4df->leave($__internal_4f8f5dcd738322359ee2dc118753ac38fb31d65913e3998f9e3a82a14bd8f4df_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_769b32f94e811d6dbe1e2b1a9bea60ebcc2150f1c26d12866d1ae56ccdfb171a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769b32f94e811d6dbe1e2b1a9bea60ebcc2150f1c26d12866d1ae56ccdfb171a->enter($__internal_769b32f94e811d6dbe1e2b1a9bea60ebcc2150f1c26d12866d1ae56ccdfb171a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_acae07c6c46931a4cbdb8c3d434976e3d31957b243db12be4e70e02173a69a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acae07c6c46931a4cbdb8c3d434976e3d31957b243db12be4e70e02173a69a62->enter($__internal_acae07c6c46931a4cbdb8c3d434976e3d31957b243db12be4e70e02173a69a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_acae07c6c46931a4cbdb8c3d434976e3d31957b243db12be4e70e02173a69a62->leave($__internal_acae07c6c46931a4cbdb8c3d434976e3d31957b243db12be4e70e02173a69a62_prof);

        
        $__internal_769b32f94e811d6dbe1e2b1a9bea60ebcc2150f1c26d12866d1ae56ccdfb171a->leave($__internal_769b32f94e811d6dbe1e2b1a9bea60ebcc2150f1c26d12866d1ae56ccdfb171a_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_84ea27cbcee935ab4bf8de25c41b3c96b8bb36913331666798d9897fa2c35e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ea27cbcee935ab4bf8de25c41b3c96b8bb36913331666798d9897fa2c35e65->enter($__internal_84ea27cbcee935ab4bf8de25c41b3c96b8bb36913331666798d9897fa2c35e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_f7b21fb8a4231d48160399880e1dd2a4c04e60d70b375f7c73d54e53a592a142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b21fb8a4231d48160399880e1dd2a4c04e60d70b375f7c73d54e53a592a142->enter($__internal_f7b21fb8a4231d48160399880e1dd2a4c04e60d70b375f7c73d54e53a592a142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f7b21fb8a4231d48160399880e1dd2a4c04e60d70b375f7c73d54e53a592a142->leave($__internal_f7b21fb8a4231d48160399880e1dd2a4c04e60d70b375f7c73d54e53a592a142_prof);

        
        $__internal_84ea27cbcee935ab4bf8de25c41b3c96b8bb36913331666798d9897fa2c35e65->leave($__internal_84ea27cbcee935ab4bf8de25c41b3c96b8bb36913331666798d9897fa2c35e65_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a79c35cab32ed5c90a659005dd6436e8abee204d2b179d307cedffb0453359fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79c35cab32ed5c90a659005dd6436e8abee204d2b179d307cedffb0453359fd->enter($__internal_a79c35cab32ed5c90a659005dd6436e8abee204d2b179d307cedffb0453359fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ed51fc47e0d026c6b6212076ba33dded6e36d9c15fd176dd378c0d02da0fd70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed51fc47e0d026c6b6212076ba33dded6e36d9c15fd176dd378c0d02da0fd70e->enter($__internal_ed51fc47e0d026c6b6212076ba33dded6e36d9c15fd176dd378c0d02da0fd70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_ed51fc47e0d026c6b6212076ba33dded6e36d9c15fd176dd378c0d02da0fd70e->leave($__internal_ed51fc47e0d026c6b6212076ba33dded6e36d9c15fd176dd378c0d02da0fd70e_prof);

        
        $__internal_a79c35cab32ed5c90a659005dd6436e8abee204d2b179d307cedffb0453359fd->leave($__internal_a79c35cab32ed5c90a659005dd6436e8abee204d2b179d307cedffb0453359fd_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_80f3c9b78659b2888543c4feaf118a053a7ddc0b3af17855b6d478e4ed4c5ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f3c9b78659b2888543c4feaf118a053a7ddc0b3af17855b6d478e4ed4c5ae1->enter($__internal_80f3c9b78659b2888543c4feaf118a053a7ddc0b3af17855b6d478e4ed4c5ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c29c1f08fc57f2fa88a6830fb15538a85823bedeaf52c648c5dc5354d5645197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29c1f08fc57f2fa88a6830fb15538a85823bedeaf52c648c5dc5354d5645197->enter($__internal_c29c1f08fc57f2fa88a6830fb15538a85823bedeaf52c648c5dc5354d5645197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_c29c1f08fc57f2fa88a6830fb15538a85823bedeaf52c648c5dc5354d5645197->leave($__internal_c29c1f08fc57f2fa88a6830fb15538a85823bedeaf52c648c5dc5354d5645197_prof);

        
        $__internal_80f3c9b78659b2888543c4feaf118a053a7ddc0b3af17855b6d478e4ed4c5ae1->leave($__internal_80f3c9b78659b2888543c4feaf118a053a7ddc0b3af17855b6d478e4ed4c5ae1_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f026458d28fae48d45f684a1b33ab4618016a03bbf4f2b035deaa2cfd62e0b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f026458d28fae48d45f684a1b33ab4618016a03bbf4f2b035deaa2cfd62e0b6e->enter($__internal_f026458d28fae48d45f684a1b33ab4618016a03bbf4f2b035deaa2cfd62e0b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9f49b0ae62e24f9b0cc78a1573a7c758210d4f2ae216e27e79f1ecdaebf39d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f49b0ae62e24f9b0cc78a1573a7c758210d4f2ae216e27e79f1ecdaebf39d81->enter($__internal_9f49b0ae62e24f9b0cc78a1573a7c758210d4f2ae216e27e79f1ecdaebf39d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_9f49b0ae62e24f9b0cc78a1573a7c758210d4f2ae216e27e79f1ecdaebf39d81->leave($__internal_9f49b0ae62e24f9b0cc78a1573a7c758210d4f2ae216e27e79f1ecdaebf39d81_prof);

        
        $__internal_f026458d28fae48d45f684a1b33ab4618016a03bbf4f2b035deaa2cfd62e0b6e->leave($__internal_f026458d28fae48d45f684a1b33ab4618016a03bbf4f2b035deaa2cfd62e0b6e_prof);

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
