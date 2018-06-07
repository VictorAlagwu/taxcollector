(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define('/Site', ['exports', 'jquery', 'Config', 'Base', 'Menubar', 'GridMenu', 'Sidebar', 'PageAside'], factory);
  } else if (typeof exports !== "undefined") {
    factory(exports, require('jquery'), require('Config'), require('Base'), require('Menubar'), require('GridMenu'), require('Sidebar'), require('PageAside'));
  } else {
    var mod = {
      exports: {}
    };
    factory(mod.exports, global.jQuery, global.Config, global.Base, global.SectionMenubar, global.SectionGridMenu, global.SectionSidebar, global.SectionPageAside);
    global.Site = mod.exports;
  }
})(this, function (exports, _jquery, _Config, _Base2, _Menubar, _GridMenu, _Sidebar, _PageAside) {
  'use strict';

  Object.defineProperty(exports, "__esModule", {
    value: true
  });
  exports.getInstance = exports.run = exports.Site = undefined;

  var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

  var _Base3 = babelHelpers.interopRequireDefault(_Base2);

  var _Menubar2 = babelHelpers.interopRequireDefault(_Menubar);

  var _GridMenu2 = babelHelpers.interopRequireDefault(_GridMenu);

  var _Sidebar2 = babelHelpers.interopRequireDefault(_Sidebar);

  var _PageAside2 = babelHelpers.interopRequireDefault(_PageAside);

  var DOC = document;
  var $DOC = (0, _jquery2.default)(document);
  var $BODY = (0, _jquery2.default)('body');

  var Site = function (_Base) {
    babelHelpers.inherits(Site, _Base);

    function Site() {
      babelHelpers.classCallCheck(this, Site);
      return babelHelpers.possibleConstructorReturn(this, (Site.__proto__ || Object.getPrototypeOf(Site)).apply(this, arguments));
    }

    babelHelpers.createClass(Site, [{
      key: 'initialize',
      value: function initialize() {
        var _this2 = this;

        this.startLoading();
        this.initializePluginAPIs();
        this.initializePlugins();

        this.initComponents();

        setTimeout(function () {
          _this2.setDefaultState();
        }, 500);
      }
    }, {
      key: 'process',
      value: function process() {
        this.polyfillIEWidth();
        this.initBootstrap();

        this.setupMenubar();
        this.setupGridMenu();
        this.setupFullScreen();
        this.setupMegaNavbar();
        this.setupTour();
        this.setupNavbarCollpase();
        // Dropdown menu setup ===================
        this.$el.on('click', '.dropdown-menu-media', function (e) {
          e.stopPropagation();
        });
      }
    }, {
      key: '_getDefaultMeunbarType',
      value: function _getDefaultMeunbarType() {
        var breakpoint = this.getCurrentBreakpoint(),
            type = false;

        if ($BODY.data('autoMenubar') === false || $BODY.is('.site-menubar-keep')) {
          if ($BODY.hasClass('site-menubar-fold')) {
            type = 'fold';
          } else if ($BODY.hasClass('site-menubar-unfold')) {
            type = 'unfold';
          }
        }

        switch (breakpoint) {
          case 'lg':
            type = type || 'unfold';
            break;
          case 'md':
          case 'sm':
            type = type || 'fold';
            break;
          case 'xs':
            type = 'hide';
            break;
          // no default
        }
        return type;
      }
    }, {
      key: 'setDefaultState',
      value: function setDefaultState() {
        var defaultState = this.getDefaultState();

        // menubar
        this.menubar.change(defaultState.menubarType);
        // gridmenu
        this.gridmenu.toggle(defaultState.gridmenu);
      }
    }, {
      key: 'getDefaultState',
      value: function getDefaultState() {
        var menubarType = this._getDefaultMeunbarType();
        return {
          menubarType: menubarType,
          gridmenu: false
        };
      }
    }, {
      key: 'menubarType',
      value: function menubarType(type) {
        var toggle = function toggle($el) {
          $el.toggleClass('hided', !(type === 'open'));
          $el.toggleClass('unfolded', !(type === 'fold'));
        };

        (0, _jquery2.default)('[data-toggle="menubar"]').each(function () {
          var $this = (0, _jquery2.default)(this);
          var $hamburger = (0, _jquery2.default)(this).find('.hamburger');

          if ($hamburger.length > 0) {
            toggle($hamburger);
          } else {
            toggle($this);
          }
        });
      }
    }, {
      key: 'initComponents',
      value: function initComponents() {
        var callback = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : undefined;

        this.menubar = new _Menubar2.default({
          $el: (0, _jquery2.default)('.site-menubar')
        });
        this.gridmenu = new _GridMenu2.default({
          $el: (0, _jquery2.default)('.site-gridmenu')
        });
        this.sidebar = new _Sidebar2.default();

        var $aside = (0, _jquery2.default)('.page-aside');
        if ($aside.length > 0) {
          this.aside = new _PageAside2.default({
            $el: $aside
          });
          this.aside.run();
        }

        this.menubar.run();
        this.sidebar.run();
      }
    }, {
      key: 'getCurrentBreakpoint',
      value: function getCurrentBreakpoint() {
        var bp = Breakpoints.current();
        return bp ? bp.name : 'lg';
      }
    }, {
      key: 'initBootstrap',
      value: function initBootstrap() {
        // Tooltip setup =============
        $DOC.tooltip({
          selector: '[data-tooltip=true]',
          container: 'body'
        });

        (0, _jquery2.default)('[data-toggle="tooltip"]').tooltip();
        (0, _jquery2.default)('[data-toggle="popover"]').popover();
      }
    }, {
      key: 'polyfillIEWidth',
      value: function polyfillIEWidth() {
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
          var msViewportStyle = DOC.createElement('style');
          msViewportStyle.appendChild(DOC.createTextNode('@-ms-viewport{width:auto!important}'));
          DOC.querySelector('head').appendChild(msViewportStyle);
        }
      }
    }, {
      key: 'setupFullScreen',
      value: function setupFullScreen() {
        if (typeof screenfull !== 'undefined') {
          $DOC.on('click', '[data-toggle="fullscreen"]', function () {
            if (screenfull.enabled) {
              screenfull.toggle();
            }

            return false;
          });

          if (screenfull.enabled) {
            DOC.addEventListener(screenfull.raw.fullscreenchange, function () {
              (0, _jquery2.default)('[data-toggle="fullscreen"]').toggleClass('active', screenfull.isFullscreen);
            });
          }
        }
      }
    }, {
      key: 'setupGridMenu',
      value: function setupGridMenu() {
        var self = this;

        $DOC.on('click', '[data-toggle="gridmenu"]', function () {
          var $this = (0, _jquery2.default)(this);
          var isOpened = self.gridmenu.isOpened;

          if (isOpened) {
            $this.addClass('active').attr('aria-expanded', true);
          } else {
            $this.removeClass('active').attr('aria-expanded', false);
          }

          self.gridmenu.toggle(!isOpened);
        });
      }
    }, {
      key: 'setupMegaNavbar',
      value: function setupMegaNavbar() {
        $DOC.on('click', '.navbar-mega .dropdown-menu', function (e) {
          e.stopPropagation();
        }).on('show.bs.dropdown', function (e) {
          var $target = (0, _jquery2.default)(e.target);
          var $trigger = e.relatedTarget ? (0, _jquery2.default)(e.relatedTarget) : $target.children('[data-toggle="dropdown"]');
          var animation = $trigger.data('animation');

          if (animation) {
            var $menu = $target.children('.dropdown-menu');
            $menu.addClass('animation-' + animation).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
              $menu.removeClass('animation-' + animation);
            });
          }
        }).on('shown.bs.dropdown', function (e) {
          var $menu = (0, _jquery2.default)(e.target).find('.dropdown-menu-media > .list-group');
          if ($menu.length > 0) {
            var api = $menu.data('asScrollable');
            if (api) {
              api.update();
            } else {
              $menu.asScrollable({
                namespace: 'scrollable',
                contentSelector: '> [data-role=\'content\']',
                containerSelector: '> [data-role=\'container\']'
              });
            }
          }
        });
      }
    }, {
      key: 'setupMenubar',
      value: function setupMenubar() {
        var _this3 = this;

        (0, _jquery2.default)(document).on('click', '[data-toggle="menubar"]:visible', function () {
          var type = _this3.menubar.type;

          switch (type) {
            case 'fold':
              type = 'unfold';
              break;
            case 'unfold':
              type = 'fold';
              break;
            case 'open':
              type = 'hide';
              break;
            case 'hide':
              type = 'open';
              break;
            // no default
          }

          _this3.menubar.change(type);
          _this3.menubarType(type);
          return false;
        });

        Breakpoints.on('change', function () {
          _this3.menubar.type = _this3._getDefaultMeunbarType();
          _this3.menubar.change(_this3.menubar.type);
        });
      }
    }, {
      key: 'setupNavbarCollpase',
      value: function setupNavbarCollpase() {
        (0, _jquery2.default)(document).on('click', '[data-target=\'#site-navbar-collapse\']', function (e) {
          var $trigger = (0, _jquery2.default)(this);
          var isClose = $trigger.hasClass('collapsed');
          $BODY.addClass('site-navbar-collapsing');
          $BODY.toggleClass('site-navbar-collapse-show', !isClose);
          setTimeout(function () {
            $BODY.removeClass('site-navbar-collapsing');
          }, 350);
        });
      }
    }, {
      key: 'startLoading',
      value: function startLoading() {
        if (typeof _jquery2.default.fn.animsition === 'undefined') {
          return false;
        }

        // let loadingType = 'default';
        var assets = (0, _Config.get)('assets');
        $BODY.animsition({
          inClass: 'fade-in',
          outClass: 'fade-out',
          inDuration: 800,
          outDuration: 500,
          loading: true,
          loadingClass: 'loader-overlay',
          loadingParentElement: 'html',
          loadingInner: '\n      <div class="loader-content">\n        <div class="loader-index">\n          <div></div>\n          <div></div>\n          <div></div>\n          <div></div>\n          <div></div>\n          <div></div>\n        </div>\n      </div>',
          onLoadEvent: true
        });
      }
    }, {
      key: 'setupTour',
      value: function setupTour(flag) {
        if (typeof this.tour === 'undefined') {
          if (typeof introJs === 'undefined') {
            return;
          }
          var overflow = (0, _jquery2.default)('body').css('overflow'),
              self = this,
              tourOptions = (0, _Config.get)('tour');

          this.tour = introJs();

          this.tour.onbeforechange(function () {
            (0, _jquery2.default)('body').css('overflow', 'hidden');
          });

          this.tour.oncomplete(function () {
            (0, _jquery2.default)('body').css('overflow', overflow);
          });

          this.tour.onexit(function () {
            (0, _jquery2.default)('body').css('overflow', overflow);
          });

          this.tour.setOptions(tourOptions);
          (0, _jquery2.default)('.site-tour-trigger').on('click', function () {
            self.tour.start();
          });
        }
      }
    }]);
    return Site;
  }(_Base3.default);

  var instance = null;

  function getInstance() {
    if (!instance) {
      instance = new Site();
    }
    return instance;
  }

  function run() {
    var site = getInstance();
    site.run();
  }

  exports.Site = Site;
  exports.run = run;
  exports.getInstance = getInstance;
  exports.default = Site;
});