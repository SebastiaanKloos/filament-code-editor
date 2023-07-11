const esbuild = require('esbuild');
const shouldWatch = process.argv.includes('--watch');

esbuild.build({
    define: {
        'process.env.NODE_ENV': shouldWatch ? `'production'` : `'development'`,
    },
    entryPoints: ['resources/js/index.js'],
    outfile: 'dist/filament-tools.js',
    bundle: true,
    watch: shouldWatch,
}).catch(() => process.exit(1));
esbuild.build({
    define: {
        'process.env.NODE_ENV': shouldWatch ? `'production'` : `'development'`,
    },
    entryPoints: ['resources/js/module.js'],
    outfile: 'dist/module.esm.js',
    bundle: true,
    platform: 'neutral',
    mainFields: ['module', 'main'],
    watch: shouldWatch,
}).catch(() => process.exit(1));
