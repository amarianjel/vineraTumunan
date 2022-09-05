const observer = document.querySelectorAll('.displayjs');

const appearOptions = {
    threshold: 1,
    rootMargin: "0px 0px 150px 0px"
};
const appearOnScroll = new IntersectionObserver
(function(entries, appearOnScroll){
    entries.forEach( entry => {
        if (!entry.isIntersecting){
            return;
        } else{
            entry.target.classList.add('appear');
            appearOnScroll.unobserve(entry.target);
        }
    });
}
, appearOptions);

observer.forEach(item => {
    appearOnScroll.observe(item);
});
