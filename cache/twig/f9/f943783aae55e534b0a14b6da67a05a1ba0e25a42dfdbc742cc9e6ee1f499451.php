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

/* partials/search.html.twig */
class __TwigTemplate_c5fa81bf2e138f0b04dce0526eb4b8f46c81b5274a1095b8178973a334acf040 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<form class=\"search-box\">
    <input type=\"search\" placeholder=\"Search...\" value=\"";
        // line 2
        echo ($context["query"] ?? null);
        echo "\" data-search-input=\"";
        echo ($context["base_url_relative"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []);
        echo "/query\" />
    <script>
    jQuery(document).ready(function(\$){
        var input = \$('[data-search-input]');

        input.on('keypress', function(event) {
            if (event.which == 13 && input.val().length > 3) {
                event.preventDefault();
                window.location.href = input.data('search-input') + '";
        // line 10
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        echo "' + input.val();
            }
        });
    });
    </script>
    <i class=\"fa fa-search\"></i>
</form>";
    }

    public function getTemplateName()
    {
        return "partials/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"search-box\">
    <input type=\"search\" placeholder=\"Search...\" value=\"{{ query }}\" data-search-input=\"{{ base_url_relative }}{{ config.plugins.simplesearch.route}}/query\" />
    <script>
    jQuery(document).ready(function(\$){
        var input = \$('[data-search-input]');

        input.on('keypress', function(event) {
            if (event.which == 13 && input.val().length > 3) {
                event.preventDefault();
                window.location.href = input.data('search-input') + '{{ config.system.param_sep }}' + input.val();
            }
        });
    });
    </script>
    <i class=\"fa fa-search\"></i>
</form>", "partials/search.html.twig", "C:\\localhost\\oakandaspen-grav-v1\\user\\themes\\deliver\\templates\\partials\\search.html.twig");
    }
}
