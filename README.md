# WP Masonry Gallery

A lightweight WordPress plugin that adds a true Masonry-style layout option to the native Gallery block using Masonry.js (included in WordPress core). Built for content creators and developers who want a more dynamic, Pinterest-style gallery layout without heavy dependencies.

---

## Features

- Adds a `Masonry` block style to the core `Gallery` block
- Uses WordPress-bundled `Masonry.js` and `imagesLoaded` (no external dependencies)
- Fully responsive layout
- Live preview support in the block editor
- Clean, native integration with WordPress core and Gutenberg

---

## Installation

1. Download the ZIP file from the [Releases](https://github.com/knolaust/wp-masonry-gallery/releases) page or clone this repo.
2. Upload it to your WordPress site via **Plugins → Add New → Upload Plugin**.
3. Activate the plugin.
4. Edit a post or page and insert a **Gallery block**.
5. In the block settings sidebar, select the **“Masonry”** style from the “Styles” panel.

---

## How It Works

- Registers a new block style (`is-style-masonry`) for the `core/gallery` block.
- Enqueues `Masonry.js` and `imagesLoaded` (both bundled in WordPress).
- Initializes Masonry on galleries using that style.
- Adds matching editor styles and scripts for live preview inside the block editor.

---

## Developer Notes

- This plugin does not modify core blocks or templates — it extends the core Gallery block via official APIs.
- Fully compatible with most block themes.
- For best visual results, avoid enabling the "Crop images" option in the Gallery block when using the Masonry style.

---

## Requirements

- WordPress 6.0+
- A block theme or support for the block editor

---

## License

GPLv2 or later.

---

## Author

Built by [Knol Aust](https://github.com/knolaust)

---

## Future Improvements

- Optional settings panel for gutter control
- Custom column breakpoints
- Support for lightbox integration
