# La Cigueña

Esta información la voy a ir actualizando

## Preview

[Home](https://armix.com.ar/staging/lc/)

[Tienda](https://armix.com.ar/staging/lc/shop.php)

[Checkout](https://armix.com.ar/staging/lc/checkout.php)

[Products Single](https://armix.com.ar/staging/lc/products-single.php)

[Page Single](https://armix.com.ar/staging/lc/page.php)

[Club](https://armix.com.ar/staging/lc/club.php)

[Thank You](https://armix.com.ar/staging/lc/thank-you.php)

## HTML
Cree una carpetita que se llama html para q el copy paste sea mas facil

## Estilos
Agregar globalmente el archivo

```html
 /stylesheets/style.css
```

Agregar fuentes de Google y viewports

```html
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
```

## Javascripts

Agregar jQuery y Librerias

```html
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
```

Scripts para animaciones e inputs

```html
javascripts/menu-float.js
javascripts/main-slider.js
javascripts/wizard.js
javascripts/banner-slider.js
javascripts/products-carousel.js
javascripts/filters-float.js
javascripts/jquery.range.min.js
javascripts/form.js
javascripts/checkout.js
javascripts/products-slider.js
javascripts/testimonials.js
javascripts/location.js
```

## Estructura de Módulos

Para poder hacer la animacion del blur necesito que se respete esta estructura de módulos

```html
<body>
	...
	<div class="menu-float">...</div>
	<div class="filters-float">...</div>
	<div class="cart cart--large">...</div>
	..
	<div class="main-content">
		<a href="#" class="locations-bar">...</a>
		<header class="header">...</header>
		...
		<footer class="footer">...</footer>
	</div>
	...
</body>
```

## Imagenes
```html
products-item 406x220
products-gallery 820x615
```

## Lectura Recomendada
Son 5 minutos de leer que creo que les va a servir mucho de como estan escritas las clases CSS y las estructuras de archivos

[BEM Notation](https://webdesign.tutsplus.com/es/articles/an-introduction-to-the-bem-methodology--cms-19403)

[ATOMIC DESIGN](https://bradfrost.com/blog/post/atomic-web-design/)

## Estado

### General
- [x] locations-bar
- [x] locations-content
- [x] header
- [ ] header-search
- [x] cart
- [x] footer

### Home
- [x] main-slider
- [x] products-search-form
- [x] wizard
- [x] banner-slider
- [x] products-carousel
- [x] club-banner
- [x] testimonials

### Shop
- [x] products-search-form
- [x] filters-float
- [x] products-list

### Product Single
- [x] products-content
- [x] products-carousel

### Checkout
- [x] checkout

### Thank You
- [x] thank-you

### Club
- [x] page-cover
- [x] club-content

### Generic Page
- [x] page-cover
- [x] editor
