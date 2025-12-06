<script setup lang="ts">
import Navbar from '@/components/ui/Navbar.vue';
</script>

<template>
    <Navbar />

    <section
        class="relative overflow-hidden bg-gradient-to-r from-purple-100 via-blue-100 to-green-100 px-8 py-16"
    >
        <!-- SVG Pattern Background -->
        <div class="absolute inset-0 -z-10 h-full w-full">
            <svg
                class="h-full w-full"
                viewBox="0 0 1440 800"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
            >
                <defs>
                    <pattern
                        id="dots"
                        patternUnits="userSpaceOnUse"
                        width="40"
                        height="40"
                        patternTransform="rotate(45)"
                    >
                        <circle
                            cx="10"
                            cy="10"
                            r="2"
                            fill="#3B82F6"
                            opacity="0.1"
                        />
                    </pattern>
                </defs>
                <rect width="1440" height="800" fill="url(#dots)" />
            </svg>
        </div>

        <!-- Content Container -->
        <div
            class="relative z-20 mx-auto grid max-w-7xl items-center gap-12 md:grid-cols-2"
        >
            <!-- Text Content -->
            <div
                class="bg-opacity-90 transform rounded-xl bg-white p-8 shadow-lg backdrop-blur-lg transition duration-300 ease-in-out hover:scale-105"
            >
                <h2 class="mb-4 text-4xl font-extrabold text-gray-800">
                    About Us
                </h2>
                <p class="mb-6 text-lg text-gray-600">
                    We’re a tiny forge with a big Wi-Fi pipe: two sweaty smiths,
                    one grumpy dog, and a 200-year-old anvil that now gets more
                    Shopify pings than hammer hits. Every piece is born in coal
                    and sparks, photographed before the soot dries, and boxed
                    before the metal cools—so you get heirloom-grade steel
                    without leaving your couch.
                </p>
                <div class="space-y-6">
                    <!-- Card for each feature -->
                    <div
                        class="flex items-center space-x-4 rounded-lg bg-gradient-to-tr from-purple-200 via-blue-200 to-green-200 p-4 shadow-md transition-shadow duration-300 hover:shadow-xl"
                    >
                        <div
                            class="transform rounded-full bg-white p-3 shadow-lg transition duration-300 hover:scale-110"
                        >
                            <!-- Icon: Users -->
                            <svg
                                class="h-6 w-6 text-blue-600"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M17 20v-2a4 4 0 00-4-4H9a4 4 0 00-4 4v2H17z"
                                />
                                <circle cx="12" cy="8" r="4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-700">
                                Hand-forged, no faux
                            </h3>
                            <p class="text-sm text-gray-500">
                                If a robot touched it, we recycle it..
                            </p>
                        </div>
                    </div>

                    <div
                        class="flex items-center space-x-4 rounded-lg bg-gradient-to-tr from-purple-200 via-blue-200 to-green-200 p-4 shadow-md transition-shadow duration-300 hover:shadow-xl"
                    >
                        <div
                            class="transform rounded-full bg-white p-3 shadow-lg transition duration-300 hover:scale-110"
                        >
                            <!-- Icon: Lightbulb -->
                            <svg
                                class="h-6 w-6 text-yellow-500"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M9 21h6v-1H9v1zm3-18a4 4 0 00-4 4c0 1.38.56 2.63 1.46 3.54A5.978 5.978 0 009 12h6a5.978 5.978 0 00-1.46-3.46A4 4 0 0015 7a4 4 0 00-4-4z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-700">
                                Ship fast, quench faster
                            </h3>
                            <p class="text-sm text-gray-500">
                                Order today, blade oil-quenched and out the door
                                in 48 h.
                            </p>
                        </div>
                    </div>

                    <div
                        class="flex items-center space-x-4 rounded-lg bg-gradient-to-tr from-purple-200 via-blue-200 to-green-200 p-4 shadow-md transition-shadow duration-300 hover:shadow-xl"
                    >
                        <div
                            class="transform rounded-full bg-white p-3 shadow-lg transition duration-300 hover:scale-110"
                        >
                            <!-- Icon: User Group -->
                            <svg
                                class="h-6 w-6 text-green-600"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M16 14c-1.33 0-2.53.53-3.41 1.39A4.993 4.993 0 0012 20c1.33 0 2.53-.53 3.41-1.39A4.993 4.993 0 0016 14zM8 14c-1.33 0-2.53.53-3.41 1.39A4.993 4.993 0 004 20c1.33 0 2.53-.53 3.41-1.39A4.993 4.993 0 008 14zM12 4c-2.21 0-4 1.79-4 4 0 1.66 1.34 3 3 3h2c1.66 0 3-1.34 3-3 0-2.21-1.79-4-4-4z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-700">
                                Hammer-down guarantee
                            </h3>
                            <p class="text-sm text-gray-500">
                                Break it doing something reasonable? We re-forge
                                or replace it, no medieval quest requirens.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image with Overlay & Hover Effect -->
            <div class="relative p-4">
                <div
                    class="absolute inset-0 transform rounded-xl bg-gradient-to-br from-purple-400 via-blue-400 to-green-400 shadow-lg transition-transform duration-300 hover:scale-105"
                ></div>
                <img
                    src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fvisitkyotango.com%2Fwp-content%2Fuploads%2F2022%2F09%2FDSC1038.jpg&f=1&nofb=1&ipt=fdf44d67d85861195a8ff8e9ef14706ed72017e3adc831578ef6d6843be2193f"
                    alt="About Us"
                    class="relative h-full w-full rounded-xl object-cover shadow-xl transition-opacity duration-300 hover:opacity-90"
                />
            </div>
        </div>
    </section>
</template>
