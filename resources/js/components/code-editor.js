import { EditorState, basicSetup } from "@codemirror/basic-setup";
import {EditorView, keymap} from "@codemirror/view";
import { indentWithTab } from "@codemirror/commands";
import { javascript } from "@codemirror/lang-javascript";
import { json } from "@codemirror/lang-json";
import { php } from "@codemirror/lang-php";
import { css } from "@codemirror/lang-css";
import { html } from "@codemirror/lang-html";

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
                this.editor = null

                this.editor = new EditorView({
                    state: EditorState.create({
                        extensions: [
                            basicSetup,
                            keymap.of([indentWithTab]),
                            javascript(),
                            php(),
                            json(),
                            css(),
                            html(),
                            EditorView.updateListener.of((v) => {
                                if (v.docChanged) {
                                    this.state = v.state.doc.toString();
                                }
                            }),
                        ],
                        doc: this.state,
                    }),
                    parent: this.$refs.codeeditor,
                })
            },
        }
    });
}