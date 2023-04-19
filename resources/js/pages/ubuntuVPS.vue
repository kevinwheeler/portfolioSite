<template>
    <main ref="main">
        <div class="flex flex-col gap-6">
            <div class="duration-1000 transition data-inviewport from-left">
                <h1 class="text-6xl font-bold text-center">Ubuntu <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">VPS</span></h1>
                <div class="text-l text-gray-400 self-center text-center">2022</div>
            </div>
            <img src="/storage/ubuntu-logo-hero.jpg" alt="Ubuntu VPS Hero" class="md:px-32 sm:px-16 mb-1 duration-1000 transition data-inviewport from-right">
            <h2 class="text-5xl mb-6 font-bold text-center duration-[2000ms] transition data-inviewport fade-in">Project <span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">Description</span></h2>
            <div class="text-2xl">
                <p class="mb-10 font-bold text-center duration-[2000ms] transition data-inviewport fade-in">
                    An Ubuntu VPS hosted by Digital Ocean for cheaply hosting personal projects.
                </p>
                <p class="mb-8">
                    <span class="duration-[2000ms] transition data-inviewport fade-in">In a text file, I recorded all </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">commands I used such that I can quickly recreate a </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">similar server in the future. I also used shell variables </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">for all the values that I would need to change if I were to </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">create an additional Laravel website, such that I can create </span>
                    <span class="duration-[2000ms] transition data-inviewport fade-in">a new Laravel website with https in a matter of minutes. </span>
                </p>
            </div>

            <h2 class="text-5xl mb-6 font-bold duration-[2000ms] transition data-inviewport fade-in">Feat<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">ures</span></h2>

            <ul class="mb-8">
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Uses logwatch, clamAV, apticron, unattended-upgrades (for security updates only), msmtp, fail2ban, ufw, etckeeper</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Daily emails regarding server health using logwatch, apitcron, clamAV, msmtp.</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in">Uses strict file permissions using access control lists to differentiate web server from code deploying user, along with strict file permissions throughout the entire VPS.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">SSH in using password disabled. Only cryptographic key login allowed.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">DigitalOcean firewall also blocks all incoming traffic from IP addresses other than mine on all ports besides 80 and 443.</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in">Automatic OS package security updates using unattended upgrades.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Application dependencies monitored by Dependabot for vulnerabilities.</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Configuration changes versioned by etckeeper</li>
                <li class="text-2xl mb-4 blue-bullet accent-color duration-[2000ms] transition data-inviewport fade-in">Used Lynis for security audit</li>
                <li class="text-2xl mb-4 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Followed Apache and MySQL hardening guides</li>
                <li class="text-2xl mb-48 blue-bullet duration-[2000ms] transition data-inviewport fade-in">Automatic security certificate renewals using certbot & Let's Encrypt.</li>
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
