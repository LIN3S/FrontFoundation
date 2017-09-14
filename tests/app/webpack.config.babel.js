/*
 * This file is part of the BenGorCookies library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

import {join} from 'path';
import webpack from 'webpack';
import {BundleAnalyzerPlugin} from 'webpack-bundle-analyzer';

const include = join(__dirname);

const parseLocalesFromEnvOptions = options => {
  if (options === undefined || typeof options.locales !== 'string') {
    return null;
  }

  const splittedLocales = options.locales !== null ? options.locales.split(',') : [];

  let parsleyLocales = '';

  if (splittedLocales.length > 0) {
    splittedLocales.forEach((locale, index) => parsleyLocales += `${index !== 0 ? '|' : ''}${locale}`);
    return new RegExp(`(${parsleyLocales})\.js`);
  }

  return null;
};

const getPlugins = options => {
  const plugins = [
    new webpack.ContextReplacementPlugin(
      /parsleyjs[\/\\]dist[\/\\]i18n/,
      parseLocalesFromEnvOptions(options)
    )
  ];

  if (options.analyze) {
    plugins.push(new BundleAnalyzerPlugin());
  }

  return plugins;
};

export default options => {
  return {
    entry: './app.js',
    output: {
      path: join(__dirname, 'dist'),
      libraryTarget: 'umd',
    },
    devtool: 'source-map',
    module: {
      loaders: [
        {
          test: /\.js$/,
          loader: 'babel-loader',
          include,
          exclude: /(node_modules)/,
        }
      ]
    },
    plugins: getPlugins(options)
  }
};
