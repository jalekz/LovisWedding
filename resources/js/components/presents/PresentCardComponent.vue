<template>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card">
            <header class="bg-primary padding"></header>
            <div class="card-body padding">
                <h2 class="card-title">{{present.title}}</h2>
                <h4 class="card-subtitle">{{present.presentDescription}}</h4>
                <p class="card-text">{{present.presentLinks}}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            present: {
                type: Object
            }
        }
    }
</script>
