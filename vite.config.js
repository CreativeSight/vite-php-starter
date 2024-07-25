import { defineConfig } from 'vite';
import eslint from 'vite-plugin-eslint';

export default defineConfig({
  publicDir: 'public',
  root: './',
  plugins: [
    eslint({
      cache: false,
      fix: true,
    }),
  ],
  server: {
    // serve index.php in development
    open: '/index.php',
  },
  build: {
    manifest: true,
    rollupOptions: {
      input: '/src/app.ts',
    },
    outDir: 'dist',
    emptyOutDir: true,
  },
});
