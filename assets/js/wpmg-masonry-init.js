
// Wait for the DOM and images to load before initializing Masonry
document.addEventListener('DOMContentLoaded', function () {
    const galleries = document.querySelectorAll('.wp-block-gallery.is-style-masonry');

    galleries.forEach(gallery => {
        imagesLoaded(gallery, function () {
            new Masonry(gallery, {
                itemSelector: 'figure',
                percentPosition: true,
                gutter: 10
            });
        });
    });
});
