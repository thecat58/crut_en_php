let scrollingInterval;

function startScrolling(element) {
    scrollingInterval = setInterval(() => {
        element.scrollTop += 1;
    }, 10);
}

function stopScrolling() {
    clearInterval(scrollingInterval);
}