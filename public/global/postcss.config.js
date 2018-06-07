let config = require('./config');

// See: https://github.com/postcss/postcss-loader#usage
let postcssConfig = {
  plugins: [
    require('autoprefixer')({
      browsers: [
        // For more browsers, see https://github.com/ai/browserslist
        "Chrome >= 45",
        "Firefox ESR",
        "Edge >= 12",
        "Explorer >= 10",
        "iOS >= 9",
        "Safari >= 9",
        "Android >= 4.4",
        "Opera >= 30"
      ]
    }),
    require('stylefmt')
  ]
};

if (config.production) {
  postcssConfig.plugins.push(
    require('postcss-csso')({
      restructure: false,
      debug: true
    })
  );
}

module.exports = postcssConfig;
