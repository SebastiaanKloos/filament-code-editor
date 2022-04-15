import CodeEditorAlpinePlugin from './components/code-editor';

document.addEventListener('alpine:init', () => {
    window.Alpine.plugin(CodeEditorAlpinePlugin);
})