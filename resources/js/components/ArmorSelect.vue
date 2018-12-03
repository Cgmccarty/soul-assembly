<template>
    <select id="head_input" name="head_input" class="input armor text-truncate text-dark">
        <option v-for="armor in armors" v-bind:value="armor.name">None</option>
    </select>
</template>
