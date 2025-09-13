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

/* @PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig */
class __TwigTemplate_825af9728308155cdc7a09293f53f39b extends Template
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
            'translatable_choice_widget' => [$this, 'block_translatable_choice_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield from $this->unwrap()->yieldBlock('translatable_choice_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "  ";
        $macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", 26)->unwrap();
        // line 27
        yield "
  ";
        // line 28
        $context["class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", false, false, false, 28), "")) : (""));
        // line 29
        yield "  ";
        $context["rowAttributes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", false, false, false, 29), [])) : ([]));
        // line 30
        yield "  ";
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 30), "attr", [], "any", false, false, false, 30);
        // line 31
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 31), "")) : ("")) . " custom-select translatable_choice"))]);
        // line 32
        yield "  <div class=\"form-group row type-choice ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
        yield "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rowAttributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rowAttr"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['rowAttr'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
  ";
        // line 33
        $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default(($context["extraVars"] ?? null), [])) : ([]));
        // line 34
        yield "
  ";
        // line 36
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 36), "choices", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["language"] => $context["choices"]) {
            // line 37
            yield "    <div class=\"col-sm-6\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 37), "default_locale", [], "any", true, true, false, 37) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 37), "default_locale", [], "any", false, false, false, 37) === $context["language"]))) {
                yield "style=\"display: none\"";
            }
            yield ">
      <select class=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 38), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38) . "_") . $context["language"]), "html", null, true);
            yield "\" data-language=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["language"], "html", null, true);
            yield "\">
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["choices"]);
            foreach ($context['_seq'] as $context["choiceValue"] => $context["choiceLabel"]) {
                // line 40
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choiceValue"], "html", null, true);
                yield "\"
            ";
                // line 41
                if (((array_key_exists("value", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), $context["language"], [], "array", true, true, false, 41)) && ($context["choiceValue"] === (($_v0 = ($context["value"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["language"]] ?? null) : null)))) {
                    yield " selected=\"selected\"";
                }
                // line 42
                yield "             ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 42), "row_attr", [], "any", false, true, false, 42), $context["language"], [], "array", false, true, false, 42), $context["choiceValue"], [], "array", true, true, false, 42) && is_iterable((($_v1 = (($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 42), "row_attr", [], "any", false, false, false, 42)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[$context["language"]] ?? null) : null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["choiceValue"]] ?? null) : null)))) {
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v3 = (($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 42), "row_attr", [], "any", false, false, false, 42)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[$context["language"]] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[$context["choiceValue"]] ?? null) : null));
                    foreach ($context['_seq'] as $context["optionKey"] => $context["optionAttr"]) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionKey"], "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionAttr"], "html", null, true);
                        yield "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['optionKey'], $context['optionAttr'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                yield ">";
                yield ((( !array_key_exists("choice_translation_domain", $context) || (($context["choice_translation_domain"] ?? null) === false))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choiceLabel"], "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["choiceLabel"], [], ($context["choice_translation_domain"] ?? null)), "html", null, true)));
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['choiceValue'], $context['choiceLabel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "      </select>
      <input type=\"hidden\" id=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45) . "_") . $context["language"]) . "_value"), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 45), "full_name", [], "any", false, false, false, 45) . "[") . $context["language"]) . "]"), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["choices"]), "html", null, true);
            yield "\" />
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['language'], $context['choices'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "
  ";
        // line 50
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 50), "locales", [], "any", true, true, false, 50) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 50), "locales", [], "any", false, false, false, 50)))) {
            // line 51
            yield "    <div class=\"col-sm-3\">
      <select name=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52) . "_language"), "html", null, true);
            yield "\" class=\"custom-select translatable_choice_language\">
        ";
            // line 53
            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 53), "locales", [], "any", false, false, false, 53))) {
                // line 54
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 54), "locales", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 55
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "id_lang", [], "any", false, false, false, 55), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "iso_code", [], "any", false, false, false, 55) . " - ") . CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 55)), "html", null, true);
                    yield "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "        ";
            }
            // line 58
            yield "      </select>
    </div>
  ";
        }
        // line 61
        yield "
  ";
        // line 63
        yield "  ";
        if (array_key_exists("button", $context)) {
            // line 64
            yield "    <div class=\"col-sm-3\">
      <button type=\"button\" ";
            // line 65
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", true, true, false, 65)) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", false, false, false, 65), "html", null, true);
                yield "\"";
            }
            yield " class=\"btn ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "class", [], "any", true, true, false, 65)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "class", [], "any", false, false, false, 65), "html", null, true);
            } else {
                yield "btn-default";
            }
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "action", [], "any", true, true, false, 65)) {
                yield " onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "action", [], "any", false, false, false, 65), "html", null, true);
                yield "\"";
            }
            yield ">
        ";
            // line 66
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "icon", [], "any", true, true, false, 66)) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "icon", [], "any", false, false, false, 66), "html", null, true);
                yield "</i>";
            }
            // line 67
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "label", [], "any", false, false, false, 67), "html", null, true);
            yield "
      </button>
    </div>
  ";
        }
        // line 71
        yield "  </div>";
        // line 73
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 74
        yield from         $this->unwrap()->yieldBlock("form_hint", $context, $blocks);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  253 => 74,  251 => 73,  249 => 71,  241 => 67,  235 => 66,  215 => 65,  212 => 64,  209 => 63,  206 => 61,  201 => 58,  198 => 57,  187 => 55,  182 => 54,  180 => 53,  176 => 52,  173 => 51,  170 => 50,  167 => 48,  154 => 45,  151 => 44,  127 => 42,  123 => 41,  118 => 40,  114 => 39,  106 => 38,  99 => 37,  94 => 36,  91 => 34,  89 => 33,  71 => 32,  68 => 31,  65 => 30,  62 => 29,  60 => 28,  57 => 27,  54 => 26,  43 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/translatable_choice.html.twig");
    }
}
