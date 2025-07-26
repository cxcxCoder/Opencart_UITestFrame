<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* extension/opencart/catalog/view/template/module/category.twig */
class __TwigTemplate_c50558eae1fc55b020d58a8e8b97ca56 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"list-group mb-3\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 3) == ($context["category_id"] ?? null))) {
                // line 4
                yield "      <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 4);
                yield "\" class=\"list-group-item active\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 4);
                yield "</a>
      ";
                // line 5
                if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5)) {
                    // line 6
                    yield "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 7
                        yield "          ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 7) == ($context["child_id"] ?? null))) {
                            // line 8
                            yield "            <a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 8);
                            yield "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 8);
                            yield "</a>
          ";
                        } else {
                            // line 10
                            yield "            <a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 10);
                            yield "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 10);
                            yield "</a>
          ";
                        }
                        // line 12
                        yield "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    yield "      ";
                }
                // line 14
                yield "    ";
            } else {
                yield " <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 14);
                yield "\" class=\"list-group-item\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                yield "</a>
    ";
            }
            // line 16
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/category.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  110 => 17,  104 => 16,  94 => 14,  91 => 13,  85 => 12,  77 => 10,  69 => 8,  66 => 7,  61 => 6,  59 => 5,  52 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"list-group mb-3\">
  {% for category in categories %}
    {% if category.category_id == category_id %}
      <a href=\"{{ category.href }}\" class=\"list-group-item active\">{{ category.name }}</a>
      {% if category.children %}
        {% for child in category.children %}
          {% if child.category_id == child_id %}
            <a href=\"{{ child.href }}\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>
          {% else %}
            <a href=\"{{ child.href }}\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>
          {% endif %}
        {% endfor %}
      {% endif %}
    {% else %} <a href=\"{{ category.href }}\" class=\"list-group-item\">{{ category.name }}</a>
    {% endif %}
  {% endfor %}
</div>
", "extension/opencart/catalog/view/template/module/category.twig", "/var/www/html/extension/opencart/catalog/view/template/module/category.twig");
    }
}
