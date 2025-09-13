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

/* @PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig */
class __TwigTemplate_388746151a93a89e412ef78777e3aa7b extends Template
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
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "counter", [], "any", true, true, false, 25)) {
            // line 26
            yield "  ";
            $context["isRecommandedType"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "counter_type", [], "any", true, true, false, 26) && (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "counter_type", [], "any", false, false, false, 26) == "recommended"));
            // line 27
            yield "  <small class=\"form-text text-muted text-right maxLength ";
            yield (( !($context["isRecommandedType"] ?? null)) ? ("maxType") : (""));
            yield "\">
      <em>
        ";
            // line 29
            if (($context["isRecommandedType"] ?? null)) {
                // line 30
                yield "          ";
                yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . CoreExtension::getAttribute($this->env, $this->source,                 // line 33
($context["attr"] ?? null), "counter", [], "any", false, false, false, 33)), "[/2]" => "</span>"]);
                // line 35
                yield "
        ";
            } else {
                // line 37
                yield "          ";
                yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters allowed", [], "Admin.Catalog.Feature"), ["[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . CoreExtension::getAttribute($this->env, $this->source,                 // line 40
($context["attr"] ?? null), "counter", [], "any", false, false, false, 40)), "[/2]" => "</span>"]);
                // line 42
                yield "
        ";
            }
            // line 44
            yield "      </em>
  </small>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig";
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
        return array (  71 => 44,  67 => 42,  65 => 40,  63 => 37,  59 => 35,  57 => 33,  55 => 30,  53 => 29,  47 => 27,  44 => 26,  42 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/form_max_length.html.twig");
    }
}
