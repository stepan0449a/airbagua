const webpack = require("webpack");

const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const {VueLoaderPlugin} = require('vue-loader');

// Main const
// see more: https://github.com/vedees/webpack-template/blob/master/README.md#main-const
const PATHS = {
    src: path.join(__dirname, '../src'),
    dist: path.join(__dirname, '../public'),
    assets: 'assets/',
};

// Pages const for HtmlWebpackPlugin
// see more: https://github.com/vedees/webpack-template/blob/master/README.md#html-dir-folder
// const PAGES_DIR = `${PATHS.src}/pages`;
// const PAGES = fs.readdirSync(PAGES_DIR).filter(fileName => fileName.endsWith('.html'));
// const PAGESPhP = fs.readdirSync(PAGES_DIR).filter(fileName => fileName.endsWith('.php'));

//function for build dirname to implement pretty url
// function buildPrettyUrl(nameFile) {
//     //cut everything after point
//     return nameFile.split('.')[0];
// }


// noinspection WebpackConfigHighlighting
module.exports = {
    // BASE config
    externals: {
        paths: PATHS
    },
    entry: {
        app: PATHS.src,
        // module: `${PATHS.src}/your-module.js`,
    },
    output: {
        filename: `${PATHS.assets}js/[name].js`,
        path: PATHS.dist,
        //publicPath: '/'
    },
    optimization: {
        splitChunks: {
            cacheGroups: {
                vendor: {
                    name: 'vendors',
                    test: /node_modules/,
                    chunks: 'all',
                    enforce: true
                }
            }
        }
    },
    module: {
        rules: [{
            test: /\.js$/,
            loader: 'babel-loader',
            exclude: '/node_modules/'
        },
            {
                test: /\.vue$/,
                loader: 'vue-loader',
                options: {
                    loader: {
                        scss: 'vue-style-loader!css-loader!sass-loader'
                    }
                }
            },
            {
                test: /\.(woff(2)?|ttf|eot|otf)(\?v=\d+\.\d+\.\d+)?$/,
                loader: 'file-loader',
                options: {
                    name: '[name].[ext]',
                    outputPath: 'assets/fonts',
                    publicPath: '../fonts/'
                }
            }
            ,
            {
                test: /\.(png|jpg|gif|svg)$/,
                loaders: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            outputPath: 'assets/images/icons',
                            publicPath: '../images/icons/'
                        }
                    
                    }
                    
                ]
                
            }, {
                test: /\.scss$/,
                use: [
                    'style-loader',
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {sourceMap: true}
                    }, {
                        loader: 'postcss-loader',
                        options: {
                            sourceMap: true,
                            config: {path: `./postcss.config.js`}}
                    }, {
                        loader: 'sass-loader',
                        options: {sourceMap: true}
                    }
                ]
            }, {
                test: /\.css$/,
                use: [
                    'style-loader',
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {sourceMap: true}
                    }, {
                        loader: 'postcss-loader',
                        options: {sourceMap: true, config: {path: `./postcss.config.js`}}
                    }
                ]
            }]
    },
    resolve: {
        alias: {
            '~': PATHS.src,
            'vue$': 'vue/dist/vue.js',
        }
    },
    plugins: [
        new VueLoaderPlugin(),
        new MiniCssExtractPlugin({
            filename: `${PATHS.assets}css/[name].css`,
        }),
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            "window.jQuery": 'jquery'
        }),
        new CopyWebpackPlugin([
            {from: `${PATHS.src}/${PATHS.assets}images`, to: `${PATHS.assets}images`},
            {from: `${PATHS.src}/${PATHS.assets}video`, to: `${PATHS.assets}video`},
            {from: `${PATHS.src}/vendor`, to: `${PATHS.dist}/vendor`},
            {from: `${PATHS.src}/components`, to: `${PATHS.dist}/components`},
            {from: `${PATHS.src}/composer.json`, to: `${PATHS.dist}/composer.json`},
            {from: `${PATHS.src}/composer.lock`, to: `${PATHS.dist}/composer.lock`},
            {from: `${PATHS.src}/static`, to: `${PATHS.dist}`},
            //{from: `${PATHS.src}/${PATHS.assets}pages`, to: `${PATHS.assets}pages`},
        ]),

        // Automatic creation any html pages (Don't forget to RERUN dev server)
        // see more: https://github.com/vedees/webpack-template/blob/master/README.md#create-another-html-files
        // best way to create pages: https://github.com/vedees/webpack-template/blob/master/README.md#third-method-best
        // ...PAGES.map(page => new HtmlWebpackPlugin({
        //     template: `${PAGES_DIR}/${page}`,
        //     filename: `${buildPrettyUrl(page)}/index.html`
        // })),
        // ...PAGESPhP.map(page => new HtmlWebpackPlugin({
        //     template: `${PAGES_DIR}/${page}`,
        //     filename: `${buildPrettyUrl(page)}/index.php`
        // })),


        new HtmlWebpackPlugin({
            template: `${PATHS.src}/index.html`,
            filename: `./index.html`
        }),
        new HtmlWebpackPlugin({
            template: `${PATHS.src}/static/.htaccess`,
            filename: `./.htaccess`,
            inject: false,
        })


    ],
};

// const imagemin = require('imagemin');
// const imageminPngquant = require('imagemin-pngquant');

// (async () => {
// 	await imagemin(['../src/assets/images/*.png'], '../public/assets/images', {
// 		plugins: [
// 			imageminPngquant()
//         ],
//         quality: [
//             1,1
//         ]
// 	});

// 	console.log('************ Images optimized ************');
// })();
// ...PAGES.map(page => new HtmlWebpackPlugin({
//     template: `${PAGES_DIR}/${page}`,
//     filename: `assets/pages/${page}`
// })),
// ...PAGESPhP.map(page => new HtmlWebpackPlugin({
//     template: `${PAGES_DIR}/${page}`,
//     filename: `assets/pages/${page}`
// })),
//     new HtmlWebpackPlugin({
//         template: `${PATHS.src}/index.html`,
//         filename: `./index.html`
//     })
