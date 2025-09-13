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

/* @PrestaShop/Admin/macros.html.twig */
class __TwigTemplate_99bf783a9c815c74e103bc2bee5b6339 extends Template
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
        // line 28
        yield "
";
        // line 32
        yield "
";
        // line 38
        yield "
";
        // line 50
        yield "
";
        // line 58
        yield "
";
        // line 71
        yield "
";
        // line 88
        yield "
";
        // line 96
        yield "
";
        // line 126
        yield "
";
        // line 240
        yield "
 ";
        // line 287
        yield "
";
        // line 306
        yield "
";
        yield from [];
    }

    // line 25
    public function macro_form_label_tooltip($name = null, $tooltip = null, $placement = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "tooltip" => $tooltip,
            "placement" => $placement,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 26
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["name"] ?? null), 'label', ["label_attr" => ["tooltip" => ($context["tooltip"] ?? null), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (Twig\Extension\CoreExtension::default(($context["placement"] ?? null), "top")) : ("top"))]]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function macro_check($variable = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "variable" => $variable,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 30
            yield "  ";
            yield (((array_key_exists("variable", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["variable"] ?? null)) > 0))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["variable"] ?? null), "html", null, true)) : (false));
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function macro_tooltip($text = null, $icon = null, $position = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "icon" => $icon,
            "position" => $position,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
            yield "\" data-html=\"true\" data-placement=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("position", $context)) ? (Twig\Extension\CoreExtension::default(($context["position"] ?? null), "top")) : ("top")), "html", null, true);
            yield "\">
    <i class=\"material-icons\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield "</i>
  </span>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function macro_infotip($text = null, $use_raw = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "use_raw" => $use_raw,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 40
            yield "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 42
            if (($context["use_raw"] ?? null)) {
                // line 43
                yield "      ";
                yield ($context["text"] ?? null);
                yield "
    ";
            } else {
                // line 45
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
                yield "
    ";
            }
            // line 47
            yield "  </p>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function macro_warningtip($text = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 52
            yield "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
            yield "
  </p>
</div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function macro_label_with_help($label = null, $help = null, $class = "", $for = "", $isRequired = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "help" => $help,
            "class" => $class,
            "for" => $for,
            "isRequired" => $isRequired,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 60
            yield "<label";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["for"] ?? null))) {
                yield " for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["for"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"form-control-label ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\">
  ";
            // line 61
            if (($context["isRequired"] ?? null)) {
                // line 62
                yield "    <span class=\"text-danger\">*</span>
  ";
            }
            // line 64
            yield "
  ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
  ";
            // line 66
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => ($context["help"] ?? null)]);
            yield "
</label>

<p class=\"sr-only\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["help"] ?? null), "html", null, true);
            yield "</p>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 73
    public function macro_sortable_column_header($title = null, $sortColumnName = null, $orderBy = null, $sortOrder = null, $prefix = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "sortColumnName" => $sortColumnName,
            "orderBy" => $orderBy,
            "sortOrder" => $sortOrder,
            "prefix" => $prefix,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 74
            yield "  ";
            [$context["sortOrder"], $context["orderBy"], $context["prefix"]] =             [((array_key_exists("sortOrder", $context)) ? (Twig\Extension\CoreExtension::default(($context["sortOrder"] ?? null), "")) : ("")), ((array_key_exists("orderBy", $context)) ? (Twig\Extension\CoreExtension::default(($context["orderBy"] ?? null))) : ("")), ((array_key_exists("prefix", $context)) ? (Twig\Extension\CoreExtension::default(($context["prefix"] ?? null), "")) : (""))];
            // line 75
            yield "  <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sortColumnName"] ?? null), "html", null, true);
            yield "\"
      data-sort-prefix=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prefix"] ?? null), "html", null, true);
            yield "\"
      ";
            // line 79
            if ((($context["orderBy"] ?? null) == ($context["sortColumnName"] ?? null))) {
                // line 80
                yield "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 81
                yield (((($context["sortOrder"] ?? null) == "desc")) ? ("desc") : ("asc"));
                yield "\"
      ";
            }
            // line 83
            yield "    >
      <span role=\"columnheader\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by", [], "Admin.Actions"), "html", null, true);
            yield "\"></span>
  </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 90
    public function macro_import_file_sample($label = null, $filename = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "filename" => $filename,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 91
            yield "    <a id=\"download-sample-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filename"] ?? null), "html", null, true);
            yield "-file-link\" class=\"list-group-item list-group-item-action\"
       href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_sample_download", ["sampleName" => ($context["filename"] ?? null)]), "html", null, true);
            yield "\">
        ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "
    </a>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 106
    public function macro_form_widget_with_error($form = null, $vars = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "vars" => $vars,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 107
            yield "  ";
            $macros["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 107)->unwrap();
            // line 108
            yield "
  ";
            // line 109
            $context["vars"] = ((array_key_exists("vars", $context)) ? (Twig\Extension\CoreExtension::default(($context["vars"] ?? null), [])) : ([]));
            // line 110
            yield "  ";
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default(($context["extraVars"] ?? null), [])) : ([]));
            // line 111
            yield "  ";
            $context["attr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["vars"] ?? null), "attr", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["vars"] ?? null), "attr", [], "any", false, false, false, 111), [])) : ([]));
            // line 112
            yield "  ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 112)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 112)) : (""))]);
            // line 113
            yield "  ";
            $context["vars"] = Twig\Extension\CoreExtension::merge(($context["vars"] ?? null), ["attr" => ($context["attr"] ?? null)]);
            // line 114
            yield "
  ";
            // line 115
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["vars"] ?? null));
            yield "

  ";
            // line 117
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", true, true, false, 117) && CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", false, false, false, 117))) {
                // line 118
                yield "      <small class=\"form-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", false, false, false, 118), "html", null, true);
                yield "</small>
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 119
($context["form"] ?? null), "vars", [], "any", false, true, false, 119), "help", [], "any", true, true, false, 119) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 119), "help", [], "any", false, false, false, 119))) {
                // line 120
                yield "      <small class=\"form-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 120), "help", [], "any", false, false, false, 120), "html", null, true);
                yield "</small>
  ";
            }
            // line 122
            yield "
  ";
            // line 123
            yield $macros["self"]->getTemplateForMacro("macro_form_error_with_popover", $context, 123, $this->getSourceContext())->macro_form_error_with_popover(...[($context["form"] ?? null)]);
            yield "

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 136
    public function macro_form_error_with_popover($form = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 137
            yield "  ";
            $context["errors"] = [];
            // line 138
            yield "
  ";
            // line 139
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 139), "valid", [], "any", true, true, false, 139) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 139), "valid", [], "any", false, false, false, 139))) {
                // line 140
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 140), "errors", [], "any", false, false, false, 140));
                foreach ($context['_seq'] as $context["_key"] => $context["parentError"]) {
                    // line 141
                    yield "      ";
                    $context["errors"] = Twig\Extension\CoreExtension::merge(($context["errors"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["parentError"], "message", [], "any", false, false, false, 141)]);
                    // line 142
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['parentError'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                yield "
    ";
                // line 145
                yield "  ";
            }
            // line 146
            yield "
  ";
            // line 147
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
                // line 148
                yield "    ";
                // line 149
                yield "    ";
                $context["errorPopover"] = null;
                // line 150
                yield "
    ";
                // line 151
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 1)) {
                    // line 152
                    yield "      ";
                    $context["popoverContainer"] = ("popover-error-container-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152));
                    // line 153
                    yield "      <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverContainer"] ?? null), "html", null, true);
                    yield "\"></div>

      ";
                    // line 155
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 155), "errors_by_locale", [], "any", true, true, false, 155)) {
                        // line 156
                        yield "          ";
                        $context["popoverErrors"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 156), "errors_by_locale", [], "any", false, false, false, 156);
                        // line 157
                        yield "
          ";
                        // line 159
                        yield "          ";
                        $context["translatableErrors"] = [];
                        // line 160
                        yield "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["popoverErrors"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["translatableError"]) {
                            // line 161
                            yield "            ";
                            $context["translatableErrors"] = Twig\Extension\CoreExtension::merge(($context["translatableErrors"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["translatableError"], "error_message", [], "any", false, false, false, 161)]);
                            // line 162
                            yield "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['translatableError'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 163
                        yield "
          ";
                        // line 165
                        yield "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 166
                            yield "            ";
                            if (!CoreExtension::inFilter($context["error"], ($context["translatableErrors"] ?? null))) {
                                // line 167
                                yield "              ";
                                $context["popoverErrors"] = Twig\Extension\CoreExtension::merge(($context["popoverErrors"] ?? null), [$context["error"]]);
                                // line 168
                                yield "            ";
                            }
                            // line 169
                            yield "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 170
                        yield "
        ";
                    } else {
                        // line 172
                        yield "          ";
                        $context["popoverErrors"] = ($context["errors"] ?? null);
                        // line 173
                        yield "      ";
                    }
                    // line 174
                    yield "
      ";
                    // line 175
                    $context["errorMessages"] = [];
                    // line 176
                    yield "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["popoverErrors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                        // line 177
                        yield "        ";
                        $context["errorMessage"] = $context["popoverError"];
                        // line 178
                        yield "
        ";
                        // line 179
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "error_message", [], "any", true, true, false, 179) && CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "locale_name", [], "any", true, true, false, 179))) {
                            // line 180
                            yield "          ";
                            $context["errorMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_message% - Language: %language_name%", ["%error_message%" => CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "error_message", [], "any", false, false, false, 180), "%language_name%" => CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "locale_name", [], "any", false, false, false, 180)], "Admin.Notifications.Error");
                            // line 181
                            yield "        ";
                        }
                        // line 182
                        yield "
        ";
                        // line 183
                        $context["errorMessages"] = Twig\Extension\CoreExtension::merge(($context["errorMessages"] ?? null), [($context["errorMessage"] ?? null)]);
                        // line 184
                        yield "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['popoverError'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    yield "
      ";
                    // line 186
                    $context["popoverErrorContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 187
                        yield "        <div class=\"popover-error-list\">
          <ul>
            ";
                        // line 189
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["errorMessages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                            // line 190
                            yield "              <li class=\"text-danger\">
                ";
                            // line 191
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["popoverError"], "html", null, true);
                            yield "
              </li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['popoverError'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 194
                        yield "          </ul>
        </div>
      ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 197
                    yield "
      <template class=\"js-popover-error-content\" data-id=\"";
                    // line 198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 198), "id", [], "any", false, false, false, 198), "html", null, true);
                    yield "\">
        ";
                    // line 199
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverErrorContent"] ?? null), "html", null, true);
                    yield "
      </template>

      ";
                    // line 202
                    $context["errorPopover"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 203
                        yield "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                        // line 205
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 205), "id", [], "any", false, false, false, 205), "html", null, true);
                        yield "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                        // line 209
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["popoverContainer"] ?? null), "html", null, true);
                        yield "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u>";
                        // line 211
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% errors", ["%count%" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["popoverErrors"] ?? null))], "Admin.Global"), "html", null, true);
                        yield "</u>
        </span>
      ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 214
                    yield "
    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 215
($context["form"] ?? null), "vars", [], "any", false, true, false, 215), "error_by_locale", [], "any", true, true, false, 215)) {
                    // line 216
                    yield "      ";
                    $context["errorByLocale"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_message% - Language: %language_name%", ["%error_message%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 216), "error_by_locale", [], "any", false, false, false, 216), "error_message", [], "any", false, false, false, 216), "%language_name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 216), "error_by_locale", [], "any", false, false, false, 216), "locale_name", [], "any", false, false, false, 216)], "Admin.Notifications.Error");
                    // line 217
                    yield "      ";
                    $context["errors"] = [($context["errorByLocale"] ?? null)];
                    // line 218
                    yield "    ";
                }
                // line 219
                yield "
    <div class=\"invalid-feedback-container\">
      ";
                // line 221
                if ( !(null === ($context["errorPopover"] ?? null))) {
                    // line 222
                    yield "        <div class=\"text-danger\">
          ";
                    // line 223
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["errorPopover"] ?? null), "html", null, true);
                    yield "
        </div>
      ";
                } else {
                    // line 226
                    yield "        <div class=\"d-inline-block text-danger align-top\">
          <i class=\"material-icons form-error-icon\">error_outline</i>
        </div>
        <div class=\"d-inline-block\">
          ";
                    // line 230
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 231
                        yield "            <div class=\"text-danger\">
              ";
                        // line 232
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                        yield "
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 235
                    yield "        </div>
      ";
                }
                // line 237
                yield "    </div>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 247
    public function macro_form_group_row($form = null, $vars = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "vars" => $vars,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 248
            yield "  ";
            $macros["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 248)->unwrap();
            // line 249
            yield "
  ";
            // line 250
            $context["class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 250)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", false, false, false, 250), "")) : (""));
            // line 251
            yield "  ";
            $context["inputType"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 251), "block_prefixes", [], "any", false, true, false, 251), 1, [], "any", true, true, false, 251)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 251), "block_prefixes", [], "any", false, false, false, 251), 1, [], "any", false, false, false, 251), "text")) : ("text"));
            // line 252
            yield "  ";
            $context["rowAttributes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 252)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", false, false, false, 252), [])) : ([]));
            // line 253
            yield "  <div class=\"form-group row type-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputType"] ?? null), "html", null, true);
            yield " ";
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
            // line 254
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default(($context["extraVars"] ?? null), [])) : ([]));
            // line 255
            yield "
    ";
            // line 257
            yield "    ";
            $context["labelOnTop"] = false;
            // line 258
            yield "
    ";
            // line 259
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", true, true, false, 259)) {
                // line 260
                yield "      ";
                $context["labelOnTop"] = CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", false, false, false, 260);
                // line 261
                yield "    ";
            }
            // line 262
            yield "
    ";
            // line 263
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", true, true, false, 263)) {
                // line 264
                yield "      ";
                $context["isRequired"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 264), "required", [], "any", true, true, false, 264)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 264), "required", [], "any", false, false, false, 264), false)) : (false));
                // line 265
                yield "
      ";
                // line 266
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", true, true, false, 266)) {
                    // line 267
                    yield "        ";
                    $context["isRequired"] = CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", false, false, false, 267);
                    // line 268
                    yield "      ";
                }
                // line 269
                yield "
      <label for=\"";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 270), "id", [], "any", false, false, false, 270), "html", null, true);
                yield "\" class=\"form-control-label ";
                yield ((($context["labelOnTop"] ?? null)) ? ("label-on-top col-12") : (""));
                yield "\">
        ";
                // line 271
                if (($context["isRequired"] ?? null)) {
                    // line 272
                    yield "          <span class=\"text-danger\">*</span>
        ";
                }
                // line 274
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", false, false, false, 274), "html", null, true);
                yield "

        ";
                // line 276
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 276), "label_attr", [], "any", true, true, false, 276) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 276), "label_attr", [], "any", false, false, false, 276)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 276), "label_attr", [], "any", false, true, false, 276), "popover", [], "array", true, true, false, 276))) {
                    // line 277
                    yield "          ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 277), "label_attr", [], "any", false, false, false, 277)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["popover"] ?? null) : null)]);
                    yield "
        ";
                }
                // line 279
                yield "      </label>
    ";
            }
            // line 281
            yield "
    <div class=\"";
            // line 282
            yield ((($context["labelOnTop"] ?? null)) ? ("col-12") : ("col-sm"));
            yield "\">
      ";
            // line 283
            yield $macros["self"]->getTemplateForMacro("macro_form_widget_with_error", $context, 283, $this->getSourceContext())->macro_form_widget_with_error(...[($context["form"] ?? null), ($context["vars"] ?? null), ($context["extraVars"] ?? null)]);
            yield "
    </div>
  </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 288
    public function macro_multistore_switch($form = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 289
            yield "  ";
            $macros["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 289)->unwrap();
            // line 290
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shop_restriction_switch", [], "any", true, true, false, 290)) {
                // line 291
                yield "    ";
                $context["defaultLabel"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 292
                    yield "      <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check / Uncheck all", [], "Admin.Actions"), "html", null, true);
                    yield "</strong> <br>
      ";
                    // line 293
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are editing this page for a specific shop or group. Click \"%yes_label%\" to check all fields, \"%no_label%\" to uncheck all.", ["%yes_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "%no_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global")], "Admin.Design.Help"), "html", null, true);
                    yield " <br>
      ";
                    // line 294
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.", [], "Admin.Design.Help"), "html", null, true);
                    yield "
    ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 296
                yield "
    ";
                // line 297
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", true, true, false, 297)) {
                    // line 298
                    yield "      ";
                    $context["extraVars"] = Twig\Extension\CoreExtension::merge(($context["extraVars"] ?? null), ["help" => ($context["defaultLabel"] ?? null)]);
                    // line 299
                    yield "    ";
                }
                // line 300
                yield "
    ";
                // line 301
                $context["vars"] = ["attr" => ["class" => "js-multi-store-restriction-switch"]];
                // line 302
                yield "
    ";
                // line 303
                yield $macros["self"]->getTemplateForMacro("macro_form_group_row", $context, 303, $this->getSourceContext())->macro_form_group_row(...[CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shop_restriction_switch", [], "any", false, false, false, 303), ($context["vars"] ?? null), ($context["extraVars"] ?? null)]);
                yield "
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 307
    public function macro_language_dependant_select($form = null, $vars = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "vars" => $vars,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 308
            yield "  ";
            $macros["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 308)->unwrap();
            // line 309
            yield "
  ";
            // line 310
            $context["class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 310)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", false, false, false, 310), "")) : (""));
            // line 311
            yield "  ";
            $context["inputType"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 311), "block_prefixes", [], "any", false, true, false, 311), 1, [], "any", true, true, false, 311)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 311), "block_prefixes", [], "any", false, false, false, 311), 1, [], "any", false, false, false, 311), "text")) : ("text"));
            // line 312
            yield "  ";
            $context["rowAttributes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 312)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", false, false, false, 312), [])) : ([]));
            // line 313
            yield "  ";
            $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 313), "attr", [], "any", false, false, false, 313);
            // line 314
            yield "  ";
            $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 314)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 314), "")) : ("")) . " language_dependant_select"))]);
            // line 315
            yield "  <div class=\"form-group row type-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inputType"] ?? null), "html", null, true);
            yield " ";
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
            // line 316
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default(($context["extraVars"] ?? null), [])) : ([]));
            // line 317
            yield "
  ";
            // line 319
            yield "  ";
            $context["labelOnTop"] = false;
            // line 320
            yield "
  ";
            // line 321
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", true, true, false, 321)) {
                // line 322
                yield "    ";
                $context["labelOnTop"] = CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", false, false, false, 322);
                // line 323
                yield "  ";
            }
            // line 324
            yield "
  ";
            // line 325
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", true, true, false, 325)) {
                // line 326
                yield "    ";
                $context["isRequired"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 326), "required", [], "any", true, true, false, 326)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 326), "required", [], "any", false, false, false, 326), false)) : (false));
                // line 327
                yield "
    ";
                // line 328
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", true, true, false, 328)) {
                    // line 329
                    yield "      ";
                    $context["isRequired"] = CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", false, false, false, 329);
                    // line 330
                    yield "    ";
                }
                // line 331
                yield "
    <label for=\"";
                // line 332
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 332), "id", [], "any", false, false, false, 332), "html", null, true);
                yield "\" class=\"form-control-label ";
                yield ((($context["labelOnTop"] ?? null)) ? ("label-on-top col-12") : (""));
                yield "\">
      ";
                // line 333
                if (($context["isRequired"] ?? null)) {
                    // line 334
                    yield "        <span class=\"text-danger\">*</span>
      ";
                }
                // line 336
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", false, false, false, 336), "html", null, true);
                yield "
    </label>
  ";
            }
            // line 339
            yield "
  <div class=\"";
            // line 340
            yield "col-sm-5";
            yield "\">
    ";
            // line 341
            yield $macros["self"]->getTemplateForMacro("macro_form_widget_with_error", $context, 341, $this->getSourceContext())->macro_form_widget_with_error(...[($context["form"] ?? null), ["attr" => ($context["attr"] ?? null)], ($context["extraVars"] ?? null)]);
            yield "
  </div>
  ";
            // line 343
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "languages", [], "any", true, true, false, 343) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "languages", [], "any", false, false, false, 343)))) {
                // line 344
                yield "  <div class=\"";
                yield "col-sm-3";
                yield "\">
    <select name=\"";
                // line 345
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 345), "id", [], "any", false, false, false, 345) . "_language"), "html", null, true);
                yield "\" class=\"custom-select language_dependant_select_language\">
    ";
                // line 346
                if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "languages", [], "any", false, false, false, 346))) {
                    // line 347
                    yield "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "languages", [], "any", false, false, false, 347));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 348
                        yield "        <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 348), "html", null, true);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "value", [], "any", false, false, false, 348);
                        yield "</option>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 350
                    yield "    ";
                }
                // line 351
                yield "    </select>
  </div>
  ";
            }
            // line 354
            yield "  </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/macros.html.twig";
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
        return array (  1084 => 354,  1079 => 351,  1076 => 350,  1065 => 348,  1060 => 347,  1058 => 346,  1054 => 345,  1049 => 344,  1047 => 343,  1042 => 341,  1038 => 340,  1035 => 339,  1028 => 336,  1024 => 334,  1022 => 333,  1016 => 332,  1013 => 331,  1010 => 330,  1007 => 329,  1005 => 328,  1002 => 327,  999 => 326,  997 => 325,  994 => 324,  991 => 323,  988 => 322,  986 => 321,  983 => 320,  980 => 319,  977 => 317,  975 => 316,  955 => 315,  952 => 314,  949 => 313,  946 => 312,  943 => 311,  941 => 310,  938 => 309,  935 => 308,  921 => 307,  912 => 303,  909 => 302,  907 => 301,  904 => 300,  901 => 299,  898 => 298,  896 => 297,  893 => 296,  887 => 294,  883 => 293,  878 => 292,  875 => 291,  872 => 290,  869 => 289,  856 => 288,  846 => 283,  842 => 282,  839 => 281,  835 => 279,  829 => 277,  827 => 276,  821 => 274,  817 => 272,  815 => 271,  809 => 270,  806 => 269,  803 => 268,  800 => 267,  798 => 266,  795 => 265,  792 => 264,  790 => 263,  787 => 262,  784 => 261,  781 => 260,  779 => 259,  776 => 258,  773 => 257,  770 => 255,  768 => 254,  748 => 253,  745 => 252,  742 => 251,  740 => 250,  737 => 249,  734 => 248,  720 => 247,  712 => 237,  708 => 235,  699 => 232,  696 => 231,  692 => 230,  686 => 226,  680 => 223,  677 => 222,  675 => 221,  671 => 219,  668 => 218,  665 => 217,  662 => 216,  660 => 215,  657 => 214,  650 => 211,  645 => 209,  638 => 205,  634 => 203,  632 => 202,  626 => 199,  622 => 198,  619 => 197,  613 => 194,  604 => 191,  601 => 190,  597 => 189,  593 => 187,  591 => 186,  588 => 185,  582 => 184,  580 => 183,  577 => 182,  574 => 181,  571 => 180,  569 => 179,  566 => 178,  563 => 177,  558 => 176,  556 => 175,  553 => 174,  550 => 173,  547 => 172,  543 => 170,  537 => 169,  534 => 168,  531 => 167,  528 => 166,  523 => 165,  520 => 163,  514 => 162,  511 => 161,  506 => 160,  503 => 159,  500 => 157,  497 => 156,  495 => 155,  489 => 153,  486 => 152,  484 => 151,  481 => 150,  478 => 149,  476 => 148,  474 => 147,  471 => 146,  468 => 145,  465 => 143,  459 => 142,  456 => 141,  451 => 140,  449 => 139,  446 => 138,  443 => 137,  431 => 136,  422 => 123,  419 => 122,  413 => 120,  411 => 119,  406 => 118,  404 => 117,  399 => 115,  396 => 114,  393 => 113,  390 => 112,  387 => 111,  384 => 110,  382 => 109,  379 => 108,  376 => 107,  362 => 106,  353 => 93,  349 => 92,  344 => 91,  331 => 90,  322 => 85,  318 => 84,  315 => 83,  310 => 81,  307 => 80,  305 => 79,  301 => 78,  297 => 77,  293 => 75,  290 => 74,  274 => 73,  266 => 69,  260 => 66,  256 => 65,  253 => 64,  249 => 62,  247 => 61,  236 => 60,  220 => 59,  210 => 54,  206 => 52,  194 => 51,  186 => 47,  180 => 45,  174 => 43,  172 => 42,  168 => 40,  155 => 39,  146 => 35,  139 => 34,  125 => 33,  116 => 30,  104 => 29,  95 => 26,  81 => 25,  75 => 306,  72 => 287,  69 => 240,  66 => 126,  63 => 96,  60 => 88,  57 => 71,  54 => 58,  51 => 50,  48 => 38,  45 => 32,  42 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/macros.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/macros.html.twig");
    }
}
