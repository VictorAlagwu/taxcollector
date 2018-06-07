(function (global, factory) {
  if (typeof define === "function" && define.amd) {
    define('/advanced/context-menu', ['jquery', 'Site'], factory);
  } else if (typeof exports !== "undefined") {
    factory(require('jquery'), require('Site'));
  } else {
    var mod = {
      exports: {}
    };
    factory(global.jQuery, global.Site);
    global.advancedContextMenu = mod.exports;
  }
})(this, function (_jquery, _Site) {
  'use strict';

  var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

  (0, _jquery2.default)(document).ready(function ($$$1) {
    (0, _Site.run)();
  });

  // Demo 1
  // ------
  (function () {
    _jquery2.default.contextMenu({
      selector: '#simpleContextMenu',
      // callback: function(key, options) {
      //   var m = "clicked: " + key;
      //   window.console && console.log(m) || alert(m);
      // },
      items: {
        "edit": {
          name: "Edit",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-edit';
          }
        },
        "cut": {
          name: "Cut",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-scissor';
          }
        },
        "copy": {
          name: "Copy",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-copy';
          }
        },
        "paste": {
          name: "Paste",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-clipboard';
          }
        },
        "delete": {
          name: "Delete",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-close';
          }
        },
        "sep1": "---------",
        "share": {
          name: "Share",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-share';
          }
        }
      }
    });
  })();

  // Demo 2
  // ------
  (function () {
    _jquery2.default.contextMenu({
      selector: '.contextMenu-example2 > span',
      // callback: function(key, options) {
      //   var m = "clicked: " + key;
      //   window.console && console.log(m) || alert(m);
      // },
      items: {
        "edit": {
          name: "Edit",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-edit';
          }
        },
        "cut": {
          name: "Cut",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-scissor';
          }
        },
        "copy": {
          name: "Copy",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-copy';
          }
        },
        "paste": {
          name: "Paste",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-clipboard';
          }
        },
        "delete": {
          name: "Delete",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-close';
          }
        },
        "sep1": "---------",
        "share": {
          name: "Share",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-share';
          }
        }
      }
    });
  })();

  // Demo 3
  // ------
  (function () {
    _jquery2.default.contextMenu({
      selector: '.contextMenu-example3',
      callback: function callback(key, options) {
        var m = "clicked: " + key;
        window.console && console.log(m) || alert(m);
      },
      items: {
        "edit": {
          name: "Edit",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-edit';
          }
        },
        "cut": {
          name: "Cut",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-scissor';
          }
        },
        "copy": {
          name: "Copy",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-copy';
          }
        },
        "paste": {
          name: "Paste",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-clipboard';
          }
        },
        "delete": {
          name: "Delete",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-close';
          }
        },
        "sep1": "---------",
        "share": {
          name: "Share",
          icon: function icon() {
            return 'context-menu-icon context-menu-extend-icon wb-share';
          }
        }
      }
    });
  })();

  // // Demo 4
  // // ------
  // (function() {
  //   $.contextMenu({
  //     selector: '.contextMenu-example4',
  //     // callback: function(key, options) {
  //     //   var m = "clicked: " + key;
  //     //   window.console && console.log(m) || alert(m);
  //     // },
  //     items: {
  //       "edit": {
  //         name: "Edit",
  //         icon: "wb-edit"
  //       },
  //       "copy": {
  //         name: "Copy",
  //         icon: "wb-copy"
  //       }
  //     }
  //   });
  // })();

  // // Demo 5
  // // ------
  // (function() {
  //   $.contextMenu({
  //     selector: '.contextMenu-example5',
  //     // callback: function(key, options) {
  //     //   var m = "clicked: " + key;
  //     //   window.console && console.log(m) || alert(m);
  //     // },
  //     items: {
  //       "edit": {
  //         name: "Edit",
  //         icon: "fa-edit"
  //       },
  //       "cut": {
  //         name: "Cut",
  //         icon: "fa-cut"
  //       }
  //     }
  //   });
  // })();
});