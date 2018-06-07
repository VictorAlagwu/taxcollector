(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define('/Plugin/jvectormap', ['exports', 'Plugin', 'Config'], factory);
  } else if (typeof exports !== "undefined") {
    factory(exports, require('Plugin'), require('Config'));
  } else {
    var mod = {
      exports: {}
    };
    factory(mod.exports, global.Plugin, global.Config);
    global.PluginJvectormap = mod.exports;
  }
})(this, function (exports, _Plugin2, _Config) {
  'use strict';

  Object.defineProperty(exports, "__esModule", {
    value: true
  });

  var _Plugin3 = babelHelpers.interopRequireDefault(_Plugin2);

  var NAME = 'vectorMap';

  var VectorMap = function (_Plugin) {
    babelHelpers.inherits(VectorMap, _Plugin);

    function VectorMap() {
      babelHelpers.classCallCheck(this, VectorMap);
      return babelHelpers.possibleConstructorReturn(this, (VectorMap.__proto__ || Object.getPrototypeOf(VectorMap)).apply(this, arguments));
    }

    babelHelpers.createClass(VectorMap, [{
      key: 'getName',
      value: function getName() {
        return NAME;
      }
    }], [{
      key: 'getDefaults',
      value: function getDefaults() {
        return {
          map: 'world_mill',
          backgroundColor: '#fff',
          zoomAnimate: true,
          regionStyle: {
            initial: {
              fill: (0, _Config.colors)('primary', 600)
            },
            hover: {
              fill: (0, _Config.colors)('primary', 500)
            },
            selected: {
              fill: (0, _Config.colors)('primary', 800)
            },
            selectedHover: {
              fill: (0, _Config.colors)('primary', 500)
            }
          },
          markerStyle: {
            initial: {
              r: 8,
              fill: (0, _Config.colors)('red', 600),
              'stroke-width': 0
            },
            hover: {
              r: 12,
              stroke: (0, _Config.colors)('red', 600),
              'stroke-width': 0
            }
          }
        };
      }
    }]);
    return VectorMap;
  }(_Plugin3.default);

  _Plugin3.default.register(NAME, VectorMap);

  exports.default = VectorMap;
});