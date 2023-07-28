
    const getObserver = () => {
         //Add is-inViewport class to elements in viewport. Remove class when not in viewport.
         const inViewport = (entries) => {
           entries.forEach(entry => {
             entry.target.classList.toggle("is-inViewport", entry.isIntersecting);
           });
         };
         return new IntersectionObserver(inViewport);
    };

    const observeElements = (observer, obsOptions, root) => {
         const elsToObserve = root.querySelectorAll('.data-inviewport');
         elsToObserve.forEach(El => {
            observer.observe(El, obsOptions);
         });
    }

    const unobserveElements = (observer, root) => {
         const elsToUnobserve = root.querySelectorAll('.data-inviewport');
         elsToUnobserve.forEach(El => {
           observer.unobserve(El);
           El.classList.remove('is-inViewport');
         });
    }
    const observerHelpers = {
         getObserver,
         observeElements,
         unobserveElements
    }

export default observerHelpers;
export { getObserver, observeElements, unobserveElements };
