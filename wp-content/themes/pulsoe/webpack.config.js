const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
// require('dotenv').config();

// module.exports = [
//   {
//     entry : './app/resources/js/main.js',
//     loader: 'babel-loader',
//     output : {
//       filename: 'bundle.js',
//       path : path.resolve(__dirname, 'dist')
//     }
//   }
// ]

module.exports = {
  plugins: [new MiniCssExtractPlugin({
    filename: 'style.css',
    chunkFilename: 'style.css',
  })],
  module: {
    
    rules: [
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader"
        }
      },
      {
        test: /\.css$/i,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: path.resolve(__dirname, './dist/css/'),
            },
          },
          'css-loader'],
      }
    ]
  },
  entry : {
    app: path.resolve(__dirname, './assets/js/main.js')
  },
  output : {
    filename: 'bundle.js',
    path : path.resolve(__dirname, './dist/')
  },
};