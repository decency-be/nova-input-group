<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <div class="flex flex-wrap items-stretch w-full mb-4 relative">
                <div class="flex -mr-px w-2/5" v-if="position === 'before'">
                    <span class="w-full flex px-3 bg-40 form-input-bordered rounded-r-none items-center border-r-0">{{ text }}</span>
                </div>
                <input
                    :id="field.name"
                    type="text"
                    v-bind:class=classObject
                    :placeholder="field.name"
                    v-model="value"
                />
                <div class="flex -mr-px w-2/5" v-if="position === 'after'">
                    <span class="w-full flex px-3 bg-40 form-input-bordered rounded-l-none items-center border-l-0">{{ text }}</span>
                </div>
            </div>
        </template>
    </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    computed: {
        position() {
            return this.field.position || 'before'
        },
        text() {
            return this.field.text || ''
        },
        classObject() {
            if (this.field.position === 'before') {
                return 'w-3/5 form-control form-input form-input-bordered rounded-l-none'
            }
            else if (this.field.position === 'after') {
                return 'w-3/5 form-control form-input form-input-bordered rounded-r-none'
            }
            else {
                return 'w-full form-control form-input form-input-bordered'
          }
        },
    },


    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },
    },
}
</script>
