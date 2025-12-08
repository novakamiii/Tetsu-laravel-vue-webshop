<script setup lang="ts">
import Navbar from '@/components/ui/Navbar.vue';

</script>

<template>
    <Navbar/>

    <!-- Contact Us Section -->
    <section class="px-4 py-20 md:px-12 lg:px-24">
        <div class="mx-auto max-w-7xl">
            <!-- Section Header -->
            <div class="mb-16 px-4 text-center">
                <p class="mb-3 text-base font-medium text-gray-500">
                    Get In Touch
                </p>
                <h2 class="mb-6 text-4xl font-bold text-black md:text-5xl">
                    Contact Us
                </h2>
                <p
                    class="mx-auto max-w-4xl text-lg leading-relaxed text-gray-600"
                >
                    Have questions or ready to start your project? We'd love to
                    hear from you. Reach out and let's create something amazing
                    together.
                </p>
            </div>

            <!-- Contact Content -->
            <div class="rounded-none bg-white p-12 shadow-sm">
                <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                    <!-- Contact Information -->
                    <div>
                        <h3 class="mb-8 text-2xl font-semibold text-black">
                            Get in touch
                        </h3>

                        <!-- Contact Info Items -->
                        <div class="space-y-6">
                            <!-- Phone -->
                            <div class="flex items-start">
                                <div class="mr-4 rounded-none bg-black p-3">
                                    <svg
                                        class="h-6 w-6 text-white"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                        ></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4
                                        class="mb-1 text-lg font-semibold text-black"
                                    >
                                        Phone
                                    </h4>
                                    <p class="text-lg text-gray-600">
                                        +530000000000
                                    </p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="mr-4 rounded-none bg-black p-3">
                                    <svg
                                        class="h-6 w-6 text-white"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                        ></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4
                                        class="mb-1 text-lg font-semibold text-black"
                                    >
                                        Email
                                    </h4>
                                    <p class="text-lg text-gray-600">
                                        tetsu@murashiki.com
                                    </p>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="flex items-start">
                                <div class="mr-4 rounded-none bg-black p-3">
                                    <svg
                                        class="h-6 w-6 text-white"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                        ></path>
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                        ></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4
                                        class="mb-1 text-lg font-semibold text-black"
                                    >
                                        Office
                                    </h4>
                                    <p class="text-lg text-gray-600">
                                        123 Shibuya, Suite 100<br />Japan, JP 10001
                                    </p>
                                </div>
                            </div>

                            <!-- Hours -->
                            <div class="flex items-start">
                                <div class="mr-4 rounded-none bg-black p-3">
                                    <svg
                                        class="h-6 w-6 text-white"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                        ></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4
                                        class="mb-1 text-lg font-semibold text-black"
                                    >
                                        Business Hours
                                    </h4>
                                    <p class="text-lg text-gray-600">
                                        Mon - Fri: 9:00 AM - 6:00 PM<br />Sat:
                                        10:00 AM - 4:00 PM
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div>
                        <h3 class="mb-8 text-2xl font-semibold text-black">
                            Send us a message
                        </h3>

                        <form class="space-y-6">
                            <!-- Name & Email -->
                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <div>
                                    <label
                                        for="name"
                                        class="mb-2 block text-lg font-medium text-black"
                                        >Full Name</label
                                    >
                                    <input
                                        type="text"
                                        id="name"
                                        class="w-full rounded-none border border-gray-300 px-4 py-3 text-lg focus:border-black focus:outline-none"
                                        placeholder="Your name"
                                    />
                                </div>
                                <div>
                                    <label
                                        for="email"
                                        class="mb-2 block text-lg font-medium text-black"
                                        >Email Address</label
                                    >
                                    <input
                                        type="email"
                                        id="email"
                                        class="w-full rounded-none border border-gray-300 px-4 py-3 text-lg focus:border-black focus:outline-none"
                                        placeholder="your@email.com"
                                    />
                                </div>
                            </div>

                            <!-- Subject -->
                            <div>
                                <label
                                    for="subject"
                                    class="mb-2 block text-lg font-medium text-black"
                                    >Subject</label
                                >
                                <input
                                    type="text"
                                    id="subject"
                                    class="w-full rounded-none border border-gray-300 px-4 py-3 text-lg focus:border-black focus:outline-none"
                                    placeholder="What is this regarding?"
                                />
                            </div>

                            <!-- Message -->
                            <div>
                                <label
                                    for="message"
                                    class="mb-2 block text-lg font-medium text-black"
                                    >Message</label
                                >
                                <textarea
                                    id="message"
                                    rows="5"
                                    class="w-full rounded-none border border-gray-300 px-4 py-3 text-lg focus:border-black focus:outline-none"
                                    placeholder="Tell us about your project..."
                                ></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button
                                type="submit"
                                class="w-full bg-black px-8 py-4 text-lg font-medium text-white transition-colors hover:bg-gray-800"
                            >
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
