import laravel from "laravel-vite-plugin";
import browserslist from "browserslist";
import { browserslistToTargets } from "lightningcss";
import { defineConfig, loadEnv } from "vite";

export default defineConfig(({ command, mode }) => {
  const env = loadEnv(mode, process.cwd(), "");
  return {
    plugins: [
      laravel({
        refresh: true,
        input: [
          "resources/css/site.css",
          "resources/css/templates/home.css",
          "resources/js/site.js",
        ],
      }),
    ],
    server: {
      open: env.APP_URL,
    },
    css: {
      transformer: "lightningcss",
      lightningcss: {
        targets: browserslistToTargets(browserslist(">=0.25%")),
        cssModules: true,
      },
    },
    build: {
      cssMinify: "lightningcss",
    },
  };
});
