<template>
    <main ref="main">
        <div class="flex flex-col gap-6">
            <div class="duration-1000 transition data-inviewport from-left motion-reduce:transition-none">
                <h1 class="text-6xl font-bold text-center">Ubuntu <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">VPS</span></h1>
                <div class="text-l text-gray-400 self-center text-center">2022</div>
            </div>
            <img src="/storage/ubuntu-logo-hero.jpg" alt="Ubuntu VPS Hero" class="md:px-32 sm:px-16 mb-1 duration-1000 transition data-inviewport from-right motion-reduce:transition-none">
            <h2 class="text-5xl mb-6 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">
                    An Ubuntu VPS hosted by Digital Ocean for cheaply hosting projects.
                </p>
                <p class="mb-8">
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">In a text file, I recorded all </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">commands I used such that I can quickly recreate a </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">similar server in the future. I also used shell variables </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">for all the values that I would need to change if I were to </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">create an additional Laravel website, such that I can create </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">a new Laravel website with https in a matter of minutes. </span>
                </p>
            </div>

            <h2 class="text-5xl mb-6 font-bold duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Feat<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">ures</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Uses logwatch, clamAV, apticron, unattended-upgrades (for security updates only), msmtp, fail2ban, ufw, etckeeper</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Daily emails regarding server health using logwatch, apitcron, clamAV, msmtp.</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Uses strict file permissions using access control lists to differentiate web server from code deploying user, along with strict file permissions throughout the entire VPS.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">SSH in using password disabled. Only cryptographic key login allowed.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">DigitalOcean firewall also blocks all incoming traffic from IP addresses other than mine on all ports besides 80 and 443.</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Automatic OS package security updates using unattended upgrades.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Application dependencies monitored by Dependabot for vulnerabilities.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Configuration changes versioned by etckeeper</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Used Lynis for security audit</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Followed Apache and MySQL hardening guides</li>
                <li class="text-2xl mb-48 blue-bullet duration-[2000ms] transition data-inviewport fade-in motion-reduce:transition-none">Automatic security certificate renewals using certbot & Let's Encrypt.</li>
            </ul>
        </div>
    </main> 
</template>

<script>
import { ref } from 'vue'
import { getObserver, observeElements, unobserveElements } from '../helpers/observerHelpers.js'
import { onBeforeUnmount, onMounted } from '@vue/runtime-core'

export default {
    
    components: {
    },
    setup() {
        const main = ref(null);
        const obs = getObserver();

        onMounted(() => {
            observeElements(obs, {}, main.value);
        })

        onBeforeUnmount(() => {
            unobserveElements(obs, main.value);
        })

        return {
            main,
        }
    },
    methods: {
    }
}
</script>
