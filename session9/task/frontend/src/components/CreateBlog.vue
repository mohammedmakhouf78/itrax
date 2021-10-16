<template lang="">
    <div>
        <b-modal v-model="modalShow" hide-footer hide-header @hidden="hideModal"
        @ok="hideModal"
        @close="hideModal"
        >
            <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                <b-form-group
                    id="input-group-1"
                    label="Blog Title: "
                    label-for="title"
                    class="mb-3"
                >
                    <b-form-input
                    id="title"
                    v-model="form.title"
                    type="text"
                    placeholder="Enter title"
                    required
                    ></b-form-input>
                </b-form-group>

                <b-form-group id="input-group-2" label="description" label-for="description" class="mb-3">
                    <b-form-input
                    id="description"
                    v-model="form.description"
                    placeholder="Enter description"
                    required
                    ></b-form-input>
                </b-form-group>

                <b-form-group id="input-group-3" label="User Name" label-for="user" class="mb-3">
                    <b-form-input
                    id="user"
                    v-model="form.user"
                    placeholder="Enter username"
                    required
                    ></b-form-input>
                </b-form-group>
                <b-form-group id="input-group-4" label="Image" class="mb-3">
                    <b-form-file
                    v-model="form.file"
                    :state="Boolean(form.file)"
                    placeholder="Choose a file or drop it here..."
                    drop-placeholder="Drop file here..."
                    ></b-form-file>
                </b-form-group>

                <b-button type="submit" variant="primary" class="me-2">Submit</b-button>
                <b-button type="reset" variant="danger">Reset</b-button>
            </b-form>
        </b-modal>
    </div>
</template>
<script>
import axios from 'axios'
export default {
    name: 'CreateBlog',
    props:['modalShow'],
    data() {
        return {
            form: {
                title: '',
                description: '',
                user: '',
                file:null
            },
            show: true,
        }
    },
    methods: {
        hideModal:function(){
            this.$emit('hideModal')
        },
        onSubmit(event) {
            event.preventDefault()
            axios.post('http://localhost:8088/itrax/session9/task/backend/controllers/addBlog.php',{
                title:this.form.title,
                image:this.form.file.name,
                description:this.form.description,
                user:this.form.user
            })
            .then(res => {
               console.log(res)
            })
            .catch(err => {
                console.log(err)
            })
        },
        onReset(event) {
            event.preventDefault()
            // Reset our form values
            this.form.title = ''
            this.form.description = ''
            this.form.user = null
            // Trick to reset/clear native browser form validation state
            this.file = null
            this.show = false
            this.$nextTick(() => {
            this.show = true
            })
        }
    },
}
</script>
<style lang="">
    
</style>