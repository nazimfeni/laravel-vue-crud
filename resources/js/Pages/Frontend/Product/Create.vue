<template>
    <Head title="Create Product" />
    <Frontend>
        <div v-if="$page.props.flash.message" class="alert">
            {{ $page.props.flash.message }}
          </div>
        <div class="mt-4 mx-4">
            <div class="flex justify-between">
                <h5>Create Product</h5>
                <Link
                    :href="route('products.index')"
                    class="bg-red-600 text-white  py-2 px-5 rounded mb-4 inline-block"
                    >Back</Link>
            </div>
        <form @submit.prevent="saveProduct()">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-6">
                <div class="mb-3">
                    <label>Product Name</label>
                    <input type="text" v-model="form.name" class="py-1 w-full"> 
                    <div v-if="errors.name" class="text-red-500">{{ errors.name }}</div>
                </div>
                <div class="mb-3">
                    <label>Product Price</label>
                    <input type="text" v-model="form.price" class="py-1 w-full"> 
                    <div v-if="errors.price"  class="text-red-500">{{ errors.price }}</div>
                </div>

                <div class="mb-3">
                    <Link
                    :href="route('products.index')"
                    class="bg-red-600 text-white  py-2 px-5 rounded mb-4 inline-block"
                    >Back</Link>
                    
                    <button type="submit"
                    :disabled="form.processing"
                    class="bg-blue-500 text-white py-2 px-5 rounded mb-4">
                   
                    <span v-if="form.processing"> Saving...</span>
                    <span v-else>Save</span>
                    </button>
                </div>
            </div>
            </div>
        </form>
        </div>
    
    </Frontend>
</template>

<script setup>

import Frontend from "@/Layouts/FrontendLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import { Link } from "@inertiajs/vue3";

defineProps({ errors: Object })

const form = useForm({
    name:'',
    price:'',
});

const saveProduct=()=>{

    const res = form.post(route('products.store'))
    if(res){
        form.reset();
    }
}


</script>
