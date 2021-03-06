const path = require('path')
// const webpack = require('webpack')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const ReplaceInFileWebpackPlugin = require('replace-in-file-webpack-plugin')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

const localhost = 'http://novagric.loc'
const themePath = path.join(__dirname, 'wp-content/themes/iqwik')
const prodPath = path.join(themePath, '/assets/')
const version = Number(new Date())

module.exports = (env, argv) => {
    const isDev = argv.mode === 'development'

    const rules = [
        {
            test: /\.js$/,
            exclude: /node_modules/,
            loader: 'babel-loader',
        },
        {
            test: /\.js$/,
            enforce: "pre",
            use: ['source-map-loader'],
        },
        {
            test: /\.(sa|sc|c)ss$/,
            exclude: /node_modules/,
            use: [
                { loader: MiniCssExtractPlugin.loader, options: { hmr: isDev } },
                'css-loader',
                'sass-loader',
                'postcss-loader',
                'resolve-url-loader',
            ]
        },
        {
            test: /\.(png|jpe?g|gif)$/,
            use: [
                {
                    loader: 'file-loader',
                    options: {
                        context: prodPath,
                        name: `[path][name].[ext]?ver=${version}`,
                        publicPath: './assets/'
                    },
                },
                'img-loader'
            ]
        },
        {
            test: /\.(eot|svg|ttf|woff|woff2)$/,
            use: {
                loader: 'file-loader',
                options: {
                    context: prodPath,
                    name: '[path][name].[ext]',
                    publicPath: './assets/'
                }
            },
        }
    ]

    let plugins = [
        new MiniCssExtractPlugin({ filename: '../app.min.css' }),
        // new webpack.ProvidePlugin({
        //     $: 'jquery',
        //     jQuery: 'jquery'
        // }),
        new ReplaceInFileWebpackPlugin([{
            dir: themePath,
            files: ['version.php'],
            rules: [{
                search: new RegExp(/\$bundle_version\s=\s\'\d+\'/, 'gi'),
                replace: () => `$bundle_version = '${version}'`
            }]
        }]),
    ]

    const config = {
        context: themePath,
        entry: {
            app: path.join(prodPath, '/src/js/index.js'),
            home: path.join(prodPath, '/src/js/home.js'),
            mosaic: path.join(prodPath, '/src/js/mosaic.js'),
            "greenhouses-fabric": path.join(prodPath, 'src/js/greenhouses-fabric.js'),
            "drip-irrigation": path.join(prodPath, 'src/js/drip-irrigation.js')
        },
        output: {
            path: prodPath,
            filename: 'js/[name].min.js',
        },
        resolve: {
            modules: [__dirname, 'node_modules'],
            extensions: ['.js'],
        },
        module: { rules },
        plugins,
        optimization: { minimize: !isDev }
    }

    if (isDev) {
        config.plugins = [...config.plugins, new BrowserSyncPlugin({
            files: '**/*.php',
            proxy: localhost
        })]
        config.watch = true
        config.devtool = 'inline-cheap-source-map'
        config.watchOptions = { ignored: ['node_modules/**'] }
    }

    return config
}
