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

/* @PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig */
class __TwigTemplate_e1d23715b0360c2d47d7b809cf2fa849 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'perfs_form_smarty_cache' => [$this, 'block_perfs_form_smarty_cache'],
            'perfs_form_smarty_cache_form' => [$this, 'block_perfs_form_smarty_cache_form'],
            'perfs_form_debug_mode' => [$this, 'block_perfs_form_debug_mode'],
            'perfs_form_debug_mode_form' => [$this, 'block_perfs_form_debug_mode_form'],
            'perfs_form_modules' => [$this, 'block_perfs_form_modules'],
            'perfs_form_modules_form' => [$this, 'block_perfs_form_modules_form'],
            'perfs_form_optional_features' => [$this, 'block_perfs_form_optional_features'],
            'perfs_form_optional_features_form' => [$this, 'block_perfs_form_optional_features_form'],
            'perfs_form_ccc' => [$this, 'block_perfs_form_ccc'],
            'perfs_form_ccc_form' => [$this, 'block_perfs_form_ccc_form'],
            'perfs_form_media_servers' => [$this, 'block_perfs_form_media_servers'],
            'perfs_form_media_servers_form' => [$this, 'block_perfs_form_media_servers_form'],
            'perfs_form_caching' => [$this, 'block_perfs_form_caching'],
            'perfs_form_caching_form' => [$this, 'block_perfs_form_caching_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["smartyForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["debugModeForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 29
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["optionalFeaturesForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 30
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["combineCompressCacheForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 31
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["mediaServersForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 32
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["cachingForm"] ?? null), ["@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["smartyForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_smarty_save")]);
        yield "
  ";
        // line 36
        yield from $this->unwrap()->yieldBlock('perfs_form_smarty_cache', $context, $blocks);
        // line 56
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["smartyForm"] ?? null), 'form_end');
        yield "

  ";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["debugModeForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_debug_mode_save")]);
        yield "
  ";
        // line 59
        yield from $this->unwrap()->yieldBlock('perfs_form_debug_mode', $context, $blocks);
        // line 79
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["debugModeForm"] ?? null), 'form_end');
        yield "

  ";
        // line 81
        yield from $this->unwrap()->yieldBlock('perfs_form_modules', $context, $blocks);
        // line 124
        yield "
  ";
        // line 125
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["optionalFeaturesForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_optional_features_save")]);
        yield "
  ";
        // line 126
        yield from $this->unwrap()->yieldBlock('perfs_form_optional_features', $context, $blocks);
        // line 155
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["optionalFeaturesForm"] ?? null), 'form_end');
        yield "

  ";
        // line 157
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["combineCompressCacheForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_combine_compress_cache_save")]);
        yield "
  ";
        // line 158
        yield from $this->unwrap()->yieldBlock('perfs_form_ccc', $context, $blocks);
        // line 187
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["combineCompressCacheForm"] ?? null), 'form_end');
        yield "

  ";
        // line 189
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["mediaServersForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_media_servers_save")]);
        yield "
  ";
        // line 190
        yield from $this->unwrap()->yieldBlock('perfs_form_media_servers', $context, $blocks);
        // line 219
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["mediaServersForm"] ?? null), 'form_end');
        yield "

  ";
        // line 221
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cachingForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_caching_save")]);
        yield "
  ";
        // line 222
        yield from $this->unwrap()->yieldBlock('perfs_form_caching', $context, $blocks);
        // line 244
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cachingForm"] ?? null), 'form_end');
        yield "
";
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_smarty_cache(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">business_center</i>
        ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Smarty", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 44
        yield from $this->unwrap()->yieldBlock('perfs_form_smarty_cache_form', $context, $blocks);
        // line 47
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_smarty_cache_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["smartyForm"] ?? null), 'widget');
        yield "
          ";
        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_debug_mode(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 67
        yield from $this->unwrap()->yieldBlock('perfs_form_debug_mode_form', $context, $blocks);
        // line 70
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_debug_mode_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["debugModeForm"] ?? null), 'widget');
        yield "
          ";
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_modules(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "    <div class=\"card form-horizontal\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">bug_report</i>
        ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span
          class=\"help-box\"
          data-container=\"body\"
          data-toggle=\"popover\"
          data-trigger=\"hover\"
          data-placement=\"right\"
          data-content=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This feature allows you to identify modules that might be causing bugs on your store. Disable all non-built-in modules (not listed in composer.json). Then, re-enable each module one by one and check that everything works properly before moving on to the next one.", [], "Admin.Advparameters.Help"), "html_attr");
        yield "\"
          title=\"\"
          data-original-title=\"\"
        ></span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 100
        yield from $this->unwrap()->yieldBlock('perfs_form_modules_form', $context, $blocks);
        // line 120
        yield "        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_modules_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 101
        yield "            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable non built-in modules", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
              </label>

              <div class=\"col-sm input-container\">
                <a
                  class=\"btn btn-primary pointer\"
                  href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance_module_disable_non_builtin");
        yield "\"
                  id=\"disableNonBuiltInModulesBtn\"
                  data-confirm-title=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable all non-built-in modules?", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "\"
                  data-confirm-button-label=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable", [], "Admin.Actions"), "html", null, true);
        yield "\"
                  data-close-button-label=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "\"
                >
                  ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable", [], "Admin.Actions"), "html", null, true);
        yield "
                </a>
              </div>
            </div>
          ";
        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_optional_features(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 127
        yield "    <div class=\"card\" id=\"optional_features\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">extension</i>
        ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional features", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Some features can be disabled in order to improve performance.", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 143
        yield from $this->unwrap()->yieldBlock('perfs_form_optional_features_form', $context, $blocks);
        // line 146
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 143
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_optional_features_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 144
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["optionalFeaturesForm"] ?? null), 'widget');
        yield "
          ";
        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_ccc(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 159
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">zoom_out_map</i>
        ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CCC (Combine, Compress and Cache)", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.7+. Otherwise, CCC will cause problems.", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 175
        yield from $this->unwrap()->yieldBlock('perfs_form_ccc_form', $context, $blocks);
        // line 178
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_ccc_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 176
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["combineCompressCacheForm"] ?? null), 'widget');
        yield "
          ";
        yield from [];
    }

    // line 190
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_media_servers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 191
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        ";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Media servers (use only with CCC)", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "

        <span class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must enter another domain, or subdomain, in order to use cookieless static content.", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "\"
              title=\"\">
        </span>
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 207
        yield from $this->unwrap()->yieldBlock('perfs_form_media_servers_form', $context, $blocks);
        // line 210
        yield "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 207
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_media_servers_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 208
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["mediaServersForm"] ?? null), 'widget');
        yield "
          ";
        yield from [];
    }

    // line 222
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_caching(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 223
        yield "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">link</i>
        ";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Caching", [], "Admin.Advparameters.Feature"), "html", null, true);
        yield "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 230
        yield from $this->unwrap()->yieldBlock('perfs_form_caching_form', $context, $blocks);
        // line 233
        yield "
          ";
        // line 234
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@AdvancedParameters/memcache_servers.html.twig", ["form" => ($context["memcacheForm"] ?? null)]);
        yield "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    // line 230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_perfs_form_caching_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 231
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["cachingForm"] ?? null), 'widget');
        yield "
          ";
        yield from [];
    }

    // line 247
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 248
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/performance_preferences.bundle.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePage.js"), "html", null, true);
        yield "\"></script>
  <script>
    var configuration = {
      'addServerUrl': '";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_add"), "js"), "html", null, true);
        yield "',
      'removeServerUrl': '";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_delete"), "js"), "html", null, true);
        yield "',
      'testServerUrl': '";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_servers_test"), "js"), "html", null, true);
        yield "'
    };
    var app = new PerformancePage(configuration.addServerUrl, configuration.removeServerUrl, configuration.testServerUrl);

    window.addEventListener('load', function () {
      var addServerBtn = document.getElementById('add-server-btn');
      var testServerBtn = document.getElementById('test-server-btn');

      addServerBtn.addEventListener('click', function (event) {
        event.preventDefault();
        app.addServer();
      });

      testServerBtn.addEventListener('click', function (event) {
        event.preventDefault();
        app.testServer();
      });
    });
  </script>

  <script src=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePageUI.js"), "html", null, true);
        yield "\"></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig";
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
        return array (  663 => 275,  640 => 255,  636 => 254,  632 => 253,  626 => 250,  622 => 249,  617 => 248,  610 => 247,  602 => 231,  595 => 230,  585 => 239,  577 => 234,  574 => 233,  572 => 230,  565 => 226,  560 => 223,  553 => 222,  545 => 208,  538 => 207,  528 => 214,  522 => 210,  520 => 207,  511 => 201,  501 => 194,  496 => 191,  489 => 190,  481 => 176,  474 => 175,  464 => 182,  458 => 178,  456 => 175,  447 => 169,  437 => 162,  432 => 159,  425 => 158,  417 => 144,  410 => 143,  400 => 150,  394 => 146,  392 => 143,  383 => 137,  373 => 130,  368 => 127,  361 => 126,  351 => 115,  346 => 113,  342 => 112,  338 => 111,  333 => 109,  324 => 103,  320 => 101,  313 => 100,  305 => 120,  303 => 100,  293 => 93,  282 => 85,  277 => 82,  270 => 81,  262 => 68,  255 => 67,  245 => 74,  239 => 70,  237 => 67,  230 => 63,  225 => 60,  218 => 59,  210 => 45,  203 => 44,  193 => 51,  187 => 47,  185 => 44,  178 => 40,  173 => 37,  166 => 36,  158 => 244,  156 => 222,  152 => 221,  146 => 219,  144 => 190,  140 => 189,  134 => 187,  132 => 158,  128 => 157,  122 => 155,  120 => 126,  116 => 125,  113 => 124,  111 => 81,  105 => 79,  103 => 59,  99 => 58,  93 => 56,  91 => 36,  86 => 35,  79 => 34,  74 => 25,  72 => 32,  70 => 31,  68 => 30,  66 => 29,  64 => 28,  62 => 27,  55 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", "/home/sheridantools/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/performance.html.twig");
    }
}
