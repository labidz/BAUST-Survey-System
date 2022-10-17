<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ./subviews/navigation/language_changer_first_page.twig */
class __TwigTemplate_911e31383c13562a106b1e174a17e21bc2e178833cb921eb3a1dd0cdcfa26c8f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 20
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "alanguageChanger", []), "show", []) == true)) {
            // line 21
            echo "    ";
            $context["htmlOptions"] = ["id" => "firstpage-changelang", "autocomplete" => "off", "class" => "form"];
            // line 26
            echo "
    <!-- Start of language change Form-->
    ";
            // line 28
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", []), "form", [0 => $this->getAttribute(            // line 29
($context["aSurveyInfo"] ?? null), "surveyUrl", []), 1 => "post", 2 =>             // line 31
($context["htmlOptions"] ?? null)], "method"));
            // line 32
            echo "


    ";
            // line 35
            echo twig_include($this->env, $context, "./subviews/navigation/language_changer.twig");
            echo "

    </form>
";
        }
        // line 39
        echo "

";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer_first_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 39,  50 => 35,  45 => 32,  43 => 31,  42 => 29,  41 => 28,  37 => 26,  34 => 21,  32 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/language_changer_first_page.twig", "/home/techinformation/public_html/themes/survey/fruity/views/subviews/navigation/language_changer_first_page.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 20, "set" => 21];
        static $filters = [];
        static $functions = ["include" => 35];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['include']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
