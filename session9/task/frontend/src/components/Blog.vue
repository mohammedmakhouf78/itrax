<template lang="">
    <div class="blog">
        <b-card class="overflow-hidden" style="max-width: 540px;" body-class="bg-color" :style="{backgroundColor:color}">
            <b-row no-gutters>
                <b-col md="6">
                    <b-card-img src="https://picsum.photos/400/400/?image=20" alt="Image" class="rounded-0"></b-card-img>
                </b-col>
                <b-col md="6">
                    <b-card-body :title="blog.title" body-text-variant="daek">
                        <b-card-text>
                            {{blog.description}}
                        </b-card-text>
                        <b-card-text>
                            {{blog.user}}
                        </b-card-text>
                        <b-card-text>
                            {{blog.created_at}}
                        </b-card-text>
                    </b-card-body>
                </b-col>
            </b-row>
        </b-card>
    </div>
</template>
<script>
export default {
    props:['blog'],
    data() {
        return {
            color:'#'+(Math.random()*0xFFFFFF<<0).toString(16)
        }
    },
}
</script>
<style scoped>
    .blog{
        margin-bottom: 2em;
    }
    .bg-color{
        /* background-color: #2274A5; */
        color: white;
    }
</style>