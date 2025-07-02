
wp.domReady(function () {
    const { select } = wp.data;

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
