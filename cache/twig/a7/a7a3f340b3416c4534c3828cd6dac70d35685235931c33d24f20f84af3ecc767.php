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

/* modular/footer.html.twig */
class __TwigTemplate_8338f474d261114c7c9e9269bd7e94473458c7c9dc9080fc120062cba3199a48 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'social' => [$this, 'block_social'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"modular-row footer ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo "\">
    <div class=\"footer-items\">
        <div class=\"footer-module large\">
            <div class=\"logo\">
                <h3><a href=\"";
        // line 5
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "</a></h3>
            </div>
            ";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "en", []), "description", [])) {
            // line 8
            echo "                <p>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "en", []), "description", []);
            echo "</p>
            ";
        }
        // line 10
        echo "        </div>
        <div class=\"footer-module\"><h4>";
        // line 11
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "en", []), "contact_title", []);
        echo "</h4>
            <p>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "contact", []), "address", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "                    <span>";
            echo $this->getAttribute($context["item"], "line", []);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </p>
            <p>";
        // line 17
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "email", []);
        echo "</p>
            <p><strong>";
        // line 18
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "contact", []), "gps", []);
        echo "</strong></p>
        </div>
        <div class=\"footer-module\"><h4>";
        // line 20
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "en", []), "social_title", []);
        echo "</h4>
            <div class=\"logo\">
                ";
        // line 22
        $this->displayBlock('social', $context, $blocks);
        // line 25
        echo "            </div>
        </div>
        <div class=\"footer-module\"><h4>";
        // line 27
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "en", []), "language_title", []);
        echo "</h4>
            <ul style=\"list-style-type: none; list-style-position: inside; margin: 0;\">
                <li><a href=\"/en\">English</a></li>
                <li><a href=\"/fr\">Français</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <div class=\"footer-modules\">
        <div class=\"footer-copyright\">
            ";
        // line 37
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "copyright", []);
        echo "
        </div>
        <div class=\"footer-menu\">
            <ul class=\"othermenu\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "othermenu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 42
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["module"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["module"], "text", []);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </ul>
        </div>
    </div>
</div>";
    }

    // line 22
    public function block_social($context, array $blocks = [])
    {
        // line 23
        echo "                    ";
        $this->loadTemplate("partials/social.html.twig", "modular/footer.html.twig", 23)->display($context);
        // line 24
        echo "                ";
    }

    public function getTemplateName()
    {
        return "modular/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 24,  143 => 23,  140 => 22,  133 => 44,  122 => 42,  118 => 41,  111 => 37,  98 => 27,  94 => 25,  92 => 22,  87 => 20,  82 => 18,  78 => 17,  75 => 16,  66 => 14,  62 => 13,  57 => 11,  54 => 10,  48 => 8,  46 => 7,  39 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row footer {{ page.header.class }}\">
    <div class=\"footer-items\">
        <div class=\"footer-module large\">
            <div class=\"logo\">
                <h3><a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ config.site.title }}</a></h3>
            </div>
            {% if site.footer.en.description %}
                <p>{{ site.footer.en.description }}</p>
            {% endif %}
        </div>
        <div class=\"footer-module\"><h4>{{ site.footer.en.contact_title }}</h4>
            <p>
                {% for item in site.contact.address %}
                    <span>{{ item.line }}</span>
                {% endfor %}
            </p>
            <p>{{ site.author.email }}</p>
            <p><strong>{{ site.contact.gps }}</strong></p>
        </div>
        <div class=\"footer-module\"><h4>{{ site.footer.en.social_title }}</h4>
            <div class=\"logo\">
                {% block social %}
                    {% include 'partials/social.html.twig' %}
                {% endblock %}
            </div>
        </div>
        <div class=\"footer-module\"><h4>{{ site.footer.en.language_title }}</h4>
            <ul style=\"list-style-type: none; list-style-position: inside; margin: 0;\">
                <li><a href=\"/en\">English</a></li>
                <li><a href=\"/fr\">Français</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <div class=\"footer-modules\">
        <div class=\"footer-copyright\">
            {{ site.author.copyright }}
        </div>
        <div class=\"footer-menu\">
            <ul class=\"othermenu\">
                {% for module in site.othermenu %}
                    <li><a href=\"{{ module.url }}\">{{ module.text }}</a></li>
                {% endfor %}
            </ul>
        </div>
    </div>
</div>", "modular/footer.html.twig", "C:\\xampp\\htdocs\\oakandaspen-grav-v1\\user\\themes\\deliver\\templates\\modular\\footer.html.twig");
    }
}
