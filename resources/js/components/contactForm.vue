<!-- Based off of: https://tailwind-elements.com/docs/standard/designblocks/contact/ -->
<template>
    <section class="mb-32 text-center mx-10">
      <h2 class="text-3xl font-bold mb-12">Contact <span class="bg-gradient-to-br from-neutral-400 to-neutral-300 bg-clip-text text-transparent">Me</span></h2>
      <div class="flex flex-col gap-8 md:flex-row max-w-6xl mx-auto">
        <section class="md:w-0 flex-1 flex items-center justify-center md:justify-end">
          <address class="flex flex-col items-begin gap-5 md:gap-10 md:-translate-y-4">
          <div class="flex flex-row items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-10 lg:h-20"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path></svg>
            <span class="text-lg"><a href="tel:+14252725992">+1 (425)272-5992</a></span>
          </div>
          <div class="flex flex-row items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-10 lg:h-20"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path></svg>
            <span class="text-lg"><a href="mailto:AndrewWilliamLaBoy@iCloud.com">AndrewWilliamLaBoy@iCloud.com</a></span>
          </div>
        </address>
        </section>
        <section class="md:w-0 flex-1 max-w-[700px] mx-auto px-3 lg:px-6">
          <!-- <h2 class="text-3xl font-bold mb-12">Contact <span class="bg-gradient-to-br from-neutral-400 to-neutral-300 bg-clip-text text-transparent">Me</span></h2> -->
          <form @submit.prevent="initiateRecaptcha" method="POST">
            <div class="form-group mb-6">
              <input type="text" v-model="name" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                placeholder="Name" required>
            </div>
            <div class="form-group mb-6">
              <input type="email" v-model="emailAddress" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
                placeholder="Email address" required>
            </div>
            <div class="form-group mb-6">
              <textarea v-model="message" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlTextarea13" rows="3" placeholder="Message" required></textarea>
            </div>
              <!-- old classes on submit button:
                 hover:bg-blue-700 hover:shadow-lg
              focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
              active:bg-blue-800 active:shadow-lg -->
            <button type="submit" :disabled="submitLoading" class="w-full px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md bg-gradient-to-br from-neutral-400 to-neutral-600 hover:from-neutral-500 hover:to-neutral-400 hover:shadow-lg focus:from-neutral-500 focus:to-neutral-400 focus:shadow-lg focus:outline-none focus:ring-0 active:from-neutral-600 active:to-neutral-500 active:shadow-lg transition duration-150 ease-in-out">
              <div v-show="submitLoading" class="inline-block h-4 w-4 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]" role="status">
                <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">
                  Loading...
                </span>
              </div>
              <span v-show="!submitLoading">
                Send
              </span>
            </button>
            <p class="mt-2 text-xs text-gray-400 text-left">
              This site is protected by reCAPTCHA and the Google
              <a class="underline" href="https://policies.google.com/privacy">Privacy Policy</a> and
              <a class="underline" href="https://policies.google.com/terms">Terms of Service</a> apply.
            </p>
          </form>
        </section>
      </div>
    </section>

  <!-- Success Modal -->
  <TransitionRoot as="template" :show="displaySuccessModal">
    <Dialog as="div" class="relative z-10" @close="displaySuccessModal = false">
      <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
      </TransitionChild>

      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
          <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <DialogPanel class="relative transform overflow-hidden rounded-lg bg-black px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
              <div>
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                  <CheckIcon class="h-6 w-6 text-green-600" aria-hidden="true" />
                </div>
                <div class="mt-3 text-center sm:mt-5">
                  <DialogTitle as="h3" class="text-lg font-medium leading-6 text-white">Contact successful</DialogTitle>
                  <div class="mt-2">
                    <p class="text-sm text-white">Thank you for contacting me! I will get back to you shortly.</p>
                  </div>
                </div>
              </div>
              <div class="mt-5 sm:mt-6">
                <button type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-gradient-to-br from-neutral-400 to-neutral-600 hover:from-neutral-500 hover:to-neutral-400 hover:shadow-lg focus:from-neutral-500 focus:to-neutral-400 focus:shadow-lg active:from-neutral-600 active:to-neutral-500 active:shadow-lg px-4 py-2 text-base font-medium text-white shadow-sm focus:outline-none sm:text-sm ring-neutral-700" @click="displaySuccessModal = false">
                  Okay
                </button>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>

  <!-- Error Modal -->
  <TransitionRoot as="template" :show="displayErrorModal">
    <Dialog as="div" class="relative z-10" @close="displayErrorModal = false">
      <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
      </TransitionChild>

      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
          <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <DialogPanel class="relative transform overflow-hidden rounded-lg bg-black px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
              <div class="absolute top-0 right-0 hidden pt-4 pr-4 sm:block">
                <button type="button" class="rounded-md bg-neutral-500 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-neutral-200" @click="displayErrorModal = false">
                  <span class="sr-only">Close</span>
                  <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                </button>
              </div>
              <div class="sm:flex sm:items-start">
                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                  <ExclamationTriangleIcon class="h-6 w-6 text-red-600" aria-hidden="true" />
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                  <DialogTitle as="h3" class="text-lg font-medium leading-6 text-white">Error</DialogTitle>
                  <div class="mt-2">
                    <p class="text-sm text-white">An error has occured. Please try again.</p>
                  </div>
                </div>
              </div>
              <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                <button type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm" @click="displayErrorModal = false">Okay</button>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>

  <vue-recaptcha size="invisible" @verify="recaptchaSuccess" @error="displayErrorModal" ref="recaptcha" sitekey="6Leg0ZwkAAAAAKgPkKjPde3eYTrNmcu5EeJm_9dj"></vue-recaptcha>
</template>

<style> .grecaptcha-badge { visibility: hidden;} </style>

<script>
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { CheckIcon, ExclamationTriangleIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import { ref } from 'vue'
import { VueRecaptcha } from 'vue-recaptcha';

    
export default {
  setup(props) {
    const displayErrorModal = ref(false);
    const displaySuccessModal = ref(false);
    const name = ref('');
    const emailAddress = ref('');
    const message = ref('');
    const recaptcha = ref(null);
    const submitLoading = ref(false);

    const initiateRecaptcha = () => {
      submitLoading.value = true;
      recaptcha.value.execute();
      // Now either recaptchaSuccess or recaptchaError will be called.
    };

    const recaptchaError = () => {
      submitLoading.value = false;
      displayErrorModal.value = true;
    }

    const recaptchaSuccess = async (token) => {
      const fd = new FormData();
      fd.append('name', name.value);
      fd.append('emailAddress', emailAddress.value);
      fd.append('message', message.value);
      fd.append('g-recaptcha-response', token);

      try {
        const response = await axios.post("/api/email", fd);
        recaptcha.value.reset(); // Reset so that recaptcha can be used again.
        submitLoading.value = false;
        if (response.status == 200) {
          clearForm();
          displaySuccessModal.value = true;
        }else{
          displayErrorModal.value = true;
        }
      } catch (err) {
        recaptcha.value.reset();
        submitLoading.value = false;
        displayErrorModal.value = true;
      }
    };


    const clearForm = () => {
      name.value = '';
      emailAddress.value = '';
      message.value = '';
    };

    return {
        clearForm,
        displayErrorModal,
        displaySuccessModal,
        emailAddress,
        initiateRecaptcha,
        message,
        name,
        recaptcha,
        recaptchaError,
        recaptchaSuccess,
        submitLoading
    }
  },
  components: {
        CheckIcon, Dialog, DialogPanel, DialogTitle, ExclamationTriangleIcon,
        TransitionChild, TransitionRoot, VueRecaptcha, XMarkIcon,
        
  },
}
</script>