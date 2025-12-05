<script setup lang="ts"></script>

<template>
    <div class="flex flex-col justify-center p-4 sm:h-screen">
        <div
            class="mx-auto w-full max-w-md rounded-2xl border border-gray-300 p-8"
        >
            <div class="mb-12 text-center">
                <span class="mx-auto text-xl font-black leading-none text-gray-900 select-none">Tetsu<span
                            class="text-indigo-600">.</span></span>
            </div>

            <form>
                <div class="space-y-6">
                    <div>
                        <label
                            class="mb-2 block text-sm font-medium text-slate-900"
                            >Email Id</label
                        >
                        <input
                            name="email"
                            type="text"
                            class="w-full rounded-md border border-gray-300 bg-white px-4 py-3 text-sm text-slate-900 outline-blue-500"
                            placeholder="Enter email"
                        />
                    </div>
                    <div>
                        <label
                            class="mb-2 block text-sm font-medium text-slate-900"
                            >Password</label
                        >
                        <input
                            name="password"
                            type="password"
                            class="w-full rounded-md border border-gray-300 bg-white px-4 py-3 text-sm text-slate-900 outline-blue-500"
                            placeholder="Enter password"
                        />
                    </div>
                    <div>
                        <label
                            class="mb-2 block text-sm font-medium text-slate-900"
                            >Confirm Password</label
                        >
                        <input
                            name="cpassword"
                            type="password"
                            class="w-full rounded-md border border-gray-300 bg-white px-4 py-3 text-sm text-slate-900 outline-blue-500"
                            placeholder="Enter confirm password"
                        />
                    </div>

                    <div class="flex items-center">
                        <input
                            id="remember-me"
                            name="remember-me"
                            type="checkbox"
                            class="h-4 w-4 shrink-0 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                        />
                        <label
                            for="remember-me"
                            class="ml-3 block text-sm text-slate-600"
                        >
                            I accept the
                            <a
                                href="javascript:void(0);"
                                class="ml-1 font-medium text-blue-600 hover:underline"
                                >Terms and Conditions</a
                            >
                        </label>
                    </div>
                </div>

                <div class="mt-12">
                    <button
                        type="button"
                        class="w-full cursor-pointer rounded-md bg-blue-600 px-4 py-3 text-sm font-medium tracking-wider text-white hover:bg-blue-700 focus:outline-none"
                    >
                        Create an account
                    </button>
                </div>
                <p class="mt-6 text-center text-sm text-slate-600">
                    Already have an account?
                    <a
                        href="javascript:void(0);"
                        class="ml-1 font-medium text-blue-600 hover:underline"
                        >Login here</a
                    >
                </p>
            </form>
        </div>
    </div>
</template>
