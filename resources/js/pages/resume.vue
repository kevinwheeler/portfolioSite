<template>
    <main>
        <Nav additionalClasses="mt-6 mx-6" />
        <div class="flex flex-col gap-6">
            <h1 class="text-6xl font-bold text-center">Rés<span class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent">umé</span></h1>
            <!-- <div class="text-l text-gray-400 self-center text-center">Last Updated March 2023</div> -->
            <div class="w-full mb-12" id="pdfview"></div>
            <a href="/storage/Andrew_LaBoy_Resume.pdf" class="w-full self-center px-6 py-2.5 mb-24 text-center text-white font-medium text-xs
            leading-tight uppercase rounded shadow-md bg-gradient-to-br
            from-sky-500 to-blue-800 hover:from-sky-600 hover:to-sky-900
            hover:shadow-lg focus:from-sky-600 focus:to-sky-900 focus:shadow-lg
            focus:outline-none focus:ring-0 active:from-sky-700
            active:to-sky-900 active:shadow-lg transition duration-150
            ease-in-out">Download</a>
        </div>
    </main> 
</template>

<script>
import { onMounted, ref, watch } from '@vue/runtime-core'
import Nav from '../components/nav.vue'

export default {
    
    components: {
        Nav,
    },
    setup() {
        const adobeApiPDFReady = ref(false);
        onMounted(() => {
            document.addEventListener("adobe_dc_view_sdk.ready", () => {
            	adobeApiPDFReady.value = true;
            });
            
            // Dynamically load Adobe SDK Viewer for this page
            const plugin = document.createElement("script");
            plugin.setAttribute(
            	"src",
            	"https://documentcloud.adobe.com/view-sdk/viewer.js"
            );
            plugin.async = true;
            document.head.appendChild(plugin);
        });

        watch([adobeApiPDFReady], (val)=> {
            if (val) {
			    // val == true ; Adobe is loaded on page
			    let adobeDCView = new window.AdobeDC.View({
			    	clientId: import.meta.env.VITE_ADOBE_PDF_EMBED_KEY,
			    	divId: "pdfview",
			    	});
                    adobeDCView.previewFile({
            			content:{location: {url: "/storage/Andrew_LaBoy_Resume.pdf"}},
            			metaData:{fileName: "Andrew_LaBoy_Resume.pdf"}
            		}, {embedMode: "IN_LINE"});
                    // adobeDCView.previewFile
			}
        });

        return {
        }
    },
    methods: {
    }
}
</script>
