<script setup>
import {ref} from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {Link} from '@inertiajs/vue3';
import Header from './Header.vue'

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="container max-auto min-h-screen" data-theme="cupcake">

        <Header class="w-11/12"/>
        <main>
            <slot/>
        </main>
    </div>


</template>
