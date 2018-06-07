import pkg from './package';
import {argv} from 'yargs';
const production = argv.production || argv.prod || false;

export default {
  name: pkg.name,
  version: pkg.version,
  description: pkg.description,
  author: pkg.author,
  banner: `/**
* ${pkg.name} v${pkg.version}
* ${pkg.homepage}
*
* Copyright (c) ${pkg.author}
* Released under the ${pkg.license} license
*/
`,

  root: __dirname,
  paths: {
    source: 'src',
    build: 'dist'
  },

  assets: {
    source: 'src/assets',
    build: 'assets'
  },

  enable: {
    notify: true
  },

  styles: {
    source: 'src/scss',
    build: 'css',
    include: [
      'src/scss',
      'src/scss/bootstrap',
      'src/scss/mixins'
      // 'node_modules'
    ]
  },

  scripts: {
    source: 'src/es',
    build: 'js'
  },

  fonts: {
    source: 'src/fonts',
    build: 'fonts'
  },

  images: {
    source: 'src/photos',
    build: 'photos'
  },

  vendor: {
    source: 'src/vendor',
    manifest: 'manifest.json',
    dest: 'vendor',
    verbose: true,
    override: true,
    ignoreError: false,
    flattenPackages: false,
    flattenTypes: false,
    flatten: false,
    dests: {
      images: "images",
      fonts: "",
      js: "",
      css: ""
    },
    paths: {
      css: 'src/vendor/${package}/src/${file}',
      coffee: 'src/vendor/${package}/${file}',
      es6: 'src/vendor/${package}/src/${file}',
      stylus: 'src/vendor/${package}/src/${file}',
      less: 'src/vendor/${package}/src/${file}',
      sass: 'src/vendor/${package}/src/${file}',
      scss: 'src/vendor/${package}/src/${file}'
    }
  },

  notify: {
    title: pkg.name
  },

  env: 'development',
  production: production,
  setEnv: function(env) {
    if (typeof env !== 'string') return;
    this.env = env;
    this.production = env === 'production';
    process.env.NODE_ENV = env;
  }
};
