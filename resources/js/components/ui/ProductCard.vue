<template>
  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Our Finest Crafts</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div v-for="product in products" :key="product.id" class="group relative">
          <img :src="product.imageSrc" :alt="product.imageAlt" class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a :href="`product/${product.id}`">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  {{ product.name }}
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">{{ product.specs }}</p>
            </div>
            <p class="text-sm font-medium text-gray-900">{{ product.price }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import ProductPage from '@/pages/ProductPage.vue';

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
</script>
