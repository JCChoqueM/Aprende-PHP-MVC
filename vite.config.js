import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  publicDir: false, // Desactivar publicDir para evitar conflictos
  
  build: {
    outDir: 'public/build',
    emptyOutDir: false,
    
    rollupOptions: {
      input: resolve(__dirname, 'src/main.js'),
      output: {
        entryFileNames: 'js/bundle.js',
        assetFileNames: (assetInfo) => {
          if (assetInfo.name.endsWith('.css')) {
            return 'css/app.css';
          }
          return 'assets/[name][extname]';
        }
      }
    },
    
    minify: 'terser',
    sourcemap: true,
  },
  
  css: {
    preprocessorOptions: {
      scss: {
        // Agregar ruta base para que encuentre los imports
        includePaths: [resolve(__dirname, 'src/scss')],
        // Cargar paths para @use y @import
        loadPaths: [resolve(__dirname, 'src/scss')]
      }
    },
    postcss: {
      plugins: [
        require('autoprefixer'),
        require('cssnano')({ preset: 'default' })
      ]
    }
  },
});