<template>
    <div>
        <h2>Test Component {{ name }}</h2>
        <slot>Empty slot</slot>
    </div>
</template>

<script>
export default {
    name: 'Test',
    props: ['name']
}
</script>