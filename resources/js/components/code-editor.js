import { EditorState, EditorView, basicSetup } from "@codemirror/basic-setup";
import { javascript } from "@codemirror/lang-javascript";
import { php } from "@codemirror/lang-php";
import { css } from "@codemirror/lang-css";

export default (Alpine) => {
    Alpine.data('codeEditorFormComponent', ({
        state,
    }) => {
        return {
            state,
            init: function () {
                this.render();
            },
            render() {
                this.editorState = EditorState.create({
                    extensions: [
                        basicSetup,
                        javascript(),
                        php(),
                        css(),
                        EditorView.updateListener.of((v) => {
                            if (v.docChanged) {
                                this.state = v.state.doc.toString();
                            }
                        }),
                    ],
                    doc: this.state
                })

                this.editor = null

                this.editor = new EditorView({
                    state: this.editorState,
                    parent: this.$refs.codeeditor,
                })
            },
        }
    });
}