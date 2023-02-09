
import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import VitePluginBrowserSync from 'vite-plugin-browser-sync'

// https://vitejs.dev/config/
export default defineConfig({
  base: './',
  plugins: [
    vue({
      template: {
        transformAssetUrls: {
          includeAbsolute: false,
        },
      },
    }),
    VitePluginBrowserSync()
  ],
  resolve: {
    alias: {
      '@': '/src',
    },
  },
  build: {
    rollupOptions: {
      input: './src/main.js',
      output: {
        entryFileNames: `assets/[name].js`,
        chunkFileNames: `assets/[name].js`,
        assetFileNames: `assets/[name].[ext]`,
      },
    },
  },
  configureServer: app => {
    app.use(
      require("sass").middleware({
        src: __dirname,
        dest: __dirname,
        outputStyle: "compressed",
        prefix: "/",
      })
    );
  },
});