<template>
    <div class="card m-2">
        <div class="card-body">
            <h5 class="card-title">{{ name }}</h5>
            <p class="card-text">{{ description }}</p>
            <a :href="'mailto:' + email" class="card-link btn btn-link">Enviar email</a>
            <a :href="'https://wa.me/' + phone" target="_about" class="card-link">WhatsApp</a>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        "id",
        "name",
        "description",
        "phone",
        "email"
    ]
}
</script>