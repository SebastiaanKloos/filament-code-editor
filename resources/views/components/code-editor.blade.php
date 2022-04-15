<x-dynamic-component
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>

    <div
        x-data="codeEditorFormComponent({
            state: $wire.{{ $applyStateBindingModifiers('entangle(\'' . $getStatePath() . '\')') }},
        })"
    >
        <div
            wire:ignore
            class="w-full border"
            x-ref="codeeditor"
            style="min-height: 150px;"
        ></div>
    </div>

    <style>
        .cm-gutters {
            min-height: 150px !important;
        }

        .cm-scroller {
            min-height: 150px !important;
        }

        .cm-gutters {
            min-height: 150px !important;
        }
    </style>

</x-dynamic-component>