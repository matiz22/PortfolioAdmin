<script lang="ts" setup>
</script>

<template>
    <div class="font-sans">
        <!-- Navbar -->
        <nav class="fixed top-4 left-4 right-4 w-auto bg-primary bg-opacity-90 text-black py-3 z-50 rounded-lg">
            <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
                <h1 class="text-xl font-bold">My Portfolio</h1>
                <ul class="flex space-x-6 list-none m-0 p-0">
                    <li><a class="text-black hover:text-base-content transition-colors" href="#hero">Home</a></li>
                    <li><a class="text-black hover:text-base-content transition-colors" href="#about">About</a></li>
                    <li><a class="text-black hover:text-base-content transition-colors" href="#skills">Skills</a></li>
                    <li><a class="text-black hover:text-base-content transition-colors" href="#projects">Projects</a>
                    </li>
                    <li><a class="text-black hover:text-base-content transition-colors" href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="hero"
                 class="bg-gradient-to-r from-primary to-secondary text-primary-content py-32 px-4 text-center mt-20">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">Welcome to My Portfolio</h1>
                <p class="text-xl mb-8">Showcasing my work and skills as a developer.</p>
                <button
                    class="bg-base-100 text-primary px-8 py-3 rounded-lg font-semibold hover:bg-base-200 transition-colors">
                    View My Work
                </button>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20 px-4 text-center bg-base-100">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold mb-6 text-base-content">About Me</h2>
                <p class="text-lg text-base-content">I'm a passionate developer with experience in web technologies.</p>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="bg-base-200 py-20 px-4 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold mb-6 text-base-content">Skills</h2>
                <ul class="flex flex-wrap justify-center gap-4 list-none p-0">
                    <li class="bg-base-100 text-base-content px-6 py-3 rounded-lg shadow-md">Vue.js</li>
                    <li class="bg-base-100 text-base-content px-6 py-3 rounded-lg shadow-md">React</li>
                    <li class="bg-base-100 text-base-content px-6 py-3 rounded-lg shadow-md">Node.js</li>
                    <li class="bg-base-100 text-base-content px-6 py-3 rounded-lg shadow-md">TypeScript</li>
                </ul>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-20 px-4 text-center bg-base-100">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl font-bold mb-6 text-base-content">Projects</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-base-200 text-base-content p-6 rounded-lg shadow-md">
                        <h3 class="text-2xl font-semibold mb-4">Project 1</h3>
                        <p class="text-base-content">Description of project.</p>
                    </div>
                    <div class="bg-base-200 text-base-content p-6 rounded-lg shadow-md">
                        <h3 class="text-2xl font-semibold mb-4">Project 2</h3>
                        <p class="text-base-content">Description of project.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="bg-base-200 py-20 px-4 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold mb-6 text-base-content">Contact</h2>
                <p class="text-lg text-base-content">Get in touch: email@example.com</p>
            </div>
        </section>
    </div>
</template>
