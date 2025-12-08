<script setup lang="ts">
import Navbar from '@/components/ui/Navbar.vue';
import { usePage } from '@inertiajs/vue3';

const page = usePage();
const id = Number(page.props.id);

const products = [
  {
    id: 1,
    name: 'Seki Kitchen Knife',
    href: '#',
    imageSrc: 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fblog.hocho-knife.com%2Fwp-content%2Fuploads%2F2019%2F10%2FKT-KP-1105-800.jpg&f=1&nofb=1&ipt=f12ebf7a837c31b081132cdba36fa19d3c380bab558d8b5fc25e644ef17fe3a2',
    imageAlt: "Seki Kitchen Knife",
    price: '$250',
    specs: 'Damascus Steel',
  },
  {
    id: 2,
    name: 'Masamune',
    href: '#',
    imageSrc: 'https://images.unsplash.com/photo-1671015522549-e7aa41ded44f?q=80&w=871&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    imageAlt: "Masamune(Katana)",
    price: '$1100',
    specs: 'Decorated Katana',
  },
  {
    id: 3,
    name: 'Muromachi',
    href: '#',
    imageSrc: 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.darksword-armory.com%2Fwp-content%2Fuploads%2F2016%2F11%2FWakizashi-katana-blade-hilt-2.jpg&f=1&nofb=1&ipt=7bbba5bf21bdaff8d488c45671639e0d6c8ad2400a49e13366b1f1085d39fa0e',
    imageAlt: "Muromachi(Wakizashi)",
    price: '$2000',
    specs: 'Decorated Wakizashi',
  },
    {
    id: 4,
    name: 'Kurogane Bread Knife',
    href: '#',
    imageSrc: 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fknifewear.com%2Fcdn%2Fshop%2Ffiles%2Ftamahagane-bread-2.jpg%3Fv%3D1694122837%26width%3D1946&f=1&nofb=1&ipt=6a21f29d36f90c697ebbe25808c0a02d0004b7ca56997c974c447291fd2e3cae',
    imageAlt: "Kurogane Bread Knife",
    price: '$450',
    specs: 'Tamahagane Steel',
  },
]

const product = products.find(p => p.id === id);
</script>

<template>
    <Navbar />

    <div class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <div class="-mx-4 flex flex-wrap" v-if="product">

                <!-- Product Image -->
                <div class="mb-8 w-full px-4 md:w-1/2">
                    <img
                        :src="product.imageSrc"
                        :alt="product.name"
                        class="mb-4 h-auto w-full rounded-lg shadow-md"
                        :id="product.id.toString()"
                    />
                </div>

                <!-- Product Details -->
                <div class="w-full px-4 md:w-1/2">
                    <h2 class="mb-2 text-3xl font-bold">
                        {{ product.name }}
                    </h2>

                    <p class="mb-4 text-gray-600">{{ product.specs }}</p>

                    <div class="mb-4">
                        <span class="mr-2 text-2xl font-bold">
                            {{ product.price }}
                        </span>
                        <span class="text-gray-500 line-through">
                            $399.99
                        </span>
                    </div>

                    <!-- Stars -->
                    <div class="mb-4 flex items-center">
                        <template v-for="i in 5" :key="i">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="size-6 text-yellow-500"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006
                                    5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527
                                    1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354
                                    7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273
                                    -4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434
                                    2.082-5.005Z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </template>
                        <span class="ml-2 text-gray-600">4.5 (120 reviews)</span>
                    </div>

                    <!-- Short description -->
                    <p class="mb-6 text-gray-700">
                        Experience premium performance with this crafted item.
                        Built using top-quality materials and designed for enthusiasts and collectors.
                    </p>

                    <!-- Quantity -->
                    <div class="mb-6">
                        <label class="mb-1 block text-sm font-medium text-gray-700">Quantity:</label>
                        <input
                            type="number"
                            min="1"
                            value="1"
                            class="w-12 rounded-md border-gray-300 text-center
                                   shadow-sm focus:border-indigo-300
                                   focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        />
                    </div>

                    <!-- Buttons -->
                    <div class="mb-6 flex space-x-4">
                        <button
                            class="flex items-center gap-2 rounded-md bg-indigo-600 px-6 py-2
                                   text-white hover:bg-indigo-700 focus:ring-2
                                   focus:ring-indigo-500 focus:ring-offset-2 focus:outline-none"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343
                                    1.087.835l.383 1.437M7.5 14.25a3
                                    3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3
                                    2.1-4.684 2.924-7.138a60.114
                                    60.114 0 0 0-16.536-1.84M7.5 14.25
                                    5.106 5.272M6 20.25a.75.75 0
                                    1 1-1.5 0 .75.75 0 0 1
                                    1.5 0Zm12.75 0a.75.75 0 1
                                    1-1.5 0 .75.75 0 0 1 1.5 0Z"
                                />
                            </svg>
                            Add to Cart
                        </button>

                        <button
                            class="flex items-center gap-2 rounded-md bg-gray-200 px-6 py-2
                                   text-gray-800 hover:bg-gray-300 focus:ring-2
                                   focus:ring-gray-500 focus:ring-offset-2 focus:outline-none"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935
                                    0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1
                                    3.75 3 5.765 3 8.25c0 7.22 9 12
                                    9 12s9-4.78 9-12Z"
                                />
                            </svg>
                            Wishlist
                        </button>
                    </div>

                    <!-- Features -->
                    <div>
                        <h3 class="mb-2 text-lg font-semibold">Key Features:</h3>
                        <ul class="list-inside list-disc text-gray-700">
                            <li>Premium build quality</li>
                            <li>High-grade materials</li>
                            <li>Collector-level craftsmanship</li>
                            <li>Designed for performance and durability</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- If no product found -->
            <div v-else class="text-center py-20 text-gray-600">
                Product not found.
            </div>
        </div>
    </div>
</template>
