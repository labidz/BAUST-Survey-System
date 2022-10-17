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

/* ./subviews/survey/question_subviews/valid_message_and_help.twig */
class __TwigTemplate_5d09ee5b8cc0ec40644a2c36c55dab1a24d7c82a22592720c2398aea55175e5d extends \Twig\Template
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
        // line 21
        echo "
<!-- LimeSurvey valid message and help -->
<div class=\"";
        // line 23
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "questionvalidcontainer", []));
        echo " text-info col-xs-12\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "questionvalidcontainer", []));
        echo ">
    ";
        // line 24
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "valid_message", []));
        echo " ";
        // line 25
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "man_message", []));
        echo " ";
        // line 26
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aQuestion"] ?? null), "file_valid_message", []));
        echo " ";
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/survey/question_subviews/valid_message_and_help.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 27,  49 => 26,  45 => 25,  42 => 24,  36 => 23,  32 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/question_subviews/valid_message_and_help.twig", "/home/techinformation/public_html/themes/survey/fruity/views/subviews/survey/question_subviews/valid_message_and_help.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["raw" => 24];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw'],
                []
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
