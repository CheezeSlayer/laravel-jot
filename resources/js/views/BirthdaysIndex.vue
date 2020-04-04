<template>
    <ContactsList endpoint="/api/birthdays"></ContactsList>
</template>

<script>
import ContactsList from '../components/ContactsList';

export default {
    components: {
        ContactsList,
    }
}
</script>

<style>

</style>